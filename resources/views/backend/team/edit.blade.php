@extends('backend.layouts.app')
@section('content')



<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start::page-header -->
        <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">Team Update</h1>

            </div>

        </div>
        <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <form action="{{ route('team.update', $team->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Edit Team</div>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="blog-title" value="{{$team->name}}" name="name">
                                </div>
                                <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="blog-title" value="{{$team->designation}}" name="designation">
                                </div>
                               
                                <div class="col-xl-6">
                                    <label for="facebook-url" class="form-label">Facebook URL</label>
                                    <input type="url" class="form-control" name="facebook" value="{{$team->facebook}}" id="facebook-url"
                                        pattern="https://www\.facebook\.com/.+" title="Please enter a valid Facebook URL">
                                </div>
                                <div class="col-xl-6">
                                    <label for="instagram-url" class="form-label">Instagram URL</label>
                                    <input type="url" class="form-control" name="instagram" value="{{$team->instagram}}" id="instagram-url"
                                        pattern="https://(www\.)?instagram\.com/.+" title="Please enter a valid Instagram URL">
                                </div>
                                <div class="col-xl-6">
                                    <label for="twitter-url" class="form-label">Twitter URL</label>
                                    <input type="url" class="form-control" name="twiter" value="{{$team->twiter}}" id="twitter-url"
                                        pattern="https://(www\.)?twitter\.com/.+" title="Please enter a valid Twitter URL">
                                </div>
                                <div class="col-xl-6">
                                    <label for="linkedin-url" class="form-label">LinkedIn URL</label>
                                    <input type="url" class="form-control" name="linkedin" value="{{$team->linkedin}}" id="linkedin-url"
                                        pattern="https://(www\.)?linkedin\.com/.+" title="Please enter a valid LinkedIn URL">
                                </div>
                                <img src="{{ asset('storage/' . $team->image) }}" alt="Team Image" style="width: 100px;">
                                <div class="col-xl-12 blog-image1-container">
                                    <label for="blog-author-email" class="form-label">Insert Images Here</label>
                                    <input type="file" class="blog-image" value="{{$team->image}}" name="image">
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-list text-end">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>



@endsection