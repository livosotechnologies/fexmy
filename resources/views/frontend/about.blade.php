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
            <h1 class="wow fadeInUp" data-wow-delay=".3s">About Us</h1>
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
                    About Us
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- About Section Start -->
<section class="about-section section-padding fix bg-cover"
    style="background-image: url('frontend/assets/img/service/service-bg-2.jpg');">
    <div class="container">
        <div class="about-wrapper style-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image-items">
                        <div class="circle-shape">
                            <img src="{{asset('frontend/assets/img/about/circle.png')}}" alt="shape-img">
                        </div>
                        <div class="counter-shape float-bob-y">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/about/icon-1.svg')}}" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3><span class="count">25</span>Years</h3>
                                <p>Of Experience</p>
                            </div>
                        </div>
                        <div class="about-image-1 bg-cover wow fadeInLeft" data-wow-delay=".3s"
                            style="background-image: url('frontend/assets/img/about/03.png');">
                            <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{asset('frontend/assets/img/about/04.jpg')}}" alt="about-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="about-content">
                        <div class="section-title mb-3 mxw-650">
                            <div class="subtitle"> <img src="{{asset('frontend/assets/img/icon/arrowLeft.svg')}}" alt="icon"> <span>ABOUT
                                    FexMy
                                </span><img src="{{asset('frontend/assets/img/icon/arrowRight.svg')}}" alt="icon"></div>
                            <h2 class="title"> We Are Increasing Business Success With <span>Technology</span> </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            FexMy Technology is a forward-thinking IT solutions provider dedicated to transforming businesses through innovative technology.
                        </p>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Our mission is to empower organizations to harness the power of digital transformation, streamline operations, and enhance overall productivity.
                        </p>
                        <div class="about-icon-items">
                            <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/img/about/icon-4.svg')}}" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h4>Problem Solving</h4>
                                    <p>
                                        Problem solving is a critical skill that involves identifying, analyzing, and resolving challenges effectively and efficiently.
                                    </p>
                                </div>
                            </div>
                            <div class="icon-items wow fadeInUp" data-wow-delay=".9s">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/img/about/icon-5.svg')}}" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h4>Mission & Vision</h4>
                                    <p>
                                        Our vision is to be a leading force in the [industry or sector], recognized for our commitment to innovation and excellence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="about-author">
                            <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                <a href="/about" class="theme-btn">
                                    Explore More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                            <div class="author-image wow fadeInUp" data-wow-delay=".7s">
                                <img src="{{asset('frontend/user.png')}}" alt="author-img">
                                <div class="content">
                                    <h6>Name</h6>
                                    <p>Co, Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="abnew">
    <div class="ms-lg-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1>FexMy in Numbers</h1>
                <p class="mt-3 text-white">
                    Look no further for the best business setup services in Dubai! Read more about our journey and how we are eager to assist you in building your life in the UAE. Check out our story
                </p>
                <div class="mt-4">
                    <a href="/about" data-animation="slideInRight" data-duration="2s"
                        data-delay=".9s" class="theme-btn hover-black" style="background-color:white;color:#F98600;">
                        Explore More
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                        <h2>16+</h2>
                        <h5>Nationalities</h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                        <h2>8+</h2>
                        <h5>years of excellence</h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                        <h2>100+</h2>
                        <h5>strong workforce</h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                        <h2>1000+</h2>
                        <h5>Companies formed</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ms-lg-5">
        <div class="col-lg-6  pt-5">
            <h1><b>Get everything you need!</h1>
            <p class="mt-3">
                Shuraa Business Setup offers a comprehensive range of services curated for
                your business specific needs.
            </p>
        </div>
        <div class="swiper project-slider-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="{{asset('frontend/assets/img/services/services-1.jpg')}}" alt="project-img">
                            <div class="project-content style3">

                                <p>
                                    <a href="project-details.html">Company Registration</a>
                                </p>
                                <a href="project-details.html" class="arrow-icon-2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="{{asset('frontend/assets/img/services/services-2.jpg')}}" alt="project-img">
                            <div class="project-content style3">

                                <p>
                                    <a href="project-details.html">TradeMark Registration</a>
                                </p>
                                <a href="project-details.html" class="arrow-icon-2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="{{asset('frontend/assets/img/services/services-3.jpg')}}" alt="project-img">
                            <div class="project-content style3">

                                <p>
                                    <a href="project-details.html">Family Visa</a>
                                </p>
                                <a href="project-details.html" class="arrow-icon-2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="{{asset('frontend/assets/img/services/services-5.jpg')}}" alt="project-img">
                            <div class="project-content style3">

                                <p>
                                    <a href="project-details.html">Office Space</a>
                                </p>
                                <a href="project-details.html" class="arrow-icon-2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="{{asset('frontend/assets/img/services/services-6.jpg')}}" alt="project-img">
                            <div class="project-content style3">

                                <p>
                                    <a href="project-details.html">Trade License</a>
                                </p>
                                <a href="project-details.html" class="arrow-icon-2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ms-lg-5 pt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1>Refer. Earn. Repeat.</h1>
                <p class="mt-3 text-white">
                    Look no further for the best business setup services in Dubai! Read more about our journey and how we are eager to assist you in building your life in the UAE. Check out our story
                </p>
                <div class="mt-4">
                    <a href="/about" data-animation="slideInRight" data-duration="2s"
                        data-delay=".9s" class="theme-btn hover-black" style="background-color:white;color:#F98600;">
                        Explore More
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                 <img src="https://www.shuraa.com/wp-content/uploads/2023/07/Refer-and-Earn.webp" class="img-fluid">
            </div>
        </div>
    </div>
