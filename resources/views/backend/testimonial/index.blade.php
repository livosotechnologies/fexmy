@extends('backend.layouts.app')
@section('content')
<div class="main-content app-content">
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table text-nowrap table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($testimonial->count() > 0)
                    @foreach ($testimonial as $key => $testi)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $testi->name }}</td>
                        <td>{{ $testi->email }}</td>
                        <td>{{ $testi->testimonial }}</td>
                        
                        <td>
                            <div class="hstack gap-2 flex-wrap">
                                <a href="{{ route('testi.delete', $testi->id) }}" class="text-danger fs-14 lh-1"><i
                                        class="ri-delete-bin-5-line"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5">
                            <h4>No Data Yet</h4>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>


            <div class="mt-5">{{ $testimonial->links('pagination::bootstrap-5') }}</div>


        </div>

    </div>
</div>

@endsection