<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        // dd($post);

        $recent_posts = Post::latest()->take(5)->get();

        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();

        $tags = Tag::latest()->take(50)->get();

        // dd($posts);

        return view('post',  compact(
            'post',
            'recent_posts',
            'categories',
            'tags'
        ));
    }

    public function addComment(Post $post, Request $request)
    {
        // dd($post->comments);

        $attributes = $request->validate([
            'the_comment' => 'required|min:10|max:300',
        ]);

        $attributes['user_id'] = auth()->id();

        // dd($post->comments);

        $comment = $post->comments()->create($attributes);

        return redirect('posts/' . $post->slug . '#comment_' . $comment->id)
            ->with('success', 'Comment has been added.');
    }
}
