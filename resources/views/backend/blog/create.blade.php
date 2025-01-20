@extends('backend.layouts.app')
@section('content')


<link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/quill/quill.bubble.css')}}">

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assest/build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">  
<div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::page-header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Blog Create</h1>
                            
                        </div>
                        
                    </div>
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <form action="/blog/store" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">New Blog</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="blog-title" class="form-label">Blog Title</label>
                                                <input type="text" class="form-control" id="blog-title" name="title" placeholder="Blog Title" required>
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
                                            <!-- <div class="col-xl-6">
                                                <label for="blog-author" class="form-label">Blog Author</label>
                                                <input type="text" class="form-control" id="blog-author" placeholder="Enter Name">
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="blog-author-email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="blog-author-email" placeholder="Enter Email">
                                            </div> -->
                                            <div class="col-xl-6">
                                                <label for="publish-date" class="form-label">Publish Date</label>
                                                <input type="text" class="form-control" name="date" id="publish-date" placeholder="Choose date" required>
                                            </div>
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
                                            <div class="col-xl-6">
                                                <label for="blog-tags" class="form-label">Blog Tags</label>
                                                <!-- <select class="form-control" name="tags[]" id="blog-tags" multiple required>
                                                    <option value="Learning" selected>Learning</option>
                                                    <option value="Online Class">Online&nbsp;Class</option>
                                                    <option value="3D Immersive Learning">3D&nbsp;Immersive&nbsp;Learning</option>
                                                    <option value="AI Teaching Tools">AI&nbsp;Teaching&nbsp;Tools</option>
                                                </select> -->
                                                <label for="blog-tags" class="form-label">Blog Tags</label>
                                                    <input type="text" id="tag-input" class="form-control" placeholder="Type and press enter to add tags" />
                                                    
                                                    <div id="tag-container" class="mt-2"></div>
                                                    
                                                    <input type="hidden" name="tags[]" id="tags-hidden">
                                            </div>
                                            <div class="col-xl-12">
                                                <label class="form-label">Blog Content</label><br>
                                                <label >Enter Atleast 100 Words.</label>
                                                        <!-- <div id="blog-content"></div> -->
                                                        <textarea rows="4" name="content" id="mySummernote" class="form-control" placeholder="Enter Atleast 100 Words" required></textarea>
                            
                                                
                                                
                                            </div>
                                            <div class="col-xl-12 blog-image1-container">
                                                <label for="blog-author-email" class="form-label">Blog Images</label>
                                                <input type="file" class="blog-image" name="image" required>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-list text-end">
                                            <button type="submit" class="btn btn-sm btn-primary">Post Blog</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <link rel="modulepreload" href="{{asset('backend/assest/build/assets/blog-create-DL4Zzd2H.js')}}" />
            <script type="module" src="{{asset('backend/assest/build/assets/blog-create-DL4Zzd2H.js')}}"></script>
            <script src="{{asset('backend/assest/build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Filepond JS -->
        <script src="{{asset('backend/assest/build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('backend/assest/build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>
        <script>
    const tagInput = document.getElementById('tag-input');
    const tagContainer = document.getElementById('tag-container');
    const hiddenInput = document.getElementById('tags-hidden');
    
    let tags = [];

    tagInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter' && tagInput.value.trim() !== '') {
            event.preventDefault();
            const tag = tagInput.value.trim();
            
            if (!tags.includes(tag)) {
                tags.push(tag);
                updateTags();
                tagInput.value = ''; // Clear input field
            }
        }
    });

    function updateTags() {
        tagContainer.innerHTML = ''; // Clear current displayed tags
        tags.forEach((tag) => {
            const tagElement = document.createElement('span');
            tagElement.classList.add('badge', 'bg-primary', 'me-1');
            tagElement.textContent = tag;
            tagElement.onclick = () => removeTag(tag); // Add remove functionality
            tagContainer.appendChild(tagElement);
        });
        hiddenInput.value = tags.join(','); // Set hidden input value for form submission
    }

    function removeTag(tag) {
        tags = tags.filter(t => t !== tag);
        updateTags();
    }
</script>

<style>
    .badge {
        padding: 0.5em;
        border-radius: 0.5em;
        cursor: pointer;
    }
</style>

@endsection