</div>



<!-- Offer Section Start -->
<section class="offer-section fix section-bg-2 section-padding">
    <div class="line-shape">
        <img src="{{asset('frontend/assets/img/team/line-shape.png')}}" alt="shape-img">
    </div>
    <div class="mask-shape">
        <img src="{{asset('frontend/assets/img/team/mask-shape.png')}}" alt="shape-img">
    </div>
    <div class="container">
        <div class="section-title title-area  mx-auto mb-15">
            <div class="subtitle d-flex justify-content-center"> <img src="frontend/assets/img/icons/1.png"
                    alt="icon"> <span class="text-white"> Why FexMy
                </span><img src="frontend/assets/img/icons/1.png" alt="icon"></div>
            <h2 class="title text-center text-white">Why to choose FexMy Over Others</h2>
        </div>

        <div class="row" style="display:flex;justify-content:center;">
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="offer-items">
                    <div class="shape-top">
                        <img src="{{asset('frontend/assets/img/shape/offer-top.png')}}" alt="shape-img">
                    </div>
                    <div class="shape-bottom">
                        <img src="{{asset('frontend/assets/img/shape/offer-bottom.png')}}" alt="shape-img">
                    </div>
                    <div class="icon">
                        <img src="frontend/assets/img/icons/1.png" alt="Images" style="width:30px;">
                        <img src="frontend/assets/img/icons/1.png" alt="Images" style="width:30px;">
                    </div>
                    <div class="content">
                        <h5>Integrity</h5>

                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="offer-items">
                    <div class="shape-top">
                        <img src="{{asset('frontend/assets/img/shape/offer-top.png')}}" alt="shape-img">
                    </div>
                    <div class="shape-bottom">
                        <img src="{{asset('frontend/assets/img/shape/offer-bottom.png')}}" alt="shape-img">
                    </div>
                    <div class="icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.3329 3.58547L23.91 0.956883C23.9526 0.885763 23.9809 0.806935 23.9931 0.724898C24.0053 0.642862 24.0012 0.559225 23.9811 0.478762C23.961 0.398299 23.9252 0.322586 23.8758 0.255946C23.8265 0.189306 23.7644 0.133044 23.6933 0.0903717C23.6222 0.0476998 23.5434 0.0194538 23.4613 0.00724644C23.3793 -0.00496089 23.2957 -0.000890475 23.2152 0.0192253C23.1347 0.039341 23.059 0.0751082 22.9924 0.124485C22.9257 0.173861 22.8695 0.23588 22.8268 0.307L21.1626 3.08085C20.1717 2.72843 19.1107 2.52633 18.0004 2.52633C16.8901 2.52633 15.829 2.72843 14.8381 3.08085L13.1739 0.307C13.0878 0.163366 12.948 0.0598509 12.7855 0.0192253C12.623 -0.0214003 12.4511 0.00419186 12.3074 0.0903718C12.1638 0.176552 12.0603 0.31626 12.0196 0.478762C11.979 0.641265 12.0046 0.81325 12.0908 0.956883L13.6678 3.58547C10.6192 5.16123 8.52686 8.33802 8.52686 12.0005C8.52686 12.168 8.59339 12.3286 8.71184 12.4471C8.83028 12.5655 8.99092 12.632 9.15842 12.632H26.8423C27.0098 12.632 27.1705 12.5655 27.2889 12.4471C27.4074 12.3286 27.4739 12.168 27.4739 12.0005C27.4733 8.33865 25.3815 5.16186 22.3329 3.58547ZM9.81399 11.3689C10.1374 7.13551 13.6855 3.7901 18.0004 3.7901C22.3152 3.7901 25.8634 7.13551 26.1868 11.3689H9.81399Z"
                                fill="#384BFF" />
                            <path
                                d="M22.4068 7.17725H21.5744C21.464 7.17725 21.3581 7.2211 21.2801 7.29915C21.202 7.3772 21.1582 7.48306 21.1582 7.59345V8.42586C21.1582 8.65575 21.3445 8.84206 21.5744 8.84206H22.4074C22.5178 8.84206 22.6237 8.79821 22.7017 8.72016C22.7798 8.6421 22.8236 8.53624 22.8236 8.42586V7.59345C22.8234 7.48301 22.7795 7.37715 22.7013 7.29911C22.6231 7.22108 22.5172 7.17725 22.4068 7.17725ZM14.4257 7.17725H13.5926C13.4822 7.17725 13.3764 7.2211 13.2983 7.29915C13.2203 7.3772 13.1764 7.48306 13.1764 7.59345V8.42586C13.1764 8.65575 13.3627 8.84206 13.5926 8.84206H14.4257C14.536 8.84206 14.6419 8.79821 14.72 8.72016C14.798 8.6421 14.8419 8.53624 14.8419 8.42586V7.59345C14.8419 7.48306 14.798 7.3772 14.72 7.29915C14.6419 7.2211 14.536 7.17725 14.4257 7.17725ZM26.8416 13.2637H9.15774C8.99024 13.2637 8.8296 13.3302 8.71116 13.4486C8.59272 13.5671 8.52618 13.7277 8.52618 13.8952V26.6346C8.52751 27.4436 8.8497 28.219 9.42205 28.7908C9.9944 29.3625 10.7702 29.6839 11.5792 29.6844H12.3156V33.4776C12.3156 34.8683 13.4486 36.0001 14.8419 36.0001C16.2351 36.0001 17.3681 34.8683 17.3681 33.4776V29.6844H18.6313V33.4776C18.6313 34.8683 19.7643 36.0001 21.1575 36.0001C22.5508 36.0001 23.6838 34.8683 23.6838 33.4776V29.6844H24.4202C25.2293 29.6841 26.0051 29.3628 26.5775 28.791C27.1499 28.2192 27.472 27.4436 27.4732 26.6346V13.8952C27.4732 13.7277 27.4067 13.5671 27.2882 13.4486C27.1698 13.3302 27.0091 13.2637 26.8416 13.2637ZM26.2101 26.6346C26.2092 27.1087 26.0203 27.5632 25.6847 27.8982C25.3491 28.2332 24.8944 28.4213 24.4202 28.4213H23.0522C22.8847 28.4213 22.7241 28.4878 22.6057 28.6063C22.4872 28.7247 22.4207 28.8854 22.4207 29.0529V33.4776C22.4207 33.8126 22.2876 34.1339 22.0507 34.3708C21.8138 34.6077 21.4925 34.7408 21.1575 34.7408C20.8225 34.7408 20.5012 34.6077 20.2644 34.3708C20.0275 34.1339 19.8944 33.8126 19.8944 33.4776V29.0529C19.8944 28.8854 19.8279 28.7247 19.7094 28.6063C19.591 28.4878 19.4303 28.4213 19.2628 28.4213H16.7366C16.5691 28.4213 16.4084 28.4878 16.29 28.6063C16.1715 28.7247 16.105 28.8854 16.105 29.0529V33.4776C16.105 33.8126 15.9719 34.1339 15.735 34.3708C15.4981 34.6077 15.1769 34.7408 14.8419 34.7408C14.5069 34.7408 14.1856 34.6077 13.9487 34.3708C13.7118 34.1339 13.5787 33.8126 13.5787 33.4776V29.0529C13.5787 28.8854 13.5122 28.7247 13.3937 28.6063C13.2753 28.4878 13.1147 28.4213 12.9472 28.4213H11.5798C11.1056 28.4211 10.6509 28.233 10.3153 27.898C9.97962 27.5631 9.79048 27.1087 9.78931 26.6346V14.5268H26.2101V26.6346ZM30.3153 13.2637C29.0963 13.2637 28.1048 14.2565 28.1048 15.4767V24.3136C28.1048 25.5338 29.0963 26.5266 30.3153 26.5266C31.5342 26.5266 32.5258 25.5338 32.5258 24.3136V15.4767C32.5254 14.8903 32.2925 14.328 31.8781 13.9131C31.4637 13.4982 30.9017 13.2647 30.3153 13.2637ZM31.2626 24.3136C31.2626 24.8371 30.8376 25.2635 30.3153 25.2635C29.793 25.2635 29.3679 24.8371 29.3679 24.3136V15.4767C29.3679 14.9531 29.793 14.5268 30.3153 14.5268C30.8376 14.5268 31.2626 14.9531 31.2626 15.4767V24.3136ZM5.68412 13.2637C4.46519 13.2637 3.47363 14.2565 3.47363 15.4767V24.3136C3.47363 25.5338 4.46519 26.5266 5.68412 26.5266C6.90305 26.5266 7.89461 25.5338 7.89461 24.3136V15.4767C7.89427 14.8903 7.66136 14.328 7.24696 13.9131C6.83255 13.4982 6.27051 13.2647 5.68412 13.2637ZM6.63147 24.3136C6.63147 24.8371 6.20643 25.2635 5.68412 25.2635C5.16181 25.2635 4.73677 24.8371 4.73677 24.3136V15.4767C4.73677 14.9531 5.16181 14.5268 5.68412 14.5268C6.20643 14.5268 6.63147 14.9531 6.63147 15.4767V24.3136Z"
                                fill="#384BFF" />
                        </svg>
                    </div>
                    <div class="content">
                        <h5>Consistency</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="offer-items">
                    <div class="shape-top">
                        <img src="{{asset('frontend/assets/img/shape/offer-top.png')}}" alt="shape-img">
                    </div>
                    <div class="shape-bottom">
                        <img src="{{asset('frontend/assets/img/shape/offer-bottom.png')}}" alt="shape-img">
                    </div>
                    <div class="icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.3329 3.58547L23.91 0.956883C23.9526 0.885763 23.9809 0.806935 23.9931 0.724898C24.0053 0.642862 24.0012 0.559225 23.9811 0.478762C23.961 0.398299 23.9252 0.322586 23.8758 0.255946C23.8265 0.189306 23.7644 0.133044 23.6933 0.0903717C23.6222 0.0476998 23.5434 0.0194538 23.4613 0.00724644C23.3793 -0.00496089 23.2957 -0.000890475 23.2152 0.0192253C23.1347 0.039341 23.059 0.0751082 22.9924 0.124485C22.9257 0.173861 22.8695 0.23588 22.8268 0.307L21.1626 3.08085C20.1717 2.72843 19.1107 2.52633 18.0004 2.52633C16.8901 2.52633 15.829 2.72843 14.8381 3.08085L13.1739 0.307C13.0878 0.163366 12.948 0.0598509 12.7855 0.0192253C12.623 -0.0214003 12.4511 0.00419186 12.3074 0.0903718C12.1638 0.176552 12.0603 0.31626 12.0196 0.478762C11.979 0.641265 12.0046 0.81325 12.0908 0.956883L13.6678 3.58547C10.6192 5.16123 8.52686 8.33802 8.52686 12.0005C8.52686 12.168 8.59339 12.3286 8.71184 12.4471C8.83028 12.5655 8.99092 12.632 9.15842 12.632H26.8423C27.0098 12.632 27.1705 12.5655 27.2889 12.4471C27.4074 12.3286 27.4739 12.168 27.4739 12.0005C27.4733 8.33865 25.3815 5.16186 22.3329 3.58547ZM9.81399 11.3689C10.1374 7.13551 13.6855 3.7901 18.0004 3.7901C22.3152 3.7901 25.8634 7.13551 26.1868 11.3689H9.81399Z"
                                fill="#384BFF" />
                            <path
                                d="M22.4068 7.17725H21.5744C21.464 7.17725 21.3581 7.2211 21.2801 7.29915C21.202 7.3772 21.1582 7.48306 21.1582 7.59345V8.42586C21.1582 8.65575 21.3445 8.84206 21.5744 8.84206H22.4074C22.5178 8.84206 22.6237 8.79821 22.7017 8.72016C22.7798 8.6421 22.8236 8.53624 22.8236 8.42586V7.59345C22.8234 7.48301 22.7795 7.37715 22.7013 7.29911C22.6231 7.22108 22.5172 7.17725 22.4068 7.17725ZM14.4257 7.17725H13.5926C13.4822 7.17725 13.3764 7.2211 13.2983 7.29915C13.2203 7.3772 13.1764 7.48306 13.1764 7.59345V8.42586C13.1764 8.65575 13.3627 8.84206 13.5926 8.84206H14.4257C14.536 8.84206 14.6419 8.79821 14.72 8.72016C14.798 8.6421 14.8419 8.53624 14.8419 8.42586V7.59345C14.8419 7.48306 14.798 7.3772 14.72 7.29915C14.6419 7.2211 14.536 7.17725 14.4257 7.17725ZM26.8416 13.2637H9.15774C8.99024 13.2637 8.8296 13.3302 8.71116 13.4486C8.59272 13.5671 8.52618 13.7277 8.52618 13.8952V26.6346C8.52751 27.4436 8.8497 28.219 9.42205 28.7908C9.9944 29.3625 10.7702 29.6839 11.5792 29.6844H12.3156V33.4776C12.3156 34.8683 13.4486 36.0001 14.8419 36.0001C16.2351 36.0001 17.3681 34.8683 17.3681 33.4776V29.6844H18.6313V33.4776C18.6313 34.8683 19.7643 36.0001 21.1575 36.0001C22.5508 36.0001 23.6838 34.8683 23.6838 33.4776V29.6844H24.4202C25.2293 29.6841 26.0051 29.3628 26.5775 28.791C27.1499 28.2192 27.472 27.4436 27.4732 26.6346V13.8952C27.4732 13.7277 27.4067 13.5671 27.2882 13.4486C27.1698 13.3302 27.0091 13.2637 26.8416 13.2637ZM26.2101 26.6346C26.2092 27.1087 26.0203 27.5632 25.6847 27.8982C25.3491 28.2332 24.8944 28.4213 24.4202 28.4213H23.0522C22.8847 28.4213 22.7241 28.4878 22.6057 28.6063C22.4872 28.7247 22.4207 28.8854 22.4207 29.0529V33.4776C22.4207 33.8126 22.2876 34.1339 22.0507 34.3708C21.8138 34.6077 21.4925 34.7408 21.1575 34.7408C20.8225 34.7408 20.5012 34.6077 20.2644 34.3708C20.0275 34.1339 19.8944 33.8126 19.8944 33.4776V29.0529C19.8944 28.8854 19.8279 28.7247 19.7094 28.6063C19.591 28.4878 19.4303 28.4213 19.2628 28.4213H16.7366C16.5691 28.4213 16.4084 28.4878 16.29 28.6063C16.1715 28.7247 16.105 28.8854 16.105 29.0529V33.4776C16.105 33.8126 15.9719 34.1339 15.735 34.3708C15.4981 34.6077 15.1769 34.7408 14.8419 34.7408C14.5069 34.7408 14.1856 34.6077 13.9487 34.3708C13.7118 34.1339 13.5787 33.8126 13.5787 33.4776V29.0529C13.5787 28.8854 13.5122 28.7247 13.3937 28.6063C13.2753 28.4878 13.1147 28.4213 12.9472 28.4213H11.5798C11.1056 28.4211 10.6509 28.233 10.3153 27.898C9.97962 27.5631 9.79048 27.1087 9.78931 26.6346V14.5268H26.2101V26.6346ZM30.3153 13.2637C29.0963 13.2637 28.1048 14.2565 28.1048 15.4767V24.3136C28.1048 25.5338 29.0963 26.5266 30.3153 26.5266C31.5342 26.5266 32.5258 25.5338 32.5258 24.3136V15.4767C32.5254 14.8903 32.2925 14.328 31.8781 13.9131C31.4637 13.4982 30.9017 13.2647 30.3153 13.2637ZM31.2626 24.3136C31.2626 24.8371 30.8376 25.2635 30.3153 25.2635C29.793 25.2635 29.3679 24.8371 29.3679 24.3136V15.4767C29.3679 14.9531 29.793 14.5268 30.3153 14.5268C30.8376 14.5268 31.2626 14.9531 31.2626 15.4767V24.3136ZM5.68412 13.2637C4.46519 13.2637 3.47363 14.2565 3.47363 15.4767V24.3136C3.47363 25.5338 4.46519 26.5266 5.68412 26.5266C6.90305 26.5266 7.89461 25.5338 7.89461 24.3136V15.4767C7.89427 14.8903 7.66136 14.328 7.24696 13.9131C6.83255 13.4982 6.27051 13.2647 5.68412 13.2637ZM6.63147 24.3136C6.63147 24.8371 6.20643 25.2635 5.68412 25.2635C5.16181 25.2635 4.73677 24.8371 4.73677 24.3136V15.4767C4.73677 14.9531 5.16181 14.5268 5.68412 14.5268C6.20643 14.5268 6.63147 14.9531 6.63147 15.4767V24.3136Z"
                                fill="#384BFF" />
                        </svg>
                    </div>
                    <div class="content">
                        <h5>Excellence</h5>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay=".8s">
                <div class="offer-items">
                    <div class="shape-top">
                        <img src="{{asset('frontend/assets/img/shape/offer-top.png')}}" alt="shape-img">
                    </div>
                    <div class="shape-bottom">
                        <img src="{{asset('frontend/assets/img/shape/offer-bottom.png')}}" alt="shape-img">
                    </div>
                    <div class="icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.4282 8.14707H9.2927C8.43931 8.14707 7.74512 8.84133 7.74512 9.69465V26.3053C7.74512 27.1586 8.43938 27.8528 9.2927 27.8528H24.4282C25.2815 27.8528 25.9757 27.1586 25.9757 26.3053V22.7742C25.9757 22.4829 25.7397 22.2468 25.4484 22.2468C25.1571 22.2468 24.9211 22.4829 24.9211 22.7742V26.3053C24.9209 26.4359 24.8689 26.5612 24.7765 26.6536C24.6841 26.746 24.5588 26.798 24.4282 26.7982H9.2927C9.03788 26.7982 8.82765 26.6038 8.80234 26.3556C8.80065 26.3391 8.7998 16.5811 8.7998 16.5811H24.9211V20.2426C24.9211 20.5339 25.1571 20.77 25.4484 20.77C25.7397 20.77 25.9757 20.5339 25.9757 20.2426V9.69465C25.9757 8.84133 25.2814 8.14707 24.4282 8.14707ZM8.7998 15.5264V12.9302H10.3292C10.4173 12.9302 10.5039 12.9082 10.5813 12.8661C10.6586 12.824 10.7242 12.7632 10.772 12.6893L11.3296 11.8272L12.772 14.2068C12.9768 14.5698 13.5557 14.5286 13.7075 14.1415L14.5524 12.1734L14.9696 12.7982C15.0177 12.8704 15.083 12.9295 15.1595 12.9704C15.236 13.0113 15.3214 13.0327 15.4081 13.0327H19.7785L20.9774 14.2259C21.291 14.5381 21.8011 14.538 22.1147 14.226L23.4531 12.8939C23.8595 12.4894 23.9738 11.8885 23.7444 11.3631C23.6104 11.0532 23.3651 10.8048 23.057 10.6668C22.7488 10.5288 22.4001 10.5113 22.0797 10.6177L21.5461 10.7928L21.0126 10.6177C20.6922 10.5112 20.3435 10.5287 20.0353 10.6667C19.7271 10.8046 19.4818 11.0531 19.3478 11.363C19.2629 11.5565 19.2234 11.7669 19.2324 11.978H15.6901L14.8898 10.7794C14.6754 10.4349 14.1147 10.4865 13.9666 10.8642L13.1427 12.7836L11.7951 10.5604C11.6096 10.2316 11.0956 10.2254 10.9014 10.5473L10.0423 11.8754H8.7998V9.69465C8.79995 9.56397 8.85193 9.43869 8.94433 9.34628C9.03674 9.25388 9.16202 9.2019 9.2927 9.20175H24.4282C24.5588 9.2019 24.6841 9.25388 24.7765 9.34628C24.8689 9.43869 24.9209 9.56397 24.9211 9.69465V15.5264H8.7998ZM20.3144 11.7852C20.3442 11.7165 20.3986 11.6615 20.467 11.6309C20.5354 11.6003 20.6127 11.5963 20.6838 11.6199L21.2947 11.8203C21.4594 11.8744 21.6332 11.8743 21.7974 11.8204L22.4086 11.6199C22.4797 11.5963 22.557 11.6002 22.6254 11.6308C22.6937 11.6614 22.7481 11.7165 22.7779 11.7852C22.8044 11.8453 22.8121 11.912 22.7998 11.9766C22.7875 12.0411 22.7559 12.1003 22.7091 12.1464L21.5461 13.3039L20.4495 12.2126C20.3374 12.0955 20.2315 11.9558 20.3144 11.7852ZM18.0123 2.48157H15.7086C15.5687 2.48157 15.4346 2.53713 15.3357 2.63602C15.2368 2.73492 15.1812 2.86905 15.1812 3.00891C15.1812 3.14877 15.2368 3.2829 15.3357 3.3818C15.4346 3.4807 15.5687 3.53625 15.7086 3.53625H18.0122C18.3035 3.53625 18.5396 3.30015 18.5396 3.00891C18.5396 2.71768 18.3035 2.48157 18.0123 2.48157Z"
                                fill="#384BFF" />
                            <path
                                d="M13.2418 24.3816C12.551 24.3979 11.9611 23.8925 11.8661 23.2118C11.8468 23.0732 11.7732 22.9481 11.6616 22.8638C11.55 22.7795 11.4094 22.743 11.2709 22.7623C11.1324 22.7817 11.0072 22.8552 10.9229 22.9669C10.8386 23.0785 10.8021 23.219 10.8215 23.3575C10.988 24.5509 12.0117 25.4366 13.2137 25.4365C13.23 25.4365 13.2465 25.4364 13.263 25.436C14.5224 25.4107 15.56 24.4061 15.6253 23.1491C15.66 22.4797 15.4255 21.8439 14.9648 21.3588C14.5107 20.8804 13.8723 20.6061 13.2134 20.6061C12.9715 20.6061 12.7693 20.6207 12.5898 20.6486L12.8349 19.1687H14.7069C14.8468 19.1687 14.9809 19.1132 15.0798 19.0143C15.1787 18.9154 15.2343 18.7813 15.2343 18.6414C15.2343 18.5015 15.1787 18.3674 15.0798 18.2685C14.9809 18.1696 14.8468 18.1141 14.7069 18.1141H12.3877C12.2628 18.1141 12.142 18.1584 12.0467 18.2392C11.9514 18.32 11.8879 18.432 11.8675 18.5552L11.4081 21.3282C11.3245 21.7729 11.8499 22.1033 12.2248 21.8573C12.4887 21.7386 12.7001 21.6608 13.2133 21.6608C13.5898 21.6608 13.9402 21.8114 14.1999 22.0849C14.4594 22.3583 14.5915 22.7168 14.5719 23.0944C14.5354 23.8019 13.9511 24.3673 13.2418 24.3816ZM20.702 19.0588C20.9933 19.0588 21.2293 18.8227 21.2293 18.5315C21.2293 18.2403 20.9933 18.0042 20.702 18.0042H18.0005C17.7092 18.0042 17.4732 18.2403 17.4732 18.5315C17.4732 18.8227 17.7092 19.0588 18.0005 19.0588H20.702ZM23.4596 21.5056C23.4596 20.6791 22.7872 20.0067 21.9607 20.0067H18.972C18.1456 20.0067 17.4732 20.6791 17.4732 21.5056C17.4732 22.332 18.1456 23.0044 18.972 23.0044H21.9607C22.7872 23.0044 23.4596 22.332 23.4596 21.5056ZM18.5279 21.5056C18.528 21.3878 18.5748 21.2749 18.6581 21.1917C18.7413 21.1084 18.8542 21.0616 18.972 21.0614H21.9607C22.2056 21.0614 22.4048 21.2607 22.4048 21.5056C22.4048 21.7505 22.2056 21.9497 21.9607 21.9497H18.972C18.8542 21.9496 18.7413 21.9027 18.6581 21.8195C18.5748 21.7362 18.528 21.6233 18.5279 21.5056Z"
                                fill="#384BFF" />
                            <path
                                d="M28.6772 11.9782H28.085V9.28238C28.085 7.59677 26.7928 6.20775 25.1471 6.05271L24.2543 2.08153C23.9787 0.855914 22.9089 0 21.6528 0H12.0677C10.8115 0 9.74171 0.855914 9.46616 2.08153L8.57326 6.05271C6.92753 6.20775 5.63525 7.59677 5.63525 9.28238V26.7176C5.63525 28.5067 7.09079 29.9622 8.87982 29.9622H24.0628L23.2253 33.6871C23.0587 34.428 22.4121 34.9453 21.6528 34.9453H12.0677C11.3083 34.9453 10.6618 34.428 10.4952 33.6871L10.0832 31.8545C10.068 31.7869 10.0396 31.723 9.99971 31.6664C9.95982 31.6098 9.90917 31.5616 9.85065 31.5246C9.79213 31.4875 9.72688 31.4624 9.65865 31.4506C9.59041 31.4388 9.52051 31.4405 9.45294 31.4557C9.3165 31.4864 9.19783 31.57 9.12304 31.6882C9.04825 31.8064 9.02346 31.9494 9.05413 32.0858L9.46616 33.9185C9.74171 35.1441 10.8114 36 12.0677 36H21.6528C22.9089 36 23.9787 35.1441 24.2543 33.9185L25.1471 29.9473C26.7928 29.7922 28.085 28.4032 28.085 26.7176V18.4657H28.6772C29.6075 18.4657 30.3644 17.7088 30.3644 16.7785V13.6654C30.3644 12.7351 29.6075 11.9782 28.6772 11.9782ZM10.4952 2.31286C10.6617 1.57205 11.3083 1.05469 12.0677 1.05469H21.6528C22.4121 1.05469 23.0587 1.57205 23.2253 2.31286L24.0628 6.0378H9.65769L10.4952 2.31286ZM27.0304 26.7176C27.0304 27.9251 26.048 28.9075 24.8405 28.9075H8.87989C7.67242 28.9075 6.69001 27.9251 6.69001 26.7176V9.28238C6.69001 8.0749 7.67242 7.09249 8.87989 7.09249H24.8406C26.048 7.09249 27.0304 8.0749 27.0304 9.28238V26.7176H27.0304ZM29.3097 16.7785C29.3097 17.1272 29.026 17.411 28.6772 17.411H28.085V13.0328H28.6772C29.026 13.0328 29.3097 13.3166 29.3097 13.6654V16.7785Z"
                                fill="#384BFF" />
                            <path
                                d="M18.0005 25.4834C18.3177 25.4834 18.5748 25.2263 18.5748 24.9092C18.5748 24.5921 18.3177 24.335 18.0005 24.335C17.6834 24.335 17.4263 24.5921 17.4263 24.9092C17.4263 25.2263 17.6834 25.4834 18.0005 25.4834Z"
                                fill="#384BFF" />
                            <path
                                d="M20.4663 25.4834C20.7835 25.4834 21.0406 25.2263 21.0406 24.9092C21.0406 24.5921 20.7835 24.335 20.4663 24.335C20.1492 24.335 19.8921 24.5921 19.8921 24.9092C19.8921 25.2263 20.1492 25.4834 20.4663 25.4834Z"
                                fill="#384BFF" />
                        </svg>

                    </div>
                    <div class="content">
                        <h5>Quality</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="rs-about style2 pt-50 pb-20 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-33 md-pr-15 md-mb-50" style="display:flex;justify-content:end;">
                    <div class="images-part">
                        <img src="frontend/assets/img/about/about-3.png" alt="Images" >
                    </div>
                </div>
                <div class="col-lg-6 m-auto ">
                    <div class="sec-title pt-5">
                        <h2 class="title pb-22">
                            We work to make you grow
                        </h2>
                        <span class="sub-text big">We ensure deep commitment towards working across organisations
                            and offer niche business setup services in Dubai and
                            across the UAE. We develop a speedy route to enter the UAE market for several
                            multinationals as well as SMEs. </span>

                        <p class="margin-0 pt-15">Fexmy Business Setup provides you with not only the initial
                            needs
                            of business setup in Dubai , but also creates extended scope for your company. We
                            understand that when starting a business in Dubai, it is
                            important to recognise the scope of the organisation, which is why we set up your
                            business in a way that allows you to
                            focus on growth and bring in new prospects.</p>
                        <div class="btn-part mt-45 md-mt-30">
                            <a href="about.html" data-animation="slideInRight" data-duration="2s"
                                data-delay=".9s" class="theme-btn hover-white">
                                Contact Us
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Project Section Start -->


