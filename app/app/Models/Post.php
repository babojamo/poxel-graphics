<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Slugger;

class Post extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::created(function ($post) {
            $post->slug = Slugger::makeSlug($post->title);
            $post->saveQuietly();
        });
        static::updated(function ($post) {
            $post->slug = Slugger::makeSlug($post->title);
            $post->saveQuietly();
        });
    }

    protected $fillable = [
        'title',
        'content',
        'created_by',
        'slug',
        'featured_image_url',
        'thumbnail_image_url'
    ];

    public function getTagsAttribute($value) {
        return $value ? json_decode($value) : [];
    }

    public function getCategoriesAttribute($value) {
        return $value ? json_decode($value) : [];
    }

    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function comments() {
        return $this->hasMany(PostComment::class);
    }

    public function getSlugRouteAttribute() {
        return route('news.view', $this->slug);
    }

    public function getNewsRouteAttribute() {
        return route('news.view', $this->slug);
    }

    public function getSharableLinksAttribute() {
        return (object)[
            'facebook' => "https://www.facebook.com/sharer/sharer.php?u={$this->slug_route}",
            'linkedin' => "https://www.linkedin.com/shareArticle/?url={$this->slug_route}",
            'twitter' => "https://twitter.com/intent/tweet?text={$this->slug_route}"
        ];
    }
}
