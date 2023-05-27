<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceProduct;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {

        $banners = [];

        for ($i=1; $i <= 17 ; $i++) { 
            $banners[] = asset("assets/img/home/banner_{$i}.png");
        }
       
        $services = Service::orderBy('id')->get();
        $featured_service_products = ServiceProduct::where('featured', true)
            ->orderBy('service_id')
            ->get();

        $posts = Post::orderBy('updated_at', 'desc')->limit(3)->get();

        return view('welcome', [
            'services' => $services,
            'featured_service_products' => $featured_service_products,
            'posts' => $posts,
            'banners' => $banners,
        ]);
    }
}
