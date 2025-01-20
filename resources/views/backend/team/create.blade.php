@extends('backend.layouts.app')
@section('content')



<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start::page-header -->
        <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">Team Create</h1>

            </div>

        </div>
        <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <form action="/team/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">New Team</div>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="blog-title" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="blog-title" name="designation" placeholder="Designation" required>
                                </div>
                               
                                <div class="col-xl-6">
                                    <label for="facebook-url" class="form-label">Facebook URL</label>
                                    <input type="url" class="form-control" name="facebook" id="facebook-url" placeholder="Enter Facebook URL"
                                        pattern="https://www\.facebook\.com/.+" title="Please enter a valid Facebook URL">
                                </div>
                                <div class="col-xl-6">
                                    <label for="instagram-url" class="form-label">Instagram URL</label>
                                    <input type="url" class="form-control" name="instagram" id="instagram-url" placeholder="Enter Instagram URL"
                                        pattern="https://(www\.)?instagram\.com/.+" title="Please enter a valid Instagram URL">
                                </div>
                                <div class="col-xl-6">
                                    <label for="twitter-url" class="form-label">Twitter URL</label>
                                    <input type="url" class="form-control" name="twiter" id="twitter-url" placeholder="Enter Twitter URL"
                                        pattern="https://(www\.)?twitter\.com/.+" title="Please enter a valid Twitter URL">
                                </div>
                                <div class="col-xl-6">
                                    <label for="linkedin-url" class="form-label">LinkedIn URL</label>
                                    <input type="url" class="form-control" name="linkedin" id="linkedin-url" placeholder="Enter LinkedIn URL"
                                        pattern="https://(www\.)?linkedin\.com/.+" title="Please enter a valid LinkedIn URL">
                                </div>
                               
                                <div class="col-xl-12 blog-image1-container">
                                    <label for="blog-author-email" class="form-label">Insert Images Here</label>
                                    <input type="file" class="blog-image" name="image">
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