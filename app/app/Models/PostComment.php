<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'content',
        'created_by',
        'guest',
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
