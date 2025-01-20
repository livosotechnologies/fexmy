<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="/" class="header-logo">
            <img src="{{asset('backend/assest/build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
            <img src="{{asset('backend/assest/build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
            <img src="{{asset('backend/assest/build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
            <img src="{{asset('backend/assest/build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="#" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                    
                        <svg xmlns="#" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                            <path d="M216,115.54V208a8,8,0,0,1-8,8H160a8,8,0,0,1-8-8V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54A8,8,0,0,1,216,115.54Z" opacity="0.2"></path>
                            <path d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path>
                        </svg>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="/home">Dashboards</a>
                        </li>

                    </ul>
                </li>


                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M40,40H216a16,16,0,0,1,16,16V192a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40ZM64,80H192v48H64Zm0,64H192v48H64Z" opacity="0.2"></path>
                        <path d="M40,40H216a16,16,0,0,1,16,16V192a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40ZM64,80H192v48H64Zm0,64H192v48H64Z"></path>
                    </svg>
                        <span class="side-menu__label">Banner</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Banner</a>
                        </li>
                        <li class="slide has-sub">
                            
                           
                                <li class="slide">
                                    <a href="/banner" class="side-menu__item">Banner</a>
                                </li>
                                <li class="slide">
                                    <a href="/createbanner" class="side-menu__item">Create Banner</a>
                                </li>
                           
                        </li>

                    </ul>
                </li>


                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M64,40H192a16,16,0,0,1,16,16V192a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V56A16,16,0,0,1,64,40Zm72,56H88a8,8,0,0,0,0,16h48a8,8,0,0,0,0-16ZM88,128h80a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Zm0,32h64a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Z" opacity="0.2"></path>
                        <path d="M64,40H192a16,16,0,0,1,16,16V192a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V56A16,16,0,0,1,64,40Zm72,56H88a8,8,0,0,0,0,16h48a8,8,0,0,0,0-16ZM88,128h80a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Zm0,32h64a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Z"></path>
                    </svg>
                        <span class="side-menu__label">Blog</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Blog</a>
                        </li>
                        <li class="slide has-sub">
                            
                           
                                <li class="slide">
                                    <a href="/index" class="side-menu__item">Blog</a>
                                </li>
                                <li class="slide">
                                    <a href="/create" class="side-menu__item">Create Blog</a>
                                </li>
                           
                        </li>

                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M232,120H216.35a85.92,85.92,0,0,0-11.05-26.62l11.08-11.08a8,8,0,0,0-11.32-11.32l-11.08,11.08A85.92,85.92,0,0,0,136,39.65V24a8,8,0,0,0-16,0V39.65a85.92,85.92,0,0,0-26.62,11.05L82.3,39.65a8,8,0,0,0-11.32,11.32l11.08,11.08A85.92,85.92,0,0,0,39.65,120H24a8,8,0,0,0,0,16H39.65a85.92,85.92,0,0,0,11.05,26.62l-11.08,11.08a8,8,0,0,0,11.32,11.32l11.08-11.08A85.92,85.92,0,0,0,120,216.35V232a8,8,0,0,0,16,0V216.35a85.92,85.92,0,0,0,26.62-11.05l11.08,11.08a8,8,0,0,0,11.32-11.32l-11.08-11.08A85.92,85.92,0,0,0,216.35,136H232a8,8,0,0,0,0-16ZM128,168a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z" opacity="0.2"></path>
                        <path d="M232,120H216.35a85.92,85.92,0,0,0-11.05-26.62l11.08-11.08a8,8,0,0,0-11.32-11.32l-11.08,11.08A85.92,85.92,0,0,0,136,39.65V24a8,8,0,0,0-16,0V39.65a85.92,85.92,0,0,0-26.62,11.05L82.3,39.65a8,8,0,0,0-11.32,11.32l11.08,11.08A85.92,85.92,0,0,0,39.65,120H24a8,8,0,0,0,0,16H39.65a85.92,85.92,0,0,0,11.05,26.62l-11.08,11.08a8,8,0,0,0,11.32,11.32l11.08-11.08A85.92,85.92,0,0,0,120,216.35V232a8,8,0,0,0,16,0V216.35a85.92,85.92,0,0,0,26.62-11.05l11.08,11.08a8,8,0,0,0,11.32-11.32l-11.08-11.08A85.92,85.92,0,0,0,216.35,136H232a8,8,0,0,0,0-16ZM128,168a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z"></path>
                    </svg>
                        <span class="side-menu__label">Service</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Service</a>
                        </li>
                        <li class="slide has-sub">
                            
                           
                                <li class="slide">
                                    <a href="/service" class="side-menu__item">All Service</a>
                                </li>
                                <li class="slide">
                                    <a href="/create/service" class="side-menu__item">Create Service</a>
                                </li>
                           
                        </li>

                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M64,40H192a16,16,0,0,1,16,16V96a16,16,0,0,1-16,16H64A16,16,0,0,1,48,96V56A16,16,0,0,1,64,40Zm0,96H192a16,16,0,0,1,16,16v40a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V152A16,16,0,0,1,64,136Zm96,72H96a16,16,0,0,0,0,32h64a16,16,0,0,0,0-32Z" opacity="0.2"></path>
                        <path d="M64,40H192a16,16,0,0,1,16,16V96a16,16,0,0,1-16,16H64A16,16,0,0,1,48,96V56A16,16,0,0,1,64,40Zm0,96H192a16,16,0,0,1,16,16v40a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V152A16,16,0,0,1,64,136Zm96,72H96a16,16,0,0,0,0,32h64a16,16,0,0,0,0-32Z"></path>
                    </svg>
                   
                        <span class="side-menu__label">Sub-Service</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Sub-Service</a>
                        </li>
                        <li class="slide has-sub">
                            
                           
                                <li class="slide">
                                    <a href="/sub_service" class="side-menu__item">All Sub-Service</a>
                                </li>
                                <li class="slide">
                                    <a href="/create/sub-service" class="side-menu__item">Create Sub-Service</a>
                                </li>
                           
                        </li>

                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M128,24a8,8,0,0,1,8,8V56h16a56,56,0,0,1,0,112H128v16h16a8,8,0,0,1,0,16H128v24a8,8,0,0,1-16,0V200H96a56,56,0,0,1,0-112h16V72H96a8,8,0,0,1,0-16h16V32A8,8,0,0,1,128,24Zm8,72H96a40,40,0,0,0,0,80h40Z" opacity="0.2"></path>
                        <path d="M128,24a8,8,0,0,1,8,8V56h16a56,56,0,0,1,0,112H128v16h16a8,8,0,0,1,0,16H128v24a8,8,0,0,1-16,0V200H96a56,56,0,0,1,0-112h16V72H96a8,8,0,0,1,0-16h16V32A8,8,0,0,1,128,24Zm8,72H96a40,40,0,0,0,0,80h40Z"></path>
                    </svg>
                        <span class="side-menu__label">Price</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Price</a>
                        </li>
                        <li class="slide has-sub">
                            
                           
                                <li class="slide">
                                    <a href="/price" class="side-menu__item">All Prices</a>
                                </li>
                                <li class="slide">
                                    <a href="/create/price" class="side-menu__item">Create service Price</a>
                                </li>
                           
                        </li>

                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M216,72H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56V72H40A16,16,0,0,0,24,88V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V88A16,16,0,0,0,216,72Zm-128-8a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8V72H88ZM216,200H40V128H216v72Z" opacity="0.2"></path>
                        <path d="M216,72H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56V72H40A16,16,0,0,0,24,88V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V88A16,16,0,0,0,216,72ZM88,56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8V72H88ZM216,200H40V128H216v72Z"></path>
                    </svg>
                        <span class="side-menu__label">Portfolio</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Portfolio</a>
                        </li>
                        <li class="slide has-sub">
                            
                           
                                <li class="slide">
                                    <a href="/portfolio" class="side-menu__item">All Portfolio</a>
                                </li>
                                <li class="slide">
                                    <a href="/create/portfolio" class="side-menu__item">Create Portfolio</a>
                                </li>
                           
                        </li>

                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M168,128a48,48,0,1,0-48-48A48,48,0,0,0,168,128Zm0-80a32,32,0,1,1-32,32A32,32,0,0,1,168,48Zm-80,56A40,40,0,1,0,48,64,40,40,0,0,0,88,104Zm0-64a24,24,0,1,1-24,24A24,24,0,0,1,88,40ZM168,144c-26.4,0-80,13.2-80,40v24a8,8,0,0,0,8,8H240a8,8,0,0,0,8-8V184C248,157.2,194.4,144,168,144Zm-80,40c0-4.8,17.6-24,80-24s80,19.2,80,24v16H88Zm-72,0a8,8,0,0,1-8,8H8a8,8,0,0,1-8-8V184c0-26.4,53.6-40,80-40,26.4,0,80,13.2,80,40v8a8,8,0,0,1-8,8H88A8,8,0,0,1,80,184V176Zm72,8c0-4.8,17.6-24,80-24s80,19.2,80,24v16H152Z" opacity="0.2"></path>
                        <path d="M168,128a48,48,0,1,0-48-48A48,48,0,0,0,168,128Zm0-80a32,32,0,1,1-32,32A32,32,0,0,1,168,48Zm-80,56A40,40,0,1,0,48,64,40,40,0,0,0,88,104Zm0-64a24,24,0,1,1-24,24A24,24,0,0,1,88,40ZM168,144c-26.4,0-80,13.2-80,40v24a8,8,0,0,0,8,8H240a8,8,0,0,0,8-8V184C248,157.2,194.4,144,168,144Zm-80,40c0-4.8,17.6-24,80-24s80,19.2,80,24v16H88Zm-72,0a8,8,0,0,1-8,8H8a8,8,0,0,1-8-8V184c0-26.4,53.6-40,80-40,26.4,0,80,13.2,80,40v8a8,8,0,0,1-8,8H88A8,8,0,0,1,80,184V176Zm72,8c0-4.8,17.6-24,80-24s80,19.2,80,24v16H152Z"></path>
                    </svg>
                        <span class="side-menu__label">Team</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Team</a>
                        </li>
                        <li class="slide has-sub">
                            
                           
                                <li class="slide">
                                    <a href="/team" class="side-menu__item">All Team</a>
                                </li>
                                <li class="slide">
                                    <a href="/create/team" class="side-menu__item">Create Team</a>
                                </li>
                           
                        </li>

                    </ul>
                </li>
                <li class="has-sub" style="margin-left: 9px;">
                    <a href="/contact" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M128,128a48,48,0,1,0-48-48A48,48,0,0,0,128,128Z" opacity="0.2"></path>
                        <path d="M128,136A56,56,0,1,0,72,80,56,56,0,0,0,128,136Zm0-96a40,40,0,1,1-40,40A40,40,0,0,1,128,40Zm72,128H182.62a79.9,79.9,0,0,0-109.24,0H56a24,24,0,0,0-24,24v8a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16v-8A24,24,0,0,0,200,168Zm8,32H48v-8a8,8,0,0,1,8-8h18.62a64,64,0,0,1,90.76,0H200a8,8,0,0,1,8,8Z"></path>
                    </svg>

                        <span class="side-menu__label">Contact</span>
                        
                    </a>
                    <!-- <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Forms</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="form-inputs.html" class="side-menu__item">Inputs</a>
                                </li>

                                <li class="slide">
                                    <a href="form-file-uploads.html" class="side-menu__item">File Uploads</a>
                                </li>

                            </ul>
                        </li>
                        <li class="slide">
                            <a href="floating-labels.html" class="side-menu__item">Floating Labels</a>
                        </li>

                    </ul> -->
                </li>
                <li class="has-sub" style="margin-left: 9px;">
                    <a href="/testi" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="32" height="32" viewBox="0 0 256 256">
                        <path d="M216,48H40A16,16,0,0,0,24,64V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V64A16,16,0,0,0,216,48Zm0,16-88,56L40,64V64ZM216,192H40V88l88,56a8,8,0,0,0,8,0l88-56Z" opacity="0.2"></path>
                        <path d="M216,40H40A24,24,0,0,0,16,64V192a24,24,0,0,0,24,24H216a24,24,0,0,0,24-24V64A24,24,0,0,0,216,40ZM216,64l-88,56L40,64ZM216,192H40V88l88,56a16,16,0,0,0,16,0l88-56Z"></path>
                    </svg>

                        <span class="side-menu__label">Testimonial</span>
                        
                    </a>
                    <!-- <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Forms</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="form-inputs.html" class="side-menu__item">Inputs</a>
                                </li>

                                <li class="slide">
                                    <a href="form-file-uploads.html" class="side-menu__item">File Uploads</a>
                                </li>

                            </ul>
                        </li>
                        <li class="slide">
                            <a href="floating-labels.html" class="side-menu__item">Floating Labels</a>
                        </li>

                    </ul> -->
                </li>
               
                
                <li class="slide">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="side-menu__item">Logout</a>
                </li>

              

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>





            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="#" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>