<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;

class NewsController extends Controller
{
    protected $category_repository;
    protected $post_repository;

    public function __construct(CategoryRepository $category_repository, PostRepository $post_repository) {
        $this->category_repository = $category_repository;
        $this->post_repository = $post_repository;
    }

    public function index(Request $request) {
        $search = $request->query('keyword');

        $posts = Post::on();

        if(!empty($search))
            $posts->where(function($query) use($search) {
                $query->orWhere('title', 'like', "%{$search}%")
                ->orWhere('tags', 'like', "%{$search}%")
                ->orWhere('categories', 'like', "%{$search}%");
            });

        $posts = $posts->get();
        
        $recent_posts = Post::orderBy('created_at', 'asc')->limit(3)->get();

        $categories = $this->category_repository->getCategories();
        
        return view('news.index', [
            'posts' => $posts,
            'categories' => $categories,
            'search' => $search,
            'recent_posts' => $recent_posts,
        ]);
    }

    public function view(Request $request, $slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        $categories = $this->category_repository->getCategories();

        $previous = Post::where('id', '<', $post->id)->first();
        $next = Post::where('id', '>', $post->id)->first();
        $tags = $this->post_repository->getTags($post);

        $recent_posts = Post::where('id', '<>', $post->id)->orderBy('created_at', 'asc')->limit(3)->get();


        return view('news.view', [
            'post' => $post,
            'previous' => $previous ? route('news.view', $previous->slug) : null,
            'next' => $next ? route('news.view', $next->slug) : null,
            'tags' => $tags,
            'categories' => $categories,
            'recent_posts' => $recent_posts,
        ]);
    }

    public function peek(Request $request, Post $post) {
        return view('news.peek', [
            'content' => $post->content,
            'short' => (!empty($request->short) && $request->short == "true"),
        ]);
    }
}
