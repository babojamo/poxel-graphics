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
        'content'
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
