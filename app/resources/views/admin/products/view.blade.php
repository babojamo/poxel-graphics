@extends('admin.layouts.user_type.auth')

@section('header-imports')
<script src="{{ asset('tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content'
    });
</script>
@endsection

@section('content')

<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">View Product Information</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" role="form text-left"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                @if($errors->any())
                <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                    <span class="alert-text text-white">
                        {{$errors->first()}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                </div>
                @endif
                @if(session('success'))
                <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                    <span class="alert-text text-white">
                        {{ session('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product-name" class="form-control-label">Name</label>
                            <div class="@error('name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{ old('name') ? old('name') : $product->name }}"  type="text" placeholder="Name" id="product-name"
                                    name="name">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="service" class="form-control-label">Service</label>
                            <div class="@error('service')border border-danger rounded-3 @enderror">


                                <select class="form-control" name="service" id="service">
                                    <option value="">Select</option>
                                    @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ (old('service') ? old('service') : $service->id) === $product->service_id ? 'selected' : '' }}>
                                        {{ $service->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('service')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="feature-image" class="form-control-label">Feature Image</label>
                            <div class="@error('main_image')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="file" placeholder="Image" id="feature-image"
                                    name="main_image">
                                    <p class="text-warning text-xs mt-2">Choose an file if you want to replace the featured image</p>

                                @error('main_image')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            <div class="@error('featured') border border-danger rounded-3 @enderror" class="form-check">
                                <input type="checkbox" name="featured"  id="featured" {{ (old('featured') ? old('featured') : ($product->featured ? 'on' : '')) === 'on' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="featured">Featured</label>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <div class="@error('content')border border-danger rounded-3 @enderror">
                        <textarea class="form-control" id="content" rows="3" placeholder="Product specifications"
                            name="content">{{ old('content') ? old('content') : $product->content }}</textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection