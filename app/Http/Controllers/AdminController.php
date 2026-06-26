<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // Dashboard: List all articles
    public function dashboard()
    {
        $articles = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('articles'));
    }

    // Show Create Form
    public function create()
    {
        $article = new Blog(); // Empty model for shared form view compatibility
        return view('admin.form', compact('article'))->with('isEdit', false);
    }

    // Process Store Action
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'excerpt' => 'required|max:500',
            'content' => 'required',
            'read_time' => 'required|max:50',
            'image' => 'nullable|url',
        ]);

        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;

        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'category' => $request->category,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'read_time' => $request->read_time,
            'date' => date('F d, Y'),
            'image' => $request->image ?? 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?q=80&w=600&auto=format&fit=crop',
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Article created successfully!');
    }

    // Show Edit Form
    public function edit($id)
    {
        $article = Blog::findOrFail($id);
        return view('admin.form', compact('article'))->with('isEdit', true);
    }

    // Process Update Action
    public function update(Request $request, $id)
    {
        $article = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'excerpt' => 'required|max:500',
            'content' => 'required',
            'read_time' => 'required|max:50',
            'image' => 'nullable|url',
        ]);

        // Regenerate slug only if title changes
        $slug = $article->slug;
        if ($request->title !== $article->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $counter = 1;
            while (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
        }

        $article->update([
            'title' => $request->title,
            'slug' => $slug,
            'category' => $request->category,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'read_time' => $request->read_time,
            'image' => $request->image ?? $article->image,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Article updated successfully!');
    }

    // Process Delete Action
    public function destroy($id)
    {
        $article = Blog::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Article deleted successfully!');
    }
}
