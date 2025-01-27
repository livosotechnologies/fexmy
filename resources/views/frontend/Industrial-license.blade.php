@extends('frontend.layouts.app')
@section('content')

<style>
     .custom-heading {
            color: #ff8202;
            margin-bottom: 1.5rem;
            font-weight: bold;
        }   
        .text-content {
            color: #333333;
        }
        .text-muted {
            color: #666666 !important;
        }
        a {
            color: #0056b3;
            text-decoration: none;
        }
        a:hover {
            color: #003366;
            text-decoration: underline;
        }
        .process-card {
            transition: transform 0.3s ease;
            border-color: #ff8202;
        }
        .process-card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            color: #ff8202 !important;
        }
        .alert-custom {
            background-color: #fff3e6;
            border-color: #ff8202;
            color: #333333;
        }
    </style>

<style>
        :root {
            --primary-orange: #ff8202;
            --dark-text: #333333;
            --light-gray: #f8f9fa;
        }        
        .custom-heading {
            color: var(--primary-orange);
            font-weight: 700;
            position: relative;
            padding-bottom: 10px;
        }
        
        .custom-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-orange);
        }
        
        .feature-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            background: var(--light-gray);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .step-number {
            background: var(--primary-orange);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        
        .info-box {
            background: rgba(255, 130, 2, 0.1);
            border-left: 4px solid var(--primary-orange);
            padding: 20px;
            border-radius: 0 10px 10px 0;
            margin: 20px 0;
        }
        
        .nav-pills .nav-link.active {
            background-color: var(--primary-orange);
        }
        
        .nav-pills .nav-link {
            color: var(--dark-text);
        }
    </style>

<div class="container py-5 mt-4">
        <!-- Hero Section -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 mb-4 custom-heading">What Is An Industrial License In Dubai?</h1>
                <div class="info-box text-start mb-5">
                    <p class="lead mb-0">
                        Dubai Industrial Trade License is issued to organizations that convert natural resources or alter raw materials into manufactured products.
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="feature-card h-100 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-industry fa-2x me-3" style="color: var(--primary-orange)"></i>
                        <h3 class="h4 mb-0">License Overview</h3>
                    </div>
                    <p class="text-muted">
                        These activities mainly imply production, segregating, accumulation, packaging, etc. Industrial trade license obligates the company to have a physical warehouse inside the country.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card h-100 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-warehouse fa-2x me-3" style="color: var(--primary-orange)"></i>
                        <h3 class="h4 mb-0">Requirements</h3>
                    </div>
                    <p class="text-muted">
                        If you need to know more about obtaining an industrial license in the UAE call Shuraa Business Setup.
                    </p>
                </div>
            </div>
        </div>

        <!-- Process Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="custom-heading mb-5">HOW TO GET AN INDUSTRIAL LICENSE IN DUBAI?</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="step-number">1</div>
                                <h3 class="h5 mb-3">Collaborate with a business licensing expert</h3>
                                <p class="text-muted">
                                    If you're considering applying for an industrial license in the UAE, the first step is to find a 
                                    <a href="#" class="text-decoration-none">business formation expert</a> you can trust to manage the procedure on your behalf.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="step-number">2</div>
                                <h3 class="h5 mb-3">Secure administrative approvals</h3>
                                <p class="text-muted">
                                    If you want to open a factory to run your business, you must first obtain approval from the right authorities. This step may be simplified if operating in a free economic zone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center p-5">
                        <h3 class="mb-4">Need Help Getting Started?</h3>
                        <p class="text-muted mb-4">Contact our experts for guidance on obtaining your industrial license</p>
                        <a href="/contacts" class="btn btn-lg px-5" style="background-color: var(--primary-orange); color: white;">
                            Contact Us
    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="rs-about pt-100  md-pt-70 md-pb-70" style="background-color:#ff8202;">
    <div class="container custom pb-50">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12  md-pl-15 m-auto scrollable-col">
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="images-part noimg ">
                            <img src="frontend/assets/img/service/no1.webp" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 ">

                        <h3 class="text-white">Choose a business name
                        </h3>
                        <p class="mt-3 text-white">
                            Plan and thoroughly study your business nature before choosing the best free zone for your
                            sector.
                        </p>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="images-part noimg">
                            <img src="frontend/assets/img/service/no2.webp" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h3 class="text-white">Define your legal structure
                        </h3>
                        <p class="mt-3 text-white">
                            Create a comprehensive business setup plan that details your goals, strategic thinking, and
                            projected financials.
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="images-part noimg">
                            <img src="frontend/assets/img/service/no3.webp" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h3 class="text-white">Define your business activities
                        </h3>
                        <p class="mt-3 text-white">
                            Make a decision on an original company name, then reserve it with the selected free zone.
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="images-part noimg">
                            <img src="frontend/assets/img/service/no4.png" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h3 class="text-white">

                            Complete the application form

                        </h3>
                        <p class="mt-3 text-white">
                            Find the necessary facilities and workspace for your company's activities.
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="images-part noimg">
                            <img src="frontend/assets/img/service/no5.webp" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h3 class="text-white">Get additional approvals

                        </h3>
                        <p class="mt-3 text-white">
                            Establish the number of people your company will require and make plans for their hiring.
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="images-part noimg">
                            <img src="frontend/assets/img/service/no6.webp" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h3 class="text-white">Gather the required documents
                        </h3>
                        <p class="mt-3 text-white">
                            Fund the appropriate bank account with the minimum capital the authorities have mandated.
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="images-part noimg">
                            <img src="frontend/assets/img/service/no7.webp" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h3 class="text-white">Submit your application

                        </h3>
                        <p class="mt-3 text-white">
                            Complete your business's registration and licensing procedures with the appropriate
                            authorities.
                        </p>
                    </div>


                </div>
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="images-part noimg">
                            <img src="frontend/assets/img/service/no8.webp" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <h6 class="text-white">Pay the license fees
                        </h6>
                        <p class="mt-3 text-white">
                            Sign the formation documents in front of free zone officials, whether they are an
                            individual, a corporation, or both.
                        </p>
                    </div>

                </div>


            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 md-mb-50 m-auto rounded"
                style="background-color:#c36300;border-radius:6px;box-shadow: rgb(0 0 0 / 25%) 0px 50px 100px -20px, rgb(255 0 0 / 30%) 0px 30px 60px -30px, rgb(0 0 0 / 35%) 0px -2px 6px 0px inset;">

                <div class="m-4" style="">@include('frontend/commonform')
                </div>

            </div>

        </div>

    </div>

</div>







<div class="container py-5">
        <!-- Hero Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="custom-heading display-4">Cost Of Industrial-license In Dubai</h1>
                <div class="card shadow-sm">
                    <div class="card-body text-content">
                        <p class="lead mb-4">In Dubai, the fees for obtaining a Industrial-license vary depending on the specific business activity and individual requirements. We can provide an overview of the general charges to help you understand the total cost.</p>
                        <div class="alert alert-custom">
                            <strong>The license fee starts at AED 12,000*</strong>
                            <p class="mb-0">Other expenses, such as license translation fees, Visa fee, may also apply.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Renewal Process Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="custom-heading">How To Renew Your Dubai Industrial Trade License</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 process-card shadow-sm">
                            <div class="card-body text-content">
                                <h5 class="card-title">1. Check Your Tenancy Contract</h5>
                                <p class="card-text">Your tenancy contract must be valid for at least one month after your Trade License expiration date.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 process-card shadow-sm">
                            <div class="card-body text-content">
                                <h5 class="card-title">2. Submit Your Renewal Application</h5>
                                <ul class="list-unstyled">
                                    <li>✓ Copy of your tenancy contract</li>
                                    <li>✓ Copy of your current Trade License</li>
                                    <li>✓ Passport copies of all business partners</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 process-card shadow-sm">
                            <div class="card-body text-content">
                                <h5 class="card-title">3. Pay the Renewal Fee</h5>
                                <p class="card-text">Once your documents are approved, you'll receive a DED voucher to pay the renewal fee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="row">
            <div class="col-12">
                <h2 class="custom-heading">Get Your Industrial-license In Dubai With Ease</h2>
                <div class="card shadow-sm">
                    <div class="card-body text-content">
                        <p class="mb-4">If you're <a href="#">planning to start a business in the UAE</a>, you can rely on Shuraa for assistance.</p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-light p-3 rounded-circle me-3">
                                        <i class="fas fa-check" style="color: #ff8202;"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title">Professional Support</h5>
                                        <p class="text-muted">Our team of experienced professionals will take care of the entire license application process.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-light p-3 rounded-circle me-3">
                                        <i class="fas fa-shield-alt" style="color: #ff8202;"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title">Comprehensive Services</h5>
                                        <p class="text-muted">We handle all administrative tasks so that you can focus on running your business smoothly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


