<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="transparent" data-width="default" data-menu-styles="light" data-toggled="close">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- TITLE -->
    <title>Educate </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" href="{{asset('backend/assest/build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('backend/assest/build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{asset('backend/assest/build/assets/app-dDDo_cMZ.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assest/build/assets/app-dDDo_cMZ.css')}}" />

    <!-- ICONS CSS -->
    <link href="{{asset('backend/assest/build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

    <!-- NODE WAVES CSS -->
    <link href="{{asset('backend/assest/build/assets/libs/node-waves/waves.min.css')}}" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/simplebar/simplebar.min.css')}}">

    <!-- PICKER CSS -->
    <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/%40simonwep/pickr/themes/nano.min.css')}}">

    <!-- AUTO COMPLETE CSS -->
    <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/%40tarekraafat/autocomplete.js/css/autoComplete.css')}}">

    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

    <!-- CHOICES JS -->
    <script src="{{asset('backend/assest/build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <!-- MAIN JS -->
    <script src="{{asset('backend/assest/build/assets/main.js')}}"></script>




</head>

<body>



    <!-- LOADER -->
    <div id="loader">
        <img src="{{asset('backend/assest/build/assets/images/media/loader.svg')}}" alt="">
    </div>
    <!-- END LOADER -->

    <!-- PAGE -->
    <div class="page">

        <!-- HEADER -->

        @include('backend.layouts.header')

        @include('backend.layouts.sidebar')

        @yield('content')

        @include('backend.layouts.footer')









        <!-- END FOOTER -->

    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->

    <!-- SCROLL-TO-TOP -->
    <div class="scrollToTop">
        <span class="arrow lh-1"><i class="ti ti-caret-up fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- POPPER JS -->
    <script src="{{asset('backend/assest/build/assets/libs/%40popperjs/core/umd/popper.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('backend/assest/build/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- NODE WAVES JS -->
    <script src="{{asset('backend/assest/build/assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- SIMPLEBAR JS -->
    <script src="{{asset('backend/assest/build/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <link rel="modulepreload" href="{{asset('backend/assest/build/assets/simplebar-B35Aj-bA.js')}}" />
    <script type="module" src="{{asset('backend/assest/build/assets/simplebar-B35Aj-bA.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- PICKER JS -->
    <script src="{{asset('backend/assest/build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('backend/assest/build/assets/libs/%40simonwep/pickr/pickr.es5.min.js')}}"></script>

    <!-- AUTO COMPLETE JS -->
    <script src="{{asset('backend/assest/build/assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js')}}"></script>

    <!-- Apex Charts JS -->
    <script src="{{asset('backend/assest/build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Sales Dashboard -->
    <link rel="modulepreload" href="{{asset('backend/assest/build/assets/sales-dashboard-C66ZgfQ7.js')}}" />
    <script type="module" src="{{asset('backend/assest/build/assets/sales-dashboard-C66ZgfQ7.js')}}"></script>


    <!-- STICKY JS -->
    <script src="{{asset('backend/assest/build/assets/sticky.js')}}"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="{{asset('backend/assest/build/assets/app-L7SVdVWK.js')}}" />
    <script type="module" src="{{asset('backend/assest/build/assets/app-L7SVdVWK.js')}}"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <link rel="modulepreload" href="{{asset('backend/assest/build/assets/custom-switcher-jG6facXc.js')}}" />
    <script type="module" src="{{asset('backend/assest/build/assets/custom-switcher-jG6facXc.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
$(document).ready(function() {
$("#mySummernote").summernote(
  {  height:250, }
);
$('.dropdown-toggle').dropdown();
});
</script>
    <!-- END SCRIPTS -->
    
</body>

<!-- Mirrored from laravelui.spruko.com/mamix/index by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 06:44:40 GMT -->

</html>