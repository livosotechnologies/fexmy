@extends('backend.layouts.app')
@section('content')



<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start::page-header -->
        <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">Update Price</h1>

            </div>

        </div>
        <!-- End::page-header -->
       
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <form action="{{ route('price.update', $price->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Edit Price</div>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <!-- <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Blog Title</label>
                                    <input type="text" class="form-control" id="blog-title" name="title" placeholder="Blog Title" required>
                                </div> -->
                                 <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Service Name</label>
                                    <input type="text" class="form-control" id="blog-title" value="{{$price->service_name}}" name="service_name" readonly>
                                </div>

                                <div class="col-xl-12">
                                    <label for="blog-title" class="form-label">Sub Service Name</label>
                                    <input type="text" class="form-control" id="blog-title" value="{{$price->sub_service_name}}" name="sub_service_name" readonly>
                                </div>
                                <div class="col-xl-6">
                                <label for="service-type" class="form-label">Service Type</label>
                                    <input type="text" class="form-control" name="service_type" value="{{$price->service_type}}" id="publish-time" required>
                                </div>
                                <div class="col-xl-6">
                                <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" id="publish-time" value="{{$price->price}}" placeholder="Enter Price" required>
                                </div>
                               
                                <div class="col-xl-12">
                                    <label class="form-label">Price Details</label>
                                    <textarea rows="4" name="description" id="mySummernote" value="{{$price->description}}" class="form-control" placeholder="Enter some Details" required>{{$price->description}}</textarea>
                                </div>
                                <div class="col-xl-12">
                                    <label for="tag-input" class="form-label">Features</label>
                                    <input type="text" id="tag-input" class="form-control" placeholder="Type and press enter to add tags" />

                                    <div id="tag-container" class="mt-2 d-flex flex-wrap">
                                        @foreach ($price->points as $point)
                                            <span class="badge bg-primary me-1" style="cursor: pointer;" onclick="removeTag('{{$point}}')">{{$point}}</span>
                                        @endforeach
                                    </div>

                                    <input type="hidden" name="points[]" id="tags-hidden" value="{{ implode(',', $price->points) }}">
                                </div>
                                <label for="">
                                    <a href="{{ asset('storage/' . $price->quotation) }}" target="_blank" class="btn btn-primary">
                                        View Quotation
                                    </a>
                                </label>
                                <div class="col-xl-12 blog-image1-container">
                                    <label for="blog-author-email" class="form-label">Upload Quotation (PDF only)</label>
                                    <input type="file" value="{{$price->description}}" class="blog-image" name="quotation">
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

    // Initialize tags from existing points
    let points = @json($price->points); 

    // Function to update the tag display and hidden input
    function updateTags() {
        tagContainer.innerHTML = ''; // Clear current displayed tags

        // Display all tags as badges
        points.forEach((tag) => {
            const tagElement = document.createElement('span');
            tagElement.classList.add('badge', 'bg-primary', 'me-1');
            tagElement.textContent = tag;
            // Add event listener for removing the tag
            tagElement.onclick = function() {
                removeTag(tag); // Call removeTag with the specific tag
            };
            tagContainer.appendChild(tagElement);
        });

        // Update hidden input field with comma-separated tags
        hiddenInput.value = points.join(',');
    }

    // Function to add a tag
    tagInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter' && tagInput.value.trim() !== '') {
            event.preventDefault();
            const tag = tagInput.value.trim();

            // Add tag if it does not already exist
            if (!points.includes(tag)) {
                points.push(tag);
                updateTags();
                tagInput.value = ''; // Clear input field
            }
        }
    });

    // Function to remove a tag
    function removeTag(tag) {
        // Remove tag from the array
        points = points.filter(t => t !== tag);
        updateTags(); // Update the displayed tags
    }

    // Initial update to show existing tags
    updateTags();
</script>

<style>
    .badge {
        padding: 0.5em;
        border-radius: 0.5em;
        cursor: pointer;
    }
</style>


@endsection