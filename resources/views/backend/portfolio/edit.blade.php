@extends('backend.layouts.app')
@section('content')



<div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Portfolio Update</h1>
                            
                        </div>
                        
                    </div>
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <form action="{{ route('portfolio.update', $portfolio->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">New Portfolio</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="blog-title" class="form-label">Portfolio Title</label>
                                                <input type="text" class="form-control" id="blog-title" value="{{$portfolio->title}}" name="title">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="blog-title" class="form-label">Portfolio Sub Title</label>
                                                <input type="text" class="form-control" id="blog-title" name="sub_title" value="{{$portfolio->sub_title}}" >
                                            </div>
                                           
                                           
                                            <div class="col-xl-12">
                                                <label class="form-label">Portfolio Description</label><br>
                                                      
                                                        <textarea rows="4" name="description" id="mySummernote" value="{{$portfolio->description}}" class="form-control">{{$portfolio->description}}</textarea>
                            
                                            </div>
                                            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Portfolio Image" style="width: 100px;">

                                            <div class="col-xl-12 blog-image1-container">
                                                <label for="blog-author-email" class="form-label">Portfolio Images</label>
                                                <input type="file" class="blog-image" value="{{$portfolio->image}}" name="image">
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