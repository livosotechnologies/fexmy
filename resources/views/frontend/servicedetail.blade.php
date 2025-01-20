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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Services Details</h1>
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
                        Services Details
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Service Details Section Start -->
    <section class="service-details-section fix section-padding">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-4">
                    <div class="col-12 col-lg-4 order-2 order-md-1">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>All Services</h3>
                                </div>
                                <div class="widget-categories">
                                    <ul>
                                        @foreach($servicename as $servicename)
                                        <li><a href="{{ route('service.details', $servicename->id) }}">{{$servicename->service_name}} <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-1 order-md-2">
                        <div class="service-details-items">
                            <div class="details-image">
                                <img src="{{ asset('storage/' . $services->image) }}" alt="img">
                            </div>
                            <div class="details-content">
                                <h3>{{$services->service_name}}</h3>
                                <p class="mt-3">
                                    {!! $services->servce_detail !!}
                                </p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section-4 fix section-padding">
        <div class="container">
            <div class="row g-4">
       
                @foreach($subServices as $subService)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items style-2 mt-0 pb-0">
                        <div class="news-image">
                            <img src="{{ asset('storage/' . $subService->image) }}" alt="news-img">
                            <!-- <div class="post-date">
                                <h3>
                                    17 <br>
                                    <span>Feb</span>
                                </h3>
                            </div> -->
                        </div>
                        <div class="news-content">
                            <!-- <ul>
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    By Admin
                                </li>
                                <li>
                                    <i class="fa-solid fa-tag"></i>
                                    IT Services
                                </li>
                            </ul> -->
                            <h3>
                                <a href="{{ route('subservice.details', $subService->id) }}">{{ $subService->sub_service_name }}</a>
                            </h3>
                            <a href="{{ route('subservice.details', $subService->id) }}" class="theme-btn-2 mt-3">
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
                
                </ul>
            </div>
        </div>
    </section>

@endsection