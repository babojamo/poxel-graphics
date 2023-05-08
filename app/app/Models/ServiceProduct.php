<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Slugger;

class ServiceProduct extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::created(function ($product) {
            $product->slug = Slugger::makeSlug($product->name);
            $product->saveQuietly();
        });
        static::updated(function ($product) {
            $product->slug = Slugger::makeSlug($product->name);
            $product->saveQuietly();
        });
    }

    protected $fillable = [
        'service_id',
        'name',
        'main_image_url',
        'secondary_image_url',
        'featured',
        'content',
        'images',
    ];

    public function getSlugRouteAttribute() {
        return route('products.view', $this->slug);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function getImageHighlightsAttribute() {
        return !empty($this->images) ? json_decode($this->images) : [];
    }

    public function getImageGalleryAttribute() {
        return array_merge([$this->main_image_url], $this->image_highlights);
    }
}
