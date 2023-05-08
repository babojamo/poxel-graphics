@extends('admin.layouts.user_type.auth')
@section('header-imports')
<link rel="stylesheet" href="{{ asset('assets/tagsinput/src/bootstrap-tagsinput.css') }}">
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
            <h6 class="mb-0">View Post <a target="_blank" href="{{ $post->slug_route }}" class="mx-2"
                    data-bs-toggle="tooltip" data-bs-original-title="View">
                    <i class="fas fa-eye text-secondary"></i>
                </a></h6>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" role="form text-left"
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title" class="form-control-label">Title</label>
                            <div class="@error('name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="{{ old('title') ? old('title') : $post->title }}"
                                    type="text" placeholder="Title" id="title" name="title">
                                @error('title')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tags" class="form-control-label">Tags</label>
                            <div class="@error('tags')border border-danger rounded-3 @enderror">
                                <input class="form-control input-tag"
                                    value="{{ old('tags') ? old('tags') : implode(',', $post->tags) }}" type="text"
                                    placeholder="Tags" id="tags" name="tags">
                                @error('tags')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="categories" class="form-control-label">Categories</label>
                            <div class="@error('categories')border border-danger rounded-3 @enderror">
                                <input class="form-control input-tag"
                                    value="{{ old('categories') ? old('categories') : implode(',', $post->categories) }}"
                                    type="text" placeholder="Categories" id="categories" name="categories">
                                @error('categories')
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
                                <input class="form-control" type="file" placeholder="Image" id="feature-imange"
                                    name="main_image">
                                <p class="text-primary text-xs mt-2">Choose an file if you want to replace the featured
                                    image and it must be 922 x 518 Dimension</p>
                                @error('main_image')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="thumbnail-image" class="form-control-label">Thumbnail</label>
                            <div class="@error('thumbnail')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="file" placeholder="Image" id="thumbnail-imange"
                                    name="thumbnail">
                                <p class="text-primary text-xs mt-2">Choose an file if you want to replace the thumbnail
                                    and it must be 403 x 518 Dimension</p>

                                @error('thumbnail')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="content">Content</label>
                    <div class="@error('content')border border-danger rounded-3 @enderror">
                        <textarea class="form-control" id="content" rows="3" placeholder="Content"
                            name="content">{{ old('content') ? old('content') : $post->content }}</textarea>
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

@section('footer-imports')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/tagsinput/src/bootstrap-tagsinput.js') }}" referrerpolicy="origin"></script>
<script>
    $(".input-tag").tagsinput('items')
</script>
@endsection