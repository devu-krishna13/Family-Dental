<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // Blog Listing Page
    public function index(Request $request)
    {
        $selectedCategory = $request->query('category');
        $query = Blog::query();

        if ($selectedCategory && $selectedCategory !== 'All') {
            $query->where('category', $selectedCategory);
        }

        $articles = $query->orderBy('created_at', 'desc')->get();
        $categories = ['All', 'Aligners', 'Implants', 'Hygiene', 'General Care'];

        return view('blog.index', compact('articles', 'categories', 'selectedCategory'));
    }

    // Blog Details Page
    public function show($slug)
    {
        $article = Blog::where('slug', $slug)->firstOrFail();
        
        // Get related articles (exclude current one)
        $related = Blog::where('slug', '!=', $slug)->orderBy('created_at', 'desc')->take(3)->get();

        return view('blog.show', compact('article', 'related'));
    }

    // Homepage latest articles helper
    public static function getLatestArticles()
    {
        return Blog::orderBy('created_at', 'desc')->take(3)->get();
    }
}
