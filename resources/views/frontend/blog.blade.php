@extends('frontend.layouts.app')
@section('content')
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/assets/img/breadcrumb.jpg');">
        <div class="border-shape">
            <img src="{{asset('frontend/assets/img/element.png')}}" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="{{asset('frontend/assets/img/line-element.png')}}" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Blogs</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Blog Grid
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- News Section Start -->
    <section class="news-section-4 fix section-padding">
        <div class="container">
            <div class="row g-4">
                @foreach($blogs as $blog)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items style-2 mt-0 pb-0">
                        <div class="news-image">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="news-img">
                            <div class="post-date">
                                <h3>
                                {{ $blog->created_at->format('d') }} <br>
                                    <span>{{ $blog->created_at->format('M') }}</span>
                                </h3>
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    By Admin
                                </li>
                                <li>
                                    <i class="fa-solid fa-tag"></i>
                                    {{ implode(', ', json_decode($blog->tags, true)) }}
                                </li>
                            </ul>
                            <h3>
                                <a href="{{ route('blog.details', $blog->id) }}">{{$blog->title}}</a>
                            </h3>
                            <a href="{{ route('blog.details', $blog->id) }}" class="theme-btn-2 mt-3">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
            <div class="page-nav-wrap pt-5 text-center wow fadeInUp" data-wow-delay=".3s">
                <ul>
                {{ $blogs->links('pagination::bootstrap-5') }}
                </ul>
            </div>
        </div>
    </section>
@endsection