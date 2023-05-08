<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Slugger;

class Service extends Model
{
    use HasFactory;
    
    protected static function booted()
    {
        static::created(function ($service) {
            $service->slug = Slugger::makeSlug($service->name);
            $service->saveQuietly();
        });
        static::updated(function ($service) {
            $service->slug = Slugger::makeSlug($service->name);
            $service->saveQuietly();
        });
    }

    public function getSlugRouteAttribute() {
        return route('services.view', $this->slug);
    }

    protected $fillable = [
        'name'
    ];

    public function products() {
        return $this->hasMany(ServiceProduct::class);
    }
}
