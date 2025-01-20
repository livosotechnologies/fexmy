@extends('backend.layouts.app')
@section('content')
<div class="main-content app-content">
            <div class="container-fluid">
<div class="table-responsive">
    <table class="table text-nowrap table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Tags</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @if ($blog->count() > 0)
        @foreach ($blog as $key => $blogs)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td><img src="{{ asset('storage/' . $blogs->image) }}"
                alt="Blogs Image" style="width: 100px;"></td>
                <td>{{ $blogs->title }}</td>
                <td>{!! Str::limit($blogs->content, 50) !!}</td>
                <td>{{ $blogs->date }}</td>
             <td>{{ implode(', ', json_decode($blogs->tags, true)) }}</td>
               
                <td>
                <div class="hstack gap-2 flex-wrap">
                        <a href="{{ route('blog.edit', $blogs->id) }}" class="text-info fs-14 lh-1"><i
                                class="ri-edit-line"></i></a>
                        <a href="{{ route('blog.delete', $blogs->id) }}" class="text-danger fs-14 lh-1"><i
                                class="ri-delete-bin-5-line"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7">
                    <h4>No Data Yet</h4>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
   
                         
                            <div class="mt-5">{{ $blog->links('pagination::bootstrap-5') }}</div>
                           
                    
</div>

            </div>
        </div>

@endsection