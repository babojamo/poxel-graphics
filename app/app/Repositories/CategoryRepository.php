<?php

namespace App\Repositories;
use App\Models\Post;

class CategoryRepository
{
    public function getCategories() {
        $categories = Post::select(['categories'])->get()->pluck('categories');
        return array_filter(array_merge_recursive(...$categories->toArray()));
    }
}
