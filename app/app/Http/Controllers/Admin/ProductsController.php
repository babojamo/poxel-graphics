<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceProduct;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;


class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('s');

        $products = ServiceProduct::on();

        if($search)
            $products->where('name', 'like', "%{$search}%");

        $products = $products->get();

        return view('admin.products.index', [
            'products' => $products,
            'search' => $search
        ]);
    }

    public function create()
    {
        $services = Service::all();

        return view('admin.products.create', [
            'services' => $services
        ]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'service' => ['required'],
            'main_image' => ['required'],
            'featured' => ['nullable'],
            'content' => ['nullable'],
        ]);
        
        $path = $request->file('main_image')->store(
            'products', 'public'
        );
 
        $product = ServiceProduct::create([
            'service_id' => $attributes['service'],
            'name' => $attributes['name'],
            'main_image_url' => asset('storage/' . $path),
            'featured' => isset($attributes['featured']) && $attributes['featured'] == 'on' ? true : false,
            'content' => $attributes['content'],
        ]);

        return redirect()->route('admin.products.view', $product->id);
    }

    public function view($id)
    {
        $services = Service::all();

        $product = ServiceProduct::findOrFail($id);
        return view('admin.products.view', [
            'services' => $services,
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'service' => ['required'],
            'main_image' => ['nullable'],
            'featured' => ['nullable'],
            'content' => ['nullable'],
        ]);

        $product = ServiceProduct::findOrFail($id);
        
        if(isset($attributes['main_image'])) {
            $path = $request->file('main_image')->store(
                'products', 'public'
            );
            $product->main_image_url = asset('storage/' . $path);
        }

        $product->service_id = $attributes['service'];
        $product->name = $attributes['name'];
        $product->featured = isset($attributes['featured']) && $attributes['featured'] == 'on' ? true : false;
        $product->content = $attributes['content'];
        $product->save();

        return redirect()->back()->with('success','Product updated successfully');
    }

    public function delete($id)
    {
        $product = ServiceProduct::findOrFail($id);
        $product->delete();
        
        return redirect()->back()->with('success','Product deleted successfully');
    }
}
