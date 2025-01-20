<header>
        <div class="header-top-section top-style-3">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link">info@example.com</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:2086660112">+208-666-0112</a>
                        </li>
                    </ul>
                    <div class="top-right">
                       
                        <div class="social-icon d-flex align-items-center">
                           
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-3">
            <div class="plane-shape">
                <img src="{{asset('frontend/assets/img/plane.png')}}" alt="shape-img">
            </div>
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="/" class="header-logo">
                                    <img src="https://fexmy.co/assets/images/logo-dark.png" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                        <li class="active menu-thumb">
                                                <a href="/">Home</a>
                                                <!-- Dropdown for Home -->
                                                <ul class="dropdown">
                                                    <li><a href="/about">About Us</a></li>
                                                    <li class="has-submenu">
                                                        <a href="/company">Company</a>
                                                        <!-- Sub-dropdown for Company -->
                                                        <ul class="submenu">
                                                            <li><a href="/company/overview">Overview</a></li>
                                                            <li><a href="/company/team">Team</a></li>
                                                            <li><a href="/company/careers">Careers</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="/about">About</a>
                                            </li>
                                            <li>
                                                <a href="/services">
                                                    Services
                                                    
                                                </a>
                                                
                                            </li>
                                            <li class="">
                                                <a href="/portfolios">
                                                    Portfolio
                                                    
                                                </a>
                                               
                                            </li>
                                            <li>
                                                <a href="/blogs">
                                                    Blog
                                                    
                                                </a>
                                               
                                            </li>
                                            <li>
                                                <a href="/contacts">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class=""
                                    >
                                    <i class="fal fa-user"></i>
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class=""
                                    >
                                    <i class="fal fa-user"></i>
                                    </a>
                                @endauth
                            </nav>
                        @endif
                            <!-- <div class="header-button">
                                <a href="contact.html" class="theme-btn bg-white">
                                    <span>
                                        get A Quote
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div> -->
                            <!-- <div class="header__hamburger d-lg-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>