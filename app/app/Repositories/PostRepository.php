<?php

namespace App\Repositories;
use App\Models\Post;

class PostRepository
{
    public function getTags(Post $post) {
        return array_filter($post->tags);
    }
}
