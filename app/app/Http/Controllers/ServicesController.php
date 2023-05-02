<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service as PoxelService;

class ServicesController extends Controller
{
    public function index() {
        return view('products-services.products');
    }

    public function view($id) {
        $service = PoxelService::findOrFail($id);
        return view('products-services.products', [
            'service' => $service
        ]);
    }
}
