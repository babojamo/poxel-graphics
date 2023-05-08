@extends('layouts.app')
@section('menu-news', 'active')

@section('meta-description', $post->title)
@section('meta-keyword', "Poxel graphics and printing services, {$post->title}, printing, products")

@section('title', $post->title)
@section('header-imports')
<script>
    function resizeIframe(obj) {
        obj.style.height = (obj.contentWindow.document.documentElement.scrollHeight + 20) + 'px';
    }
</script>
@endsection
@section('content')

<!-- blog-details-area -->
<section class="blog-details-area pt-180 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-8">
                <div class="standard-blog-item blog-details-content mx-0">
                    <div class="blog-thumb">
                        <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">
                    </div>
                    <div class="standard-blog-content">
                        <ul class="standard-blog-meta">
                            <li><a href="{{ $post->slug_route }}"><i
                                        class="flaticon-avatar"></i>{{ $post->user->name }}</a></li>
                            <li><a href="{{ $post->slug_route }}"><i
                                        class="flaticon-calendar"></i>{{ $post->created_at->diffForHumans() }}</a></li>
                        </ul>
                        <h4 class="title">{{ $post->title }}</h4>

                        <iframe src="{{ route('news.peek', $post->id) }}" frameborder="0" style="width: 100%;"
                            onload="resizeIframe(this)"></iframe>

                        <div class="blog-line"></div>
                        <div class="blog-details-bottom">
                            <div class="blog-details-tags">
                                <ul>
                                    <li class="title">Tags :</li>
                                    @foreach($tags as $tag)
                                    <li><a href="{{ route('news') . '?tags=' . $tag }}">{{ $tag }},</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="blog-details-social">
                                <ul>
                                    <li><a href="{{ $post->sharable_links->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $post->sharable_links->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $post->sharable_links->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-next-prev mt-10">
                    <ul>
                        <li class="blog-prev">
                            <a href="{{ $previous }}"><img src="{{ asset('assets/img/icons/left_arrow.png') }}" alt="img">Previous
                                Post</a>
                        </li>
                        <li class="blog-next">
                            <a href="{{ $next }}">Next Post<img src="{{ asset('assets/img/icons/right_arrow.png') }}"
                                    alt="img"></a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="comment-reply-box">
                    <h5 class="title">Leave a Reply</h5>
                    <form action="#" class="comment-reply-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="text" placeholder="Author *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="email" placeholder="Your Email *">
                                </div>
                            </div>
                        </div>
                        <div class="form-grp">
                            <textarea name="message" placeholder="Type Comment Here..."></textarea>
                        </div>
                        <button type="submit" class="btn">Submit now</button>
                    </form>
                </div> -->
            </div>
            <div class="col-xxl-3 col-lg-4">
                <aside class="blog-sidebar">
                    <div class="widget">
                        <h4 class="sidebar-title">Search</h4>
                        <div class="sidebar-search">
                            <form action="{{ route('news') }}">
                                <input name="keyword" value="{{ request('keyword') }}" type="text" placeholder="Search ...">
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
<!-- blog-details-area-end -->
@endsection