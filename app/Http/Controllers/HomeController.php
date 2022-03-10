<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\MyClasses\MyService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::withCount('comments')->latest()->paginate(2);

        $recent_posts = Post::latest()->take(5)->get();

        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();

        $tags = Tag::latest()->take(50)->get();

        return view('home',  compact(
            'posts',
            'recent_posts',
            'categories',
            'tags'
        ));
    }

    public function servicetest()
    {
        // dd(app(''));
        // dd($myservice);

        $myservice = app('App\MyClasses\MyService');

        dd($myservice);

        $data = [
            'msg' => $myservice->say(),
            'data' => $myservice->data(),
        ];

        return view('hello.index', $data);
    }
}
