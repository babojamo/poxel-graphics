<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('s');

        $posts = Post::on();

        if($search)
            $posts->where('title', 'like', "%{$search}%");

        $posts = $posts->get();

        return view('admin.posts.index', [
            'posts' => $posts,
            'search' => $search
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => ['required', 'max:500'],
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:max_width=922,max_height=518',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:max_width=403,max_height=518',
            'categories' => ['nullable'],
            'tags' => ['nullable'],
            'content' => ['nullable'],
        ]);
 
        $post = Post::create([
            'title' => $attributes['title'],
            'content' => $attributes['content'],
            'categories' => explode(",", $attributes['categories']),
            'tags' => explode(",", $attributes['tags']),
            'created_by' => auth()->user()->id,
        ]);

        $this->uploadFeaturedImage($post, $request);
        $this->uploadThumbnailImage($post, $request);

        return redirect()->route('admin.posts.view', $post->id);
    }

    public function view($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.view', [
            'post' => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        $attributes = request()->validate([
            'title' => ['required', 'max:500'],
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:max_width=922,max_height=518',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:max_width=403,max_height=518',
            'content' => ['nullable'],
            'categories' => ['nullable'],
            'tags' => ['nullable'],
        ]);

        $post = Post::findOrFail($id);

        $post->title = $attributes['title'];
        $post->content = $attributes['content'];
        $post->tags = explode(",", $attributes['tags']);
        $post->categories = explode(",", $attributes['categories']);
        $post->save();

        $this->uploadFeaturedImage($post, $request);
        $this->uploadThumbnailImage($post, $request);

        return redirect()->back()->with('success','Post updated successfully');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        
        return redirect()->back()->with('success','Post deleted successfully');
    }

    public function uploadFeaturedImage(Post $post, Request $request) {
        if(isset($request->main_image)) {
            $path = $request->file('main_image')->store(
                "posts/{$post->id}", 'public'
            );
            $post->featured_image_url = Storage::disk('public')->url($path);
            $post->save();
        }
        return $post;
    }


    public function uploadThumbnailImage(Post $post, Request $request) {
        if(isset($request->thumbnail)) {
            $path = $request->file('thumbnail')->store(
                "posts/{$post->id}/thumbnail", 'public'
            );
            $post->thumbnail_image_url = Storage::disk('public')->url($path);
            $post->save();
        }
        return $post;
    }
}
