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
                        <th scope="col">Sub Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($portfolios->count() > 0)
                    @foreach ($portfolios as $key => $portfolio)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><img src="{{ asset('storage/' . $portfolio->image) }}"
                                alt="Portfolio Image" style="width: 100px;"></td>
                        <td>{{ $portfolio->title }}</td>
                        <td>{{ $portfolio->sub_title }}</td>
                        <td>{!! Str::limit($portfolio->description, 50) !!}</td>
                        
                        <td>
                            <div class="hstack gap-2 flex-wrap">
                                <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="text-info fs-14 lh-1"><i
                                        class="ri-edit-line"></i></a>
                                <a href="{{ route('portfolio.delete', $portfolio->id) }}" class="text-danger fs-14 lh-1"><i
                                        class="ri-delete-bin-5-line"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6">
                            <h4>No Data Yet</h4>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>


            <div class="mt-5">{{ $portfolios->links('pagination::bootstrap-5') }}</div>


        </div>

    </div>
</div>

@endsection