@extends('frontend.layouts.app')
@section('content')
<div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hero Section Start -->
    <section class="hero-section fix hero-3">
        <div class="bottom-shape">
            <img src="{{asset('frontend/assets/img/hero/bottom-shape.png')}}" alt="shape-img">
        </div>
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
            <button class="array-next"><i class="fal fa-arrow-left"></i></button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                @foreach($banner as $banner)
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('{{ asset('storage/' . $banner->image) }}')">
                        <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
                            <img src="{{asset('frontend/assets/img/hero/mask-shape-2.png')}}" alt="shape-img">
                        </div>
                        <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
                            <img src="{{asset('frontend/assets/img/hero/border-shape.png')}}" alt="shape-img">
                        </div>
                        <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
                            <img src="{{asset('frontend/assets/img/choose/circle.png')}}" alt="shape-img">
                        </div>
                        <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                            <img src="{{asset('frontend/assets/img/frame.png')}}" alt="shape-img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">best it
                                        company</h5>
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        {{$banner->title}}
                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                       {{$banner->sub_title}}
                                    </p>
                                    <div class="hero-button">
                                        <a href="/about" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn bookbtn1  hover-black" >
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                        <a href="/contacts" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn bookbtn1 hover-black" >
                                            Contact Us
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
     <section>
         
     </section>

    <!-- About Section Start -->
    <section class="about-section section-padding fix bg-cover">
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="about-image">
                            <div class="shape-image">
                                <img src="{{asset('frontend/assets/img/about/shape.png')}}" alt="shape-img">
                            </div>
                            <div class="circle-shape">
                                <img src="{{asset('frontend/assets/img/about/circle.png')}}" alt="shape-img">
                            </div>
                            <img src="{{asset('frontend/assets/img/about/05.png')}}" alt="about-img">
                            <div class="video-box">
                                <a href="#"
                                    class="video-btn ripple popup-video">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title mb-3 mxw-650">
                                <div class="subtitle"> <img src="{{asset('frontend/assets/img/icon/arrowLeft.svg')}}" alt="icon"> <span>ABOUT
                                        FexMy
                                    </span><img src="{{asset('frontend/assets/img/icon/arrowRight.svg')}}" alt="icon"></div>
                                <h2 class="title"> Innovating the Future with FexMy</h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                            At FexMy, we believe that technology is not just a tool but a powerful force that shapes the future. As a leader in innovative IT solutions, we are dedicated to empowering businesses to thrive in an ever-evolving digital landscape.
                            </p>
                            <div class="icon-area wow fadeInUp" data-wow-delay=".7s">
                                <ul class="list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Branding and design Identity
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Web site Marketing Solutions
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Unlimited Download Data
                                    </li>
                                </ul>
                                <div class="icon-items">
                                    <div class="icon">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.2364 19.1127C10.2286 19.2824 10.1536 19.4421 10.028 19.5565C9.9024 19.671 9.73648 19.7308 9.56674 19.723C9.397 19.7151 9.23735 19.6401 9.12289 19.5145C9.00843 19.3889 8.94856 19.223 8.95643 19.0533C8.95977 18.9688 8.97978 18.8859 9.01531 18.8092C9.05084 18.7325 9.10119 18.6637 9.16345 18.6065C9.22572 18.5494 9.29867 18.5051 9.37811 18.4763C9.45755 18.4475 9.54191 18.4347 9.62632 18.4386C9.71074 18.4425 9.79354 18.4631 9.86997 18.4991C9.9464 18.5352 10.0149 18.586 10.0717 18.6487C10.1284 18.7113 10.1721 18.7846 10.2004 18.8642C10.2287 18.9438 10.2409 19.0283 10.2364 19.1127ZM36.7033 29.023C36.5341 29.4066 36.2265 29.7009 35.8373 29.8518L33.9147 30.5972C33.7347 30.6672 33.5433 30.7031 33.3502 30.7031C32.7221 30.7031 32.128 30.3227 31.8876 29.7027L31.7512 29.3509L30.3274 29.945C30.3881 30.3862 30.3092 30.8405 30.0908 31.2375C29.8218 31.7266 29.3784 32.0826 28.8406 32.2416C28.9882 32.7571 28.9417 33.3268 28.6656 33.8284C28.2531 34.5787 27.4466 34.9779 26.6434 34.9104C26.6502 35.2733 26.5616 35.6317 26.3864 35.9497C26.1153 36.4428 25.6665 36.8006 25.1228 36.9571C24.8237 37.044 24.5089 37.0631 24.2014 37.0131C24.195 37.3511 24.1064 37.6824 23.9432 37.9785C23.6719 38.4717 23.204 38.8422 22.6595 38.9948C22.4746 39.0469 22.2835 39.0734 22.0915 39.0737C21.7351 39.0738 21.385 38.9802 21.0763 38.8022L20.6117 38.5354C20.341 38.8891 19.967 39.1494 19.5305 39.2816C19.3268 39.3437 19.115 39.3753 18.9021 39.3755C18.5541 39.3755 18.2099 39.2901 17.8953 39.1219C17.4664 38.8931 17.1282 38.5253 16.936 38.0789C16.3714 38.293 15.7231 38.269 15.1594 37.9675C14.7765 37.7624 14.465 37.4457 14.2663 37.0595C13.6661 37.3534 12.9395 37.3654 12.3083 37.0278C11.804 36.758 11.4344 36.3066 11.2677 35.7565C11.1836 35.481 11.1556 35.1914 11.1856 34.9048C10.8501 34.8975 10.5211 34.8112 10.2253 34.653C9.72096 34.3833 9.35135 33.9318 9.18471 33.3816C9.01791 32.8315 9.07471 32.2508 9.3444 31.7465L9.84331 30.8136C9.73487 30.5418 9.67916 30.2503 9.62612 29.9651C9.53502 29.4757 9.46088 29.1493 9.26666 29.0739C9.17659 29.0389 8.9669 28.9518 8.2212 28.6198L8.0476 29.0126C7.78901 29.5973 7.21401 29.9459 6.61237 29.9459C6.40104 29.9459 6.18659 29.9029 5.98127 29.8122L4.09518 28.9786C3.71338 28.8098 3.41971 28.5016 3.26846 28.1106C3.11721 27.7196 3.12682 27.2941 3.29557 26.9123L7.62588 17.1149C7.79463 16.7331 8.10284 16.4395 8.49385 16.2882C8.88471 16.1369 9.31026 16.1465 9.69221 16.3153L11.5783 17.1489C12.3684 17.498 12.7271 18.425 12.3779 19.2152L12.0867 19.8739L13.2389 20.4054C13.254 20.4124 13.2689 20.4201 13.2835 20.4282C13.9295 20.7917 14.6198 20.6298 15.4937 20.425C16.6631 20.1509 18.0999 19.8145 19.7808 20.7831C22.1041 19.3686 23.8879 20.0958 25.2065 20.6348C26.1596 21.0243 26.7257 21.2305 27.2796 20.9425L28.2831 20.4053L28.0155 19.7151C27.7033 18.9095 28.1046 18.0002 28.9099 17.688L30.8326 16.9427C31.2218 16.7917 31.6474 16.802 32.0309 16.9711C32.4144 17.1404 32.7088 17.4479 32.8596 17.837L36.7315 27.8245C36.8827 28.2139 36.8726 28.6395 36.7033 29.023ZM6.90455 28.5073L11.2348 18.7099C11.2803 18.6068 11.2572 18.5141 11.2395 18.468C11.2216 18.4219 11.1763 18.3377 11.0732 18.2922L9.18706 17.4586C9.14771 17.4411 9.10512 17.432 9.06206 17.432C9.01245 17.432 8.97127 17.4438 8.94518 17.454C8.89909 17.4719 8.81495 17.5171 8.7694 17.6202L4.43916 27.4176C4.39354 27.5207 4.41666 27.6134 4.43448 27.6595C4.45229 27.7056 4.4976 27.7898 4.60073 27.8353L6.4869 28.6689C6.64377 28.7384 6.8351 28.6642 6.90455 28.5073ZM11.7775 33.4755L13.001 31.3583C13.1842 30.9319 13.0116 30.432 12.6009 30.2128C12.164 29.9796 11.6188 30.1445 11.3856 30.5807L10.4467 32.336C10.3344 32.5459 10.3111 32.7885 10.381 33.0191C10.4509 33.2498 10.6049 33.4386 10.8149 33.5509C11.1234 33.7158 11.4998 33.6833 11.7775 33.4755ZM14.1162 35.5512L15.4747 32.9202C15.5436 32.541 15.3581 32.1464 15.0173 31.9645C14.7061 31.7983 14.3269 31.8322 14.0486 32.0437L12.53 34.7108C12.4177 34.9208 12.3944 35.1633 12.4642 35.3939C12.5342 35.6245 12.6882 35.8134 12.8981 35.9256C13.3342 36.1589 13.8805 35.9909 14.1162 35.5512ZM16.8809 36.623L18.0824 34.314C18.1508 33.935 17.9653 33.5409 17.6247 33.3591C17.2854 33.178 16.8578 33.2399 16.581 33.5021L15.2773 36.027C15.2603 36.372 15.4421 36.7011 15.749 36.8653C16.1346 37.0715 16.6146 36.9663 16.8809 36.623ZM19.6998 37.6514L20.5999 35.9681C20.7618 35.6653 20.7336 35.289 20.528 35.0093C20.4498 34.9028 20.3486 34.8154 20.232 34.7535C19.8926 34.5722 19.4646 34.6345 19.1878 34.8975L18.0152 37.1512C17.987 37.5036 18.1719 37.8521 18.4849 38.0196C18.9214 38.253 19.4664 38.0877 19.6998 37.6514ZM22.5092 36.2114C22.4783 36.1941 21.9281 35.8723 21.9281 35.8723C21.8924 36.109 21.818 36.3411 21.7021 36.5577L21.2266 37.4469L21.6989 37.7182C21.8858 37.8255 22.1071 37.8514 22.3222 37.7912C22.5457 37.7285 22.7374 37.5772 22.848 37.3761C23.074 36.9652 22.9221 36.4428 22.5092 36.2114ZM21.1719 32.0485C21.1 32.0085 21.0367 31.9546 20.9856 31.89C20.9346 31.8255 20.8968 31.7515 20.8744 31.6722C20.8521 31.593 20.8456 31.5102 20.8553 31.4284C20.8651 31.3467 20.8909 31.2677 20.9312 31.196C20.9716 31.1242 21.0257 31.0612 21.0905 31.0104C21.1553 30.9597 21.2295 30.9222 21.3089 30.9002C21.3882 30.8782 21.4711 30.8721 21.5527 30.8822C21.6344 30.8923 21.7133 30.9185 21.7849 30.9591L26.4117 33.5626C26.8239 33.7892 27.3439 33.6382 27.5705 33.2259C27.7951 32.8177 27.6418 32.2963 27.2287 32.0637C26.144 31.4562 24.9147 30.7677 23.7053 30.0754C23.563 29.9922 23.4594 29.8563 23.4168 29.6971C23.3743 29.5378 23.3964 29.3683 23.4783 29.2252C23.5601 29.0822 23.6952 28.9773 23.854 28.9334C24.0128 28.8894 24.1826 28.91 24.3264 28.9906C25.5311 29.6804 26.7581 30.3676 27.8406 30.9739L27.8409 30.9741C28.0342 31.0822 28.2606 31.1074 28.4785 31.0452C28.7016 30.9813 28.8852 30.8357 28.9955 30.6352C29.1285 30.3933 29.1342 30.1091 29.011 29.8554C28.9326 29.6938 28.807 29.5599 28.6508 29.4712L23.5374 26.5567C22.7044 26.0821 21.6375 26.5141 20.4018 27.0143C18.5187 27.7766 16.1755 28.7252 14.1589 26.1302C14.0153 25.9455 13.9605 25.7171 14.0045 25.4872C14.0485 25.2568 14.1846 25.0645 14.3873 24.946C15.8233 24.1079 17.0353 23.1938 17.9901 22.2289C18.1999 22.0168 18.4179 21.813 18.6439 21.6181C17.6137 21.2129 16.7171 21.4223 15.7791 21.6422C14.7842 21.8754 13.7559 22.1166 12.6938 21.5305L11.5815 21.0174L8.72666 27.4766C9.39065 27.7721 9.63635 27.8766 9.71916 27.9087C10.4203 28.1809 10.6556 28.8077 10.7823 29.372C11.435 28.8159 12.3883 28.6825 13.1894 29.11C13.7903 29.4307 14.1794 30.0023 14.291 30.6312C14.7426 30.5662 15.2032 30.647 15.6057 30.8616C16.0918 31.1202 16.4594 31.5562 16.6322 32.079C17.1624 31.9331 17.7285 31.9965 18.2132 32.2562C18.6992 32.5148 19.0669 32.9508 19.2397 33.4734C19.7701 33.3275 20.3362 33.3911 20.821 33.6509C21.0649 33.7806 21.281 33.9567 21.4572 34.1694L24.1347 35.685C24.3301 35.7937 24.5583 35.8188 24.7771 35.7558C24.9989 35.692 25.1814 35.5468 25.2913 35.3471C25.516 34.9387 25.3626 34.4174 24.9496 34.185M31.2993 28.1851L28.7385 21.5796L27.8631 22.0481C26.7618 22.6209 25.7309 22.1995 24.7338 21.792C23.4293 21.2587 22.0802 20.7071 20.1421 22.0366C19.7257 22.3211 19.301 22.6813 18.8788 23.108C17.9527 24.0438 16.8113 24.9305 15.4808 25.748C16.8239 27.114 18.2739 26.5271 19.9328 25.8555C21.341 25.2853 22.7972 24.6959 24.1564 25.4705L29.2699 28.3851C29.4681 28.4978 29.647 28.6414 29.7999 28.8105L31.2993 28.1851ZM35.5664 28.2766L31.6945 18.2891C31.6538 18.1839 31.5718 18.1348 31.5266 18.1148C31.4856 18.0968 31.4413 18.0873 31.3965 18.0872C31.3583 18.0872 31.3204 18.0944 31.2848 18.1083L29.3621 18.8536C29.202 18.9156 29.1192 19.1034 29.1813 19.2635L33.0532 29.2509C33.1152 29.4109 33.3027 29.4936 33.463 29.4316L35.3856 28.6862C35.4907 28.6455 35.5399 28.5636 35.5598 28.5184C35.5796 28.4732 35.6071 28.3816 35.5664 28.2766ZM30.8006 19.0713C30.4467 19.0713 30.1599 19.3581 30.1599 19.712C30.1599 19.8819 30.2274 20.0448 30.3475 20.165C30.4677 20.2852 30.6306 20.3527 30.8006 20.3527C30.9705 20.3527 31.1335 20.2852 31.2536 20.165C31.3738 20.0448 31.4413 19.8819 31.4413 19.712C31.4413 19.542 31.3738 19.3791 31.2536 19.2589C31.1335 19.1388 30.9705 19.0713 30.8006 19.0713ZM31.5952 15.0156C31.6045 15.1028 31.5953 15.191 31.5683 15.2744C31.5413 15.3578 31.4971 15.4346 31.4385 15.4998C31.3799 15.565 31.3083 15.6172 31.2282 15.6529C31.1481 15.6886 31.0614 15.7071 30.9738 15.7072H24.9923C25.0035 15.781 25.0135 15.8552 25.0215 15.9302C25.0308 16.0173 25.0217 16.1055 24.9947 16.1889C24.9677 16.2723 24.9234 16.3491 24.8648 16.4143C24.8062 16.4796 24.7346 16.5317 24.6545 16.5674C24.5745 16.6032 24.4878 16.6217 24.4001 16.6217H15.5999C15.5122 16.6217 15.4255 16.6033 15.3454 16.5676C15.2653 16.5318 15.1937 16.4797 15.135 16.4145C15.0764 16.3493 15.0322 16.2724 15.0052 16.189C14.9783 16.1056 14.9691 16.0174 14.9785 15.9302C14.9865 15.8553 14.9964 15.781 15.0076 15.7072H9.0262C8.9385 15.7072 8.85177 15.6888 8.77167 15.6531C8.69156 15.6174 8.61987 15.5652 8.56126 15.5C8.50264 15.4348 8.45842 15.3579 8.43146 15.2745C8.4045 15.191 8.39541 15.1028 8.40479 15.0156C8.5712 13.4607 9.53768 12.1749 10.8701 11.5453C10.4689 11.1001 10.2243 10.5112 10.2243 9.86609C10.2243 8.48125 11.351 7.35469 12.7357 7.35469C14.1205 7.35469 15.2471 8.48133 15.2471 9.86609C15.2471 10.5135 15.0008 11.1045 14.5971 11.5502C15.2838 11.8769 15.8809 12.3793 16.3188 13.0094C16.7885 12.5103 17.355 12.1123 17.9837 11.8395C17.4614 11.3206 17.1374 10.6023 17.1374 9.80977C17.1374 8.23133 18.4216 6.94711 20 6.94711C21.5785 6.94711 22.8627 8.23133 22.8627 9.80977C22.8627 10.6024 22.5387 11.3206 22.0164 11.8395C22.645 12.1124 23.2115 12.5104 23.6813 13.0095C24.1191 12.3794 24.7162 11.877 25.403 11.5503C24.9992 11.1045 24.7529 10.5136 24.7529 9.86617C24.7529 8.48133 25.8796 7.35477 27.2643 7.35477C28.6491 7.35477 29.7757 8.48141 29.7757 9.86617C29.7757 10.5113 29.5311 11.1001 29.1299 11.5454C30.4622 12.1748 31.4289 13.4606 31.5952 15.0156ZM27.2642 11.1276C27.9598 11.1276 28.5256 10.5617 28.5256 9.86617C28.5256 9.17063 27.9598 8.60477 27.2642 8.60477C26.5687 8.60477 26.0028 9.17063 26.0028 9.86617C26.0028 10.5617 26.5687 11.1276 27.2642 11.1276ZM19.9999 11.4223C20.8892 11.4223 21.6126 10.6989 21.6126 9.80969C21.6126 8.92047 20.8892 8.19703 19.9999 8.19703C19.1108 8.19703 18.3874 8.92047 18.3874 9.80969C18.3874 10.6989 19.1109 11.4223 19.9999 11.4223ZM12.7357 11.1276C13.4313 11.1276 13.9971 10.5617 13.9971 9.86617C13.9971 9.17063 13.4313 8.60477 12.7357 8.60477C12.0402 8.60477 11.4743 9.17063 11.4743 9.86617C11.4743 10.5617 12.0402 11.1276 12.7357 11.1276ZM15.3668 14.4571C15.4159 14.343 15.4693 14.2307 15.5267 14.1205C15.0105 13.0675 13.9228 12.3775 12.7357 12.3775C11.3865 12.3775 10.227 13.2338 9.80213 14.4571H15.3668ZM23.6395 15.3716C23.1662 13.7927 21.7071 12.6723 19.9999 12.6723C18.2927 12.6723 16.8336 13.7927 16.3604 15.3716H23.6395ZM30.1978 14.4571C29.773 13.2338 28.6135 12.3775 27.2642 12.3775C26.0772 12.3775 24.9896 13.0675 24.4732 14.1205C24.5307 14.2307 24.584 14.343 24.6331 14.4571H30.1978ZM35.2227 17.0973C35.2227 17.2631 35.2885 17.4221 35.4057 17.5393C35.5229 17.6565 35.6819 17.7223 35.8477 17.7223C36.0134 17.7223 36.1724 17.6565 36.2896 17.5393C36.4068 17.4221 36.4727 17.2631 36.4727 17.0973C36.4727 14.1844 35.7015 11.3212 34.2426 8.81742C34.1585 8.67551 34.0217 8.5726 33.862 8.53113C33.7024 8.48967 33.5328 8.513 33.3903 8.59605C33.2477 8.6791 33.1438 8.81513 33.1012 8.97448C33.0585 9.13383 33.0806 9.30358 33.1626 9.44672C34.5103 11.7597 35.2227 14.4052 35.2227 17.0973ZM4.15229 17.7223C4.31805 17.7223 4.47702 17.6565 4.59423 17.5393C4.71144 17.4221 4.77729 17.2631 4.77729 17.0973C4.77729 13.7569 5.85971 10.6649 7.69104 8.15188L7.73588 9.40102C7.73883 9.48304 7.7579 9.56368 7.79201 9.63834C7.82612 9.71299 7.8746 9.7802 7.93468 9.83611C7.99476 9.89203 8.06527 9.93557 8.14218 9.96424C8.21909 9.99291 8.30089 10.0061 8.38291 10.0032C8.46494 10.0003 8.54558 9.98119 8.62024 9.94708C8.69489 9.91297 8.76209 9.86449 8.81801 9.80441C8.87393 9.74432 8.91747 9.67381 8.94614 9.59691C8.97481 9.52 8.98805 9.4382 8.9851 9.35617L8.88979 6.70266C11.6695 3.73352 15.6214 1.87461 19.9999 1.87461C23.2223 1.87461 26.3645 2.90297 28.9553 4.78805L27.6962 4.83328C27.5305 4.83923 27.374 4.91074 27.2611 5.03208C27.1482 5.15342 27.0881 5.31466 27.094 5.48031C27.1 5.64597 27.1715 5.80248 27.2928 5.91541C27.4141 6.02834 27.5754 6.08845 27.741 6.0825L30.6628 5.97758C30.7575 5.97419 30.8503 5.94928 30.934 5.90473C31.0177 5.86018 31.0902 5.79717 31.146 5.72046C31.2017 5.64375 31.2393 5.55536 31.2558 5.46198C31.2724 5.3686 31.2675 5.27268 31.2414 5.18149L30.4392 2.37C30.3938 2.21059 30.2868 2.07578 30.1419 1.99522C29.9971 1.91466 29.8261 1.89495 29.6667 1.94043C29.5073 1.98591 29.3725 2.09285 29.2919 2.23773C29.2114 2.38261 29.1917 2.55356 29.2371 2.71297L29.5026 3.64336C26.7356 1.68899 23.4093 0.624611 19.9999 0.624611C15.2371 0.624611 10.9407 2.65719 7.93049 5.89961L5.27252 6.65797C5.11312 6.70346 4.97833 6.81041 4.89778 6.95529C4.81723 7.10017 4.79754 7.27111 4.84303 7.43051C4.88852 7.58991 4.99547 7.72471 5.14035 7.80525C5.28523 7.8858 5.45617 7.90549 5.61557 7.86L6.55346 7.59242C4.64831 10.2796 3.52729 13.5599 3.52729 17.0973C3.52729 17.2631 3.59314 17.4221 3.71035 17.5393C3.82756 17.6565 3.98653 17.7223 4.15229 17.7223Z"
                                                fill="#3C72FC" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h2>
                                            <span class="counter-number">6,561</span>+
                                        </h2>
                                        <span>Satisfied Clients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="about-author">
                                <div class="about-button wow fadeInUp" data-wow-delay=".8s">
                                    <a href="/about" class="theme-btn">
                                        Explore More
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <div class="author-icon wow fadeInUp" data-wow-delay=".9s">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call Us Now</span>
                                        <h5>
                                            <a href="tel:+2085550112">+208-555-0112</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <!-- <div class="brand-section fix section-padding pt-0">
        <div class="container">
            <div class="brand-wrapper">
                <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">1k + Brands Trust Us</h6>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand.png" alt="brand-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Service Section Start -->
    <section class="service-section-3 pb-0 fix section-padding bg-cover"
        style="background-image: url('assets/img/service/service-bg-3.jpg');">
        <div class="container">
            <div class="row d-flex align-items-end justify-content-between mb-20">
                <div class="col-xl-7">
                    <div class="section-title mxw-650">
                        <div class="subtitle"> <img src="{{asset('frontend/assets/img/icon/arrowLeft.svg')}}" alt="icon"> <span> What We Do
                            </span><img src="{{asset('frontend/assets/img/icon/arrowRight.svg')}}" alt="icon"></div>
                        <h2 class="title"> We Solve IT Problems With Technology</h2>
                    </div>
                </div>

                <div class="col-xl-5 d-flex align-items-end justify-content-end">
                    <div class="btn-wrapper" data-wow-delay=".9s">
                        <a href="/services" class="theme-btn"> See all Services <i
                                class="fa-solid fa-arrow-right-long"></i> </a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($service as $service)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service-card-items">
                        <div class="service-image">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="service-img">
                        </div>
                        <!-- <div class="icon-2">
                            <img src="{{asset('frontend/assets/img/service/icon/s-icon-1.svg')}}" alt="img">
                        </div> -->
                        <div class="service-content">
                            <!-- <div class="icon">
                                <img src="{{asset('frontend/assets/img/service/icon/s-icon-1.svg')}}" alt="img">
                            </div> -->
                            <h4>
                                <a href="service-details.html">{{ $service->service_name }}</a>
                            </h4>
                            <p>
                            {!! Str::limit($service->servce_detail,80) !!}
                            </p>
                            <a href="service-details.html" class="theme-btn-2 mt-3">
                                read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="cta-banner-2 section-padding">
            <div class="container">
                <div class="cta-wrapper-2 border-radius">
                    <h3>
                        Stay Connected With <br> Cutting Edge IT
                    </h3>
                    <div class="author-icon">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="content">
                            <span>Call Us Now</span>
                            <h4>
                                <a href="tel:+2085550112">+208-555-0112</a>
                            </h4>
                        </div>
                    </div>
                    <a href="/contact" class="theme-btn bg-white">
                        get A Quote
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section Start -->
    <section class="work-process-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title title-area  mx-auto mb-25">
                <div class="subtitle d-flex justify-content-center"> <img src="{{asset('frontend/assets/img/icon/arrowLeft.svg')}}"
                        alt="icon"> <span> How IT work
                    </span><img src="{{asset('frontend/assets/img/icon/arrowRight.svg')}}" alt="icon"></div>
                <h2 class="title text-center">Standard Work Process</h2>
            </div>

            <div class="process-work-wrapper">
                <div class="line-shape">
                    <img src="{{asset('frontend/assets/img/process/linepng.png')}}" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/process/01.svg')}}" alt="img">
                                <h6 class="number">
                                    1
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Choose A Service</h4>
                                <p>
                                Choose a service that matches your ambition. Transform your business with trusted IT solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Define Requirements</h4>
                                <p>
                                Identify and outline your goals to set a clear path for technology solutions that meet your business needs.
                                </p>
                            </div>
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/process/02.svg')}}" alt="img">
                                <h6 class="number">
                                    2
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/process/03.svg')}}" alt="img">
                                <h6 class="number">
                                    3
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Request A Meeting</h4>
                                <p>
                                Let’s turn your vision into action. Request a meeting, and we’ll guide you through the next steps.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Finial Solution</h4>
                                <p>
                                Our final solution offers seamless integration, robust security, and optimized performance to drive long-term success.
                                </p>
                            </div>
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/process/04.svg')}}" alt="img">
                                <h6 class="number">
                                    4
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <!-- Bootstrap Carousel Start -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <div class="row y-middle">
                        <!-- Left Content Section -->
                        <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                            <div class="sec-title2 mb-30">
                                <div class="sub-text">Our Expertise</div>
                                <h2 class="title mb-23">We provide tailored solutions for <span>business growth.</span></h2>
                                <p class="desc mb-0">Our experienced team ensures that every step you take in business is aligned with your growth strategy, leading you toward success and prosperity.</p>
                                <div class="mt-3">
                                <a href="/about" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <!-- Right Image Section -->
                        <div class="col-lg-6" style="max-width:550px;">
                            <div class="about-img">
                                <img src="frontend/assets/img/about/about-3.png" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row y-middle">
                        <!-- Left Content Section -->
                        <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                            <div class="sec-title2 mb-30">
                                <div class="sub-text">Who We Are</div>
                                <h2 class="title mb-23">We craft your business ideas and <span>plans.</span></h2>
                                <p class="desc mb-0">Nor is there anyone who loves or pursues or desires to obtain pain of
                                    itself, because it is pain, but occasionally circumstances occur in which toil and pain
                                    can procure him some great pleasure. We did with righteous indignation and dislike men
                                    who are so beguiled and demoralized by data business theme 2021.</p>
                                    <div class="mt-3">
                                <a href="/about" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                </div>
                            </div>
                            <!-- Skillbar Section Start -->
                            
                            <!-- Skillbar Section End -->
                        </div>
                        <!-- Right Image Section -->
                        <div class="col-lg-6"style="max-width:550px;">
                            <div class="about-img">
                                <img src="frontend/assets/img/about/about-5.jpg" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Additional Slides (if needed) -->
                <!-- Second Slide -->
               
                <!-- Third Slide -->
                <div class="carousel-item">
                    <div class="row y-middle">
                        <!-- Left Content Section -->
                        <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                            <div class="sec-title2 mb-30">
                                <div class="sub-text">Our Vision</div>
                                <h2 class="title mb-23">Empowering businesses to reach <span>new heights.</span></h2>
                                <p class="desc mb-0">We focus on strategic solutions that give businesses the tools they need to flourish in competitive markets, bringing them long-term success.</p>
                                <div class="mt-3">
                                <a href="/about" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <!-- Right Image Section -->
                        <div class="col-lg-6"style="max-width:550px;">
                            <div class="about-img">
                                <img src="frontend/assets/img/about/about-4.png" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Bootstrap Carousel End -->
    </div>

    <!-- Bootstrap JS and Popper.js (for functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

     @include('frontend/commonsection')
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

    <!--<< Marque Section Start >>-->
   

    <!--<< Team Section Start >>-->
    <!-- <section class="team-section-3 fix section-padding section-bg">
        <div class="line-shape">
            <img src="{{asset('frontend/assets/img/team/line-shape.png')}}" alt="shape-img">
        </div>
        <div class="mask-shape">
            <img src="{{asset('frontend/assets/img/team/mask-shape-2.png')}}" alt="shape-img">
        </div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between mb-30">
                <div class="col-xl-7">
                    <div class="section-title-area mb-0">
                        <div class="section-title mxw-650">
                            <div class="subtitle"> <img src="{{asset('frontend/assets/img/icon/arrowLeft.svg')}}" alt="icon"> <span> Team
                                    Members
                                </span><img src="{{asset('frontend/assets/img/icon/arrowRight.svg')}}" alt="icon"></div>
                            <h2 class="title">Our Dedicated Team Members</h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 d-flex justify-content-start justify-content-lg-end">
                    <div class="btn-wrapper mt-3 mt-lg-0" data-wow-delay=".9s">
                        <a href="/teams" class="theme-btn"> All Members<i
                                class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>


            <div class="row">
                @foreach($team as $team)
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
        </div>
    </section> -->

    <!--<< Testimonial Section Start >>-->
    <section class="tesimonial-section-3 section-padding section-bg-2 bg-cover">
        <div class="line-shape">
            <img src="{{asset('frontend/assets/img/team/line-shape.png')}}" alt="shape-img">
        </div>
        <div class="mask-shape">
            <img src="{{asset('frontend/assets/img/team/mask-shape.png')}}" alt="shape-img">
        </div>
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
            <button class="array-next"><i class="fal fa-arrow-right"></i></button>
        </div>
        <div class="container">
            <div class="section-title title-area  mx-auto mb-20">
                <div class="subtitle d-flex justify-content-center"> <img src="{{asset('frontend/assets/img/icon/arrowLeftWhite.svg')}}"
                        alt="icon"> <span class=" text-white"> Testimonials
                    </span><img src="{{asset('frontend/assets/img/icon/arrowRightWhite.svg')}}" alt="icon"></div>
                <h2 class="title text-center text-white"> People Who Already Love Us</h2>
            </div>
            <div class="swiper testimonial-slider-2">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/testimonial/icon.png')}}" alt="icon-img">
                            </div>
                            <div class="client-items">
                                <!-- <div class="client-image style-2 bg-cover"
                                    style="background-image: url('frontend/assets/img/testimonial/02.jpg');"></div> -->
                                <div class="client-content">
                                    <h4>{{$testimonial->name}}</h4>
                                    <p>{{$testimonial->email}}</p>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                {{$testimonial->testimonial}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Start -->
    <section class="news-section-3 fix section-padding">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between mb-20">
                <div class="col-xl-7">
                    <div class="section-title-area">
                        <div class="section-title mxw-650">
                            <div class="subtitle"> <img src="{{asset('frontend/assets/img/icon/arrowLeft.svg')}}" alt="icon"> <span> Latest
                                    Blog
                                </span><img src="{{asset('frontend/assets/img/icon/arrowRight.svg')}}" alt="icon"></div>
                            <h2 class="title"> Checkout Our Latest Blogs</h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 d-flex justify-content-end">
                    <div class="array-button">
                        <button class="array-next"><i class="fal fa-arrow-left"></i></button>
                        <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="swiper news-slider">
                <div class="swiper-wrapper">
                    @foreach($blogs as $blog)
                    <div class="swiper-slide">
                        <div class="news-card-items style-2">
                            <div class="news-image">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="news-img">
                                <div class="post-date">
                                    <h3>
                                    {{ $blog->created_at->format('d') }} <br>
                                        <span>{{ $blog->created_at->format('M') }}</span>
                                    </h3>
                                </div>
                            </div>
                            <!-- <div class="news-content">
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
                            </div> -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endsection