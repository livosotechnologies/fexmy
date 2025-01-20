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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Pricing</h1>
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
                        Pricing
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
                                        @foreach($subservicename as $subservicename)
                                        <li><a href="{{ route('subservice.details', $subservicename->id) }}">{{$subservicename->sub_service_name}} <i
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
                                <img src="{{ asset('storage/' . $subservice->image) }}" alt="img">
                            </div>
                            <div class="details-content">
                                <h3>{{$subservice->sub_service_name}}</h3>
                                <p class="mt-3">
                                    {!! $subservice->service_description !!}
                                </p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section fix section-padding">
        <div class="container">
            <div class="pricing-wrapper">
                <div class="section-title title-area  mx-auto mb-50">
                    <div class="subtitle d-flex justify-content-center"> <img src="{{asset('frontend/assets/img/icon/arrowLeft.svg')}}"
                            alt="icon"> <span> FLEXIBLE PRICING PLAN
                        </span><img src="{{asset('frontend/assets/img/icon/arrowRight.svg')}}" alt="icon"></div>
                    <h2 class="title text-center"> We’ve Offered the best <br> pricing for you </h2>
                </div>
                <div class="tab-content">
                    <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                        <div class="row">
                        @if ($pricing->count() > 0)
                            @foreach($pricing as $pricing)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="pricing-items active">
                                    <div class="tag">
                                        <h6>{{$pricing->service_type}}</h6>
                                    </div>
                                    <div class="pricing-header">
                                        <h2>₹{{$pricing->price}}</h2>
                                        <p>
                                            {!! $pricing->description !!}
                                        </p>
                                    </div>
                                    <ul class="pricing-list">
                                       
                                        @foreach(json_decode($pricing->points, true) as $point)
                                        
                                            <li>
                                                <i class="fa-solid fa-check"></i>
                                                {{ $point }}
                                            </li>
                                        @endforeach
                                        
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="{{ asset('storage/' . $pricing->quotation) }}" target="_blank" class="pricing-btn mt-4">
                                            choose Plan
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h6>We don't have a plane right now.</h6>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection