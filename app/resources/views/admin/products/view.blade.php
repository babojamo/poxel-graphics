@extends('admin.layouts.user_type.auth')
@section('header-imports')
<script src="{{ asset('tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save | insertfile image media link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        importcss_append: true,
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
    });
</script>


@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">View Product Information <a target="_blank" href="{{ $product->slug_route }}" class="mx-2"
                    data-bs-toggle="tooltip" data-bs-original-title="View">
                    <i class="fas fa-eye text-secondary"></i>
                </a></h6>
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
                                <input class="form-control" value="{{ old('name') ? old('name') : $product->name }}"
                                    type="text" placeholder="Name" id="product-name" name="name">
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
                                    <option value="{{ $service->id }}"
                                        {{ (old('service') ? old('service') : $service->id) == $product->service_id ? 'selected' : '' }}>
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
                                <p class="text-warning text-xs mt-2">Choose an file if you want to replace the featured
                                    image</p>

                                @error('main_image')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            <div class="@error('featured') border border-danger rounded-3 @enderror" class="form-check">
                                <input type="checkbox" name="featured" id="featured"
                                    {{ (old('featured') ? old('featured') : ($product->featured ? 'on' : '')) === 'on' ? 'checked' : '' }}>
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
                <input id="product-images" style="width:100%;" name="images" type="hidden"
                    value="{{ $product->images }}">
                <div class="row">
                    <div class="col-2">


                        <ul style="list-style-type: none" id="items">
                            @foreach($product->image_highlights as $image)
                            <li class="p-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ $image }}" alt="image" width="100" />

                                            <span class="btn2 cursor-pointer">
                                                <i class="fas fa-trash text-danger" title="Delete image"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                </div>
            </form>


            <form action="{{ route('admin.products.images', $product->id) }}" method="POST" role="form text-left"
                enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="feature-image" class="form-control-label">Images</label>
                    <div class="@error('images')border border-danger rounded-3 @enderror">
                        <input class="form-control" type="file" placeholder="Image" id="feature-image" name="images[]"
                            accept="image/png, image/gif, image/jpeg" multiple>


                        @error('main_image')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Upload Image' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('footer-imports')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
<script>
    var updateImages = function () {
        const images = [];
        $('#items').find('li').each(function () {
            const img = $(this).find('img')[0];
            images.push(img.getAttribute('src'));
        });
        $('#product-images').val(JSON.stringify(images));
    };

    // With options:
    var mySortableList = $('#items').sortable({
        sort: true,
        // Element is removed from the list into another list
        onRemove: function ( /**Event*/ evt) {
            updateImages();
        },

        onSort: function ( /**Event*/ evt) {
            updateImages();

        },
    })
    $(".btn2").on("click", function () {
        $(this).parent().remove();
        updateImages();
    });
</script>
@endsection