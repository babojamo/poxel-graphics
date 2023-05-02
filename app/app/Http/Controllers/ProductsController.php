<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProduct;

class ProductsController extends Controller
{
    public function view(ServiceProduct $product) {
        
        return view('products-services.product', [
            'product' => $product
        ]);
    }

    public function detail(ServiceProduct $product) {
        return view('products-services.product-detail', [
            'product' => $product
        ]);
    }
}
