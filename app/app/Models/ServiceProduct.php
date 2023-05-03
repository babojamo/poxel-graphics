<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'name',
        'main_image_url',
        'secondary_image_url',
        'featured',
        'content',
        'images',
    ];

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
