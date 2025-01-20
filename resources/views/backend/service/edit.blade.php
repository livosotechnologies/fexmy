@extends('backend.layouts.app')
@section('content')



<div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Service Update</h1>
                            
                        </div>
                        
                    </div>
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Edit Service</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="blog-title" class="form-label">Service Name</label>
                                                <input type="text" class="form-control" id="blog-title" value="{{$service->service_name}}" name="service_name" placeholder="Service Name" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="blog-title" class="form-label">Service Details</label>
                                                <input type="text" class="form-control" id="blog-title" value="{{$service->servce_detail}}" name="servce_detail" placeholder="Service Details" required>
                                            </div>
                                           
                                            <img src="{{ asset('storage/' . $service->image) }}" alt="Blog Image" style="width: 100px;">
                                            
                                            <div class="col-xl-12 blog-image1-container">
                                                <label for="blog-author-email" class="form-label">Service Images</label>
                                                <input type="file" class="blog-image" value="{{$service->image}}" name="image">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-list text-end">
                                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

           
       

@endsection