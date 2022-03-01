@extends('main_layouts.master')

@section('title', $category->name . ' | MyBlog')

@section('content')
<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @forelse ($posts as $post)
                <div class="block-21 d-flex animate-box">
                    <a
                       href="{{ route('post.show', $post) }}"
                       class="blog-img"
                       style="background-image: url({{ asset('storage/' . $post->image->path ) }});"></a>
                    <div class="text">
                        <h3 class="heading"><a href="{{ route('post.show', $post) }}">{{ $post->title }}</a></h3>
                        <p class="excerpt">{{ $post->excerpt }}</p>
                        <div class="meta">
                            <div>
                                <a href="#" class="date"><span class="icon-calendar"></span>&nbsp;{{ $post->created_at->diffForHumans() }}</a>
                            </div>
                            <div>
                                <a href="#"><span class="icon-user2"></span>&nbsp;{{ $post->author->name }}</a>
                            </div>
                            <div class="comments-count">
                                <a href="{{ route('post.show', $post) }}#comments-count"><span class="icon-chat"></span>&nbsp;{{ $post->comments_count }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p class="lead">There are no posts to related to this category.</p>
                @endforelse

                {{ $posts->links() }}

            </div>

            <!-- SIDEBAR: start -->
            <div class="col-md-4 animate-box">
                <div class="sidebar">

                    <x-blog.side-categories :categories="$categories" />

                    <x-blog.side-recent-posts :recentPosts="$recent_posts" />

                    <x-blog.side-tags :tags="$tags" />

                </div>
            </div>
        </div>
    </div>
</div>
@endsection