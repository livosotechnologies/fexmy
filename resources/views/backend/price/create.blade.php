@extends('backend.layouts.app')
@section('content')



<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start::page-header -->
        <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">Create Price</h1>

            </div>

        </div>
        <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <form action="/price/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">New Price</div>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <!-- <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Blog Title</label>
                                    <input type="text" class="form-control" id="blog-title" name="title" placeholder="Blog Title" required>
                                </div> -->
                                <div class="col-xl-12">
                                    <label for="service-name" class="form-label">Service Name</label>
                                    <select class="form-control" name="service_name" id="service-name" required>
                                        <option value="">Select Service Name</option>
                                        @foreach($prices as $price)
                                        <option value="{{ $price->service_name }}">{{ $price->service_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-12">
                                    <label for="sub-service-name" class="form-label">Sub-Service Name</label>
                                    <select class="form-control" name="sub_service_name" id="sub-service-name" required>
                                        <option value="">Select Sub-Service Name</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                <label for="service-type" class="form-label">Service Type</label>
                                    <input type="text" class="form-control" name="service_type" id="publish-time" placeholder="Service Type" required>
                                </div>
                                <div class="col-xl-6">
                                <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" id="publish-time" placeholder="Enter Price" required>
                                </div>
                               
                                <div class="col-xl-12">
                                    <label class="form-label">Price Details</label>
                                    <textarea rows="4" name="description" id="mySummernote" class="form-control" placeholder="Enter some Details" required></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <label for="tag-input" class="form-label">Features</label>
                                    <input type="text" id="tag-input" class="form-control" placeholder="Type and press enter to add Features" />

                                    <div id="tag-container" class="mt-2"></div>

                                    <input type="hidden" name="points[]" id="tags-hidden">
                                </div>
                                <div class="col-xl-12 blog-image1-container">
                                    <label for="blog-author-email" class="form-label">Upload Quotation (PDF only)</label>
                                    <input type="file" class="blog-image" name="quotation" required>
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

<script>
    document.getElementById('service-name').addEventListener('change', function() {
        var serviceName = this.value;
        var subServiceDropdown = document.getElementById('sub-service-name');

        // Clear the dropdown
        subServiceDropdown.innerHTML = '<option value="">Select Sub-Service Name</option>';

        if (serviceName) {
            fetch('/get-sub-services/' + serviceName)
                .then(response => response.json())
                .then(data => {
                    data.forEach(subService => {
                        var option = document.createElement('option');
                        option.value = subService.sub_service_name;
                        option.textContent = subService.sub_service_name;
                        subServiceDropdown.appendChild(option);
                    });
                })
                .catch(error => console.error('Error:', error));
        }
    });
</script>
<script>
    const tagInput = document.getElementById('tag-input');
    const tagContainer = document.getElementById('tag-container');
    const hiddenInput = document.getElementById('tags-hidden');

    let points = [];

    tagInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter' && tagInput.value.trim() !== '') {
            event.preventDefault();
            const tag = tagInput.value.trim();

            if (!points.includes(tag)) {
                points.push(tag);
                updateTags();
                tagInput.value = ''; // Clear input field
            }
        }
    });

    function updateTags() {
        tagContainer.innerHTML = ''; // Clear current displayed tags
        points.forEach((tag) => {
            const tagElement = document.createElement('span');
            tagElement.classList.add('badge', 'bg-primary', 'me-1');
            tagElement.textContent = tag;
            tagElement.onclick = () => removeTag(tag); // Add remove functionality
            tagContainer.appendChild(tagElement);
        });
        hiddenInput.value = points.join(','); // Set hidden input value for form submission
    }

    function removeTag(tag) {
        points = points.filter(t => t !== tag);
        updateTags();
    }
</script>

<style>
    .badge {
        display: inline-block;
        padding: 0.5em 1em;
        margin: 2px;
        border-radius: 0.5em;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    .badge:hover {
        background-color: #0056b3;
    }
</style>

@endsection