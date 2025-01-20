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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Our Team</h1>
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
                        Our Team
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Team Section Start >>-->
    <section class="team-section-4 section-padding">
        <div class="container">
            <div class="row g-4">
            @foreach($teams as $team)
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-team-items">
                        <div class="team-image">
                            <img src="{{ asset('storage/' . $team->image) }}" alt="team-img">
                            <div class="social-profile">
                                <ul>
                                    <li>
                                        @if(!empty($team->instagram))
                                            <a href="{{ $team->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        @else
                                            <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty($team->facebook))
                                            <a href="{{ $team->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        @else
                                            <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty($team->twitter))
                                            <a href="{{ $team->twitter }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                        @else
                                            <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty($team->linkedin))
                                            <a href="{{ $team->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        @else
                                            <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                                        @endif
                                    </li>

                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h3>
                                <a href="team-details.html">{{$team->name}}</a>
                            </h3>
                            <p>{{$team->designation}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $teams->links('pagination::bootstrap-5') }}
        </div>
    </section>

@endsection