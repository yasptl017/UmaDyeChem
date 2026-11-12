<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()->orderByDesc('published_at')->orderByDesc('id')->paginate(9);
        return view('pages.blog.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = BlogPost::published()->where('slug', $slug)->firstOrFail();
        $relatedPosts = BlogPost::published()->where('id', '!=', $post->id)->latest('published_at')->take(3)->get();
        return view('pages.blog.show', compact('post', 'relatedPosts'));
    }
}
