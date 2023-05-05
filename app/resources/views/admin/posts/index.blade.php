@extends('admin.layouts.user_type.auth')

@section('content')
<div class="row">
    <div class="col-12">
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
        <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row">
                    <div class="d-flex align-items-center gap-3">
                        <h5 class="mb-0">All Posts</h5>
                        <a href="{{ route('admin.posts.create') }}" class="btn bg-gradient-primary btn-sm m-0"
                            type="button">+&nbsp; New post</a>
                    </div>
                    <div class="ms-auto">
                        <form action="">
                            <div class="ms-md-3 pe-md-3 d-flex align-items-center ">
                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search"
                                            aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" value="{{ $search }}" name="s"
                                        placeholder="Type here...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">


                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    ID
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Title
                                </th>
                               
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Creation Date
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @if($posts->count() === 0)
                            <tr>
                                <td colspan="6" class="ps-4">
                                    <p class="text-xs text-center font-weight-bold mb-0">No Results Found</p>
                                </td>

                            </tr>
                            @endif

                            @foreach($posts as $post)
                            <tr>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">{{ $post->id }}</p>
                                </td>
                               
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $post->title }}</p>
                                </td>
                                

                                <td class="text-center">
                                    <span
                                        class="text-secondary text-xs font-weight-bold">{{ $post->created_at }}</span>
                                </td>
                                <td class="text-center">

                                    <form id="form-{{ $post->id }}"
                                        action="{{ route('admin.posts.delete', $post->id) }}" method="post">
                                        @csrf
                                        <a href="{{ route('admin.posts.view', $post->id) }}" class="mx-3"
                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                            <i class="fas fa-pencil-alt text-secondary"></i>
                                        </a>
                                        @method('delete')
                                        <a onclick="document.getElementById('form-{{ $post->id }}').submit();">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection