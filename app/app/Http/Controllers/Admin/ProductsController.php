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
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'featured' => ['nullable'],
            'content' => ['nullable'],
        ]);

        $product = ServiceProduct::create([
            'service_id' => $attributes['service'],
            'name' => $attributes['name'],
            'main_image_url' => '',
            'featured' => isset($attributes['featured']) && $attributes['featured'] == 'on' ? true : false,
            'content' => $attributes['content'],
        ]);

        $this->uploadFeaturedImage($product, $request);

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
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'featured' => ['nullable'],
            'content' => ['nullable'],
            'images' => ['nullable'],
        ]);

        $product = ServiceProduct::findOrFail($id);

        $product->service_id = $attributes['service'];
        $product->name = $attributes['name'];
        $product->featured = isset($attributes['featured']) && $attributes['featured'] == 'on' ? true : false;
        $product->content = $attributes['content'];
        $product->images = $attributes['images'];
        $product->save();

        $this->uploadFeaturedImage($product, $request);

        return redirect()->back()->with('success','Product updated successfully');
    }

    public function delete($id)
    {
        $product = ServiceProduct::findOrFail($id);
        $product->delete();
        
        return redirect()->back()->with('success','Product deleted successfully');
    }

    public function uploadFeaturedImage(ServiceProduct $product, Request $request) {
        if(isset($request->main_image)) {
            $path = $request->file('main_image')->store(
                "products/{$product->id}", 'public'
            );
            $product->main_image_url = Storage::disk('public')->url($path);
            $product->save();
        }
        return $product;
    }

    public function uploadImage(Request $request, $id)
    {
        $attributes = request()->validate([
            'images' => ['required'],
        ]);

        $images = [];

        $product = ServiceProduct::findOrFail($id);

        foreach ($request->images as $image) {
            $images[] = Storage::disk('public')->url($image->store(
                "products/{$product->id}", 'public'
            ));
        }
        
        $product->images = array_merge($product->image_highlights, $images);
        $product->save();

        return redirect()->back()->with('success','Image uploaded successfully');
    }
}
