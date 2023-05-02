<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceProduct;

class HomeController extends Controller
{
    public function index() {

        $services = Service::orderBy('id')->get();
        $featured_service_products = ServiceProduct::where('featured', true)
            ->orderBy('service_id')
            ->get();

        return view('welcome', [
            'services' => $services,
            'featured_service_products' => $featured_service_products
        ]);
    }
}
