@extends('backend.layouts.app')
@section('content')



<div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Edit Banner</h1>
                            
                        </div>
                        
                    </div>
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Edit Banner</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="blog-title" class="form-label">Banner Title</label>
                                                <input type="text" class="form-control" id="blog-title" name="title" value="{{$banner->title}}">
                                            </div>
                                            <!-- <div class="col-xl-12">
                                                <label for="blog-category" class="form-label">Blog Category</label>
                                                <select class="form-control" data-trigger name="blog-category" id="blog-category">
                                                    <option value="">Select Category</option>
                                                    <option value="Choice 1">Nature</option>
                                                    <option value="Choice 2">Sports</option>
                                                    <option value="Choice 3">Food</option>
                                                    <option value="Choice 3">Travel</option>
                                                    <option value="Choice 3">Fashion</option>
                                                    <option value="Choice 3">Beauty</option>
                                                </select>
                                            </div> -->
                                            <div class="col-xl-12">
                                                <label for="blog-author" class="form-label">Sub&nbsp;Title</label>
                                                <input type="text" class="form-control" id="blog-author" name="sub_title" value="{{$banner->sub_title}}">
                                            </div>
                                            <!-- <div class="col-xl-6">
                                                <label for="blog-author-email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="blog-author-email" placeholder="Enter Email">
                                            </div> -->
                                            <!-- <div class="col-xl-6">
                                                <label for="publish-date" class="form-label">Publish Date</label>
                                                <input type="text" class="form-control" name="date" id="publish-date" value="">
                                            </div> -->
                                            <!-- <div class="col-xl-6">
                                                <label for="publish-time" class="form-label">Publish Time</label>
                                                <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                                            </div> -->
                                            <!-- <div class="col-xl-6">
                                                <label for="product-status-add" class="form-label">Published Status</label>
                                                <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                                    <option value="">Select</option>
                                                    <option value="Published">Published</option>
                                                    <option value="Scheduled">Hold</option>
                                                </select>
                                            </div> -->
                                            <!-- <div class="col-xl-6">
                                                <label for="blog-tags" class="form-label">Blog Tags</label>
                                                <select class="form-control" name="tags" id="blog-tags" multiple>
                                                <option value="" selected></option>
                                                    <option value="Learning">Learning</option>
                                                    <option value="Online Class">Online&nbsp;Class</option>
                                                    <option value="3D Immersive Learning">3D&nbsp;Immersive&nbsp;Learning</option>
                                                    <option value="AI Teaching Tools" selected>AI&nbsp;Teaching&nbsp;Tools</option>
                                                </select>
                                            </div> -->
                                            <!-- <div class="col-xl-12">
                                                <label class="form-label">Blog Content</label>
                                          
                                                        <div id="blog-content"></div>
                                                        <textarea rows="4" name="description" id="mySummernote" value="" class="form-control" ></textarea>
                            
                                                
                                                
                                            </div> -->
                                            <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image" style="width: 100px;">
                                            <div class="col-xl-12 blog-image1-container">
                                                <label for="blog-author-email" class="form-label">Banner Images</label>
                                                <input type="file" class="blog-image" value="{{$banner->image}}" name="image" >
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-list text-end">
                                            <button type="submit" class="btn btn-sm btn-primary">Update Banner</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

          


@endsection