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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Details</h1>
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
                        Blog Details
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- News Standard Section Start -->
    <section class="news-standard fix section-padding">
        <div class="container">
            <div class="news-details-area">
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb bg-cover"
                                    style="background-image: url({{ asset('storage/' . $blogs->image) }});"></div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center">
                                        <li>
                                            <i class="fa-regular fa-user"></i>
                                            By Admin
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            {{ $blogs->created_at->format('d') }}&nbsp;{{ $blogs->created_at->format('M') }},&nbsp;{{ $blogs->created_at->format('Y') }}
                                        </li>
                                        
                                    </ul>
                                    <h3>{{$blogs->title}}</h3>
                                    <p class="mb-3">
                                        {!! $blogs->content !!}
                                    </p>
                                   
                                    
                                    
                                    
                                </div>
                            </div>
                            
                            
                            <div class="comment-form-wrap pt-5">
                                <h3>Leave a comments</h3>
                                <form action="/testimonial/store" id="contact-form" method="POST">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email2" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="testimonial" id="message"
                                                    placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn ">
                                                post comment<i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            
                            
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="recent-post-area">
                                    @foreach($sblog as $sblog)
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ asset('storage/' . $sblog->image) }}" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    {{ $sblog->created_at->format('d') }}&nbsp;{{ $sblog->created_at->format('M') }},&nbsp;{{ $sblog->created_at->format('Y') }}
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="{{ route('blog.details', $sblog->id) }}">
                                                   {{$sblog->title}}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <div class="tagcloud">
                                    @foreach ($blogs->tags as $tag)
                                        
                                        <a href="javascript:void(0);">{{$tag}}</a>
                                    @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection