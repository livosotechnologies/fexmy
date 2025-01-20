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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Portfolio Details</h1>
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
                        Portfolio Details
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="Project-details-section fix section-padding">
        <div class="container">
            <div class="project-details-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-details-items">
                            <div class="details-image">
                                <img src="{{ asset('storage/' . $port->image) }}" alt="img">
                            </div>
                            <div class="row g-4 justify-content-between">
                                <div class="col-lg-7">
                                    <div class="details-content pt-5">
                                        <h3>{{$port->title}}</h3>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="details-content pt-3">
                                <h3>{{$port->sub_title}}</h3>
                                <p>
                                    {!! $port->description !!}
                                </p>
                            </div>
                            
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection