<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProduct;
use App\Models\Service as PoxelService;

class ProductsServicesController extends Controller
{
    public function index(Request $request) {
        $search = $request->query('pk');

        $products = ServiceProduct::on();

        if(!empty($search))
            $products->where(function($query) use($search) {
                $query->orWhere('name', 'like', "%{$search}%");
            });

        $products = $products->get();

        return view('products-services.products', [
            'products' => $products,
            'search' => $search,
        ]);
    }
    
    public function view(ServiceProduct $product) {
        return view('products-services.product', [
            'product' => $product
        ]);
    }

    public function peek(ServiceProduct $product) {
        return view('products-services.peek', [
            'product' => $product
        ]);
    }

    public function serviceProducts($id) {
        $service = PoxelService::findOrFail($id);
        return view('products-services.service-products', [
            'service' => $service
        ]);
    }
}