<!--<< Marque Section Start >>-->



<!--<< Team Section Start >>-->

<!-- Brand Section Start -->
<section class="contact-section fix section-padding">
    <div class="container">
        <div class="contact-wrapper">
            <div class="arrow-shape">
                <img src="{{asset('frontend/assets/img/arrow-shape.png')}}" alt="shape-img">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="{{asset('frontend/assets/img/contact.png')}}" alt="contact-img">
                        <div class="cricle-shape">
                            <img src="{{asset('frontend/assets/img/circle-shape.png')}}" alt="shape-img">
                        </div>
                        <div class="small-cricle-shape">
                            <img src="{{asset('frontend/assets/img/choose/circle.png')}}" alt="shape-img">
                        </div>
                        <div class="frame-shape">
                            <img src="{{asset('frontend/assets/img/frame.png')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title mb-40 mxw-650">
                            <div class="subtitle"> <img src="{{asset('frontend/assets/img/icon/arrowLeftWhite.svg')}}" alt="icon"> <span
                                    class="text-white"> TALK TO US
                                </span><img src="{{asset('frontend/assets/img/icon/arrowRightWhite.svg')}}" alt="icon"></div>
                            <h2 class="title text-white"> Please share your valuable review! </h2>
                        </div>

                        <form action="/testimonial/store" id="contact-form" method="POST" class="contact-form-items">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <span>Your name*</span>
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <span>Your Email*</span>
                                        <input type="text" name="email" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <span>Message*</span>
                                        <textarea name="testimonial" id="message"
                                            placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                    <button type="submit" class="theme-btn bg-white">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection