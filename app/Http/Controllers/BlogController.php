<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // API endpoint helper
    private static function fetchBlogsFromApi()
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'X-API-KEY' => 'pk_JROGfCHoFRcJFlGZ68Ff7BPSxdVSyqvJ'
            ])->timeout(6)->get('https://blogs.task19.com/api/v1/projects/blogs');

            if ($response->successful()) {
                $data = $response->json();
                $blogs = $data['blogs'] ?? [];
                
                foreach ($blogs as &$blog) {
                    // Generate local slug
                    $blog['slug'] = Str::slug($blog['title']);
                    
                    // Format image path
                    if (isset($blog['cover_image']) && str_starts_with($blog['cover_image'], '/')) {
                        $blog['image'] = 'https://blogs.task19.com' . $blog['cover_image'];
                    } else {
                        $blog['image'] = $blog['cover_image'] ?? '';
                    }

                    // Parse sections into HTML content
                    $contentHtml = '';
                    if (isset($blog['sections']) && is_array($blog['sections'])) {
                        foreach ($blog['sections'] as $section) {
                            if (!empty($section['image_path'])) {
                                $imgUrl = str_starts_with($section['image_path'], '/') 
                                    ? 'https://blogs.task19.com' . $section['image_path'] 
                                    : $section['image_path'];
                                $contentHtml .= '<div class="blog-section-image" style="margin: 2rem 0; text-align: center;"><img src="' . htmlspecialchars($imgUrl) . '" style="max-width: 100%; border-radius: 8px;"></div>';
                            }
                            if (!empty($section['text_content'])) {
                                $contentHtml .= '<p style="margin-bottom: 1.5rem; line-height: 1.8;">' . nl2br(htmlspecialchars($section['text_content'])) . '</p>';
                            }
                        }
                    }
                    $blog['content'] = $contentHtml;

                    // Fallbacks for empty fields
                    $blog['category'] = $blog['category'] ?? 'Dental Care';
                    $blog['date'] = \Carbon\Carbon::parse($blog['created_at'])->format('F j, Y');
                    $blog['read_time'] = $blog['read_time'] ?? '5 min read';
                    $blog['excerpt'] = $blog['excerpt'] ?? Str::limit(strip_tags($blog['content']), 120);
                }

                return $blogs;
            }
        } catch (\Exception $e) {
            // Log error if needed
        }
        return [];
    }

    // Blog Listing Page
    public function index(Request $request)
    {
        $selectedCategory = $request->query('category');
        $categories = ['All', 'Aligners', 'Implants', 'Hygiene', 'General Care'];
        
        $blogs = self::fetchBlogsFromApi();
        
        // Filter by category if selected
        if ($selectedCategory && $selectedCategory !== 'All') {
            $blogs = array_filter($blogs, function($blog) use ($selectedCategory) {
                return strtolower($blog['category'] ?? '') === strtolower($selectedCategory);
            });
        }

        $articles = $blogs;

        return view('blog.index', compact('articles', 'categories', 'selectedCategory'));
    }

    // Blog Details Page
    public function show($slug)
    {
        $blogs = self::fetchBlogsFromApi();
        $article = null;

        foreach ($blogs as $blog) {
            if ($blog['slug'] === $slug) {
                $article = $blog;
                break;
            }
        }

        if ($article) {
            // Get related articles (exclude current one)
            $related = array_filter($blogs, function($blog) use ($slug) {
                return $blog['slug'] !== $slug;
            });
            $related = array_slice($related, 0, 3);

            return view('blog.show', compact('article', 'related'));
        }

        abort(404);
    }

    // Homepage latest articles helper
    public static function getLatestArticles()
    {
        $blogs = self::fetchBlogsFromApi();
        return array_slice($blogs, 0, 3);
    }

    // XML Sitemap Generator
    public function sitemap()
    {
        $articles = self::fetchBlogsFromApi();
        return response()->view('sitemap', compact('articles'))
            ->header('Content-Type', 'text/xml');
    }
}
