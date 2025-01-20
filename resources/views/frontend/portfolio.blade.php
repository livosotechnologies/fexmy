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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Portfolios</h1>
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
                        Project
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="project-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                @foreach($ports as $port)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="{{ asset('storage/' . $port->image) }}" alt="project-img">
                            <div class="project-content style2">
                                <p>{{ $port->sub_title }}</p>
                                <h4>
                                    <a href="{{ route('portfolios.detail', $port->id) }}">{{ $port->title }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $ports->links('pagination::bootstrap-5') }}
        </div>
    </section>

@endsection