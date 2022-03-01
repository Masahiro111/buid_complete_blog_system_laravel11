<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
    }

    public function show(Tag $tag)
    {
        // $posts = Post::withCount('comments')->paginate(8);

        $recent_posts = Post::latest()->take(5)->get();
        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(50)->get();

        return view('tags.show', [
            'posts' => $tag->posts()->paginate(10),
            'category' => $tag,
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'tags' => $tags,
            'tag' => $tag,
        ]);
    }
}
