@extends('layouts.app')
@section('menu-news', 'active')
@section('title', 'News & Events')
@section('header-imports')
<script>
    function resizeIframe(obj) {
        obj.style.height = (obj.contentWindow.document.documentElement.scrollHeight + 20) + 'px';
    }
</script>
@endsection


@section('meta-description', 'Poxel graphics and printing services latest news & events')
@section('meta-keyword', "Poxel graphics and printing services, news & events")
@section('meta-og-type', 'articles')

@section('content')
<section class="blog-area pt-180 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-8">
                @if($posts->count() <= 0)
                <div class="mt-80 mb-50">
                    <h2 class="title poxel-title text-center mb-30">Sorry no results found</h2>
                    <p class="text-center"><a href="/" class="btn-outline">Back to home</a></p>
                </div>
                @endif
                @foreach($posts as $post)
                <div class="standard-blog-item mb-40">
                    <div class="blog-thumb">
                        <a href="{{ route('news.view', $post->slug) }}"><img src="{{ $post->featured_image_url }}" alt=""></a>
                    </div>
                    <div class="standard-blog-content">
                        <ul class="standard-blog-meta">
                            <li><a href="{{ route('news.view', $post->slug) }}"><i class="flaticon-avatar"></i>{{ $post->user->name }}</a></li>
                            <li><a href="{{ route('news.view', $post->slug) }}"><i class="flaticon-calendar"></i>{{ $post->created_at->diffForHumans() }}</a></li>
                        </ul>
                        <h4 class="title"><a href="{{ route('news.view', $post->slug) }}">{{ $post->title }}</a></h4>
                        <iframe src="{{ route('news.peek', $post->id) . '?short=true' }}" frameborder="0" style="width: 100%;"
                        onload="resizeIframe(this)"></iframe>
                        <div class="blog-line mt-3"></div>
                        <ul class="blog-post-bottom">
                            <li class="read-more"><a href="{{ route('news.view', $post->slug) }}" class="btn">Read more</a></li>
                            <li class="share"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false"><i class="fas fa-share-alt"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a target="popup" onclick="window.open(`{{ $post->sharable_links->facebook }}`,'name','width=600,height=400')" href="{{ $post->sharable_links->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="popup" onclick="window.open(`{{ $post->sharable_links->twitter }}`,'name','width=600,height=400')" href="{{ $post->sharable_links->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="popup" onclick="window.open(`{{ $post->sharable_links->linkedin }}`,'name','width=600,height=400')" href="{{ $post->sharable_links->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-xxl-3 col-lg-4">
                <aside class="blog-sidebar">
                    <div class="widget">
                        <h4 class="sidebar-title">Search</h4>
                        <div class="sidebar-search">
                            <form action="{{ route('news') }}">
                                <input name="keyword" value="{{ $search }}" type="text" placeholder="Search ...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="widget">
                        <h4 class="sidebar-title">Categories</h4>
                        <div class="sidebar-cat-list">
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="{{ route('news') . '?category=' . $category }}">{{ $category }}<i class="fas fa-angle-double-right"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <h4 class="sidebar-title">Recent Post</h4>
                        <div class="rc-post-list">
                            <ul>
                                    @foreach($recent_posts as $recent_post)
                                    <li>
                                        <div class="rc-post-thumb">
                                            <a href="blog-details.html"><img src="{{ $recent_post->featured_image_url }}" alt="{{ $recent_post->title }}"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <ul class="standard-blog-meta">
                                                <li><a href="{{ $recent_post->slug_route }}"><i class="flaticon-avatar"></i>{{ $recent_post->user->name }}</a></li>
                                                <li><a href="{{ $recent_post->slug_route }}"><i class="flaticon-calendar"></i>{{ $recent_post->created_at->diffForHumans() }}</a></li>
                                            </ul>
                                            <h5 class="title"><a href="blog-details.html">{{ $recent_post->title }}</a></h5>
                                        </div>
                                    </li>

                                    @endforeach
                                </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer-imports')
<link rel="stylesheet" href="{{ asset('assets/css/product-gallery.css') }}">
@endsection