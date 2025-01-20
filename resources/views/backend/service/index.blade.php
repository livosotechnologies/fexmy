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
                        <th scope="col">Service&nbsp;Name</th>
                        <th scope="col">Service&nbsp;Details</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($services->count() > 0)
                    @foreach ($services as $key => $service)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><img src="{{ asset('storage/' . $service->image) }}"
                                alt="Service Image" style="width: 100px;"></td>
                        <td>{{ $service->service_name }}</td>
                        <td>{!! Str::limit($service->servce_detail, 50) !!}</td>
                       

                        <td>
                            <div class="hstack gap-2 flex-wrap">
                                <a href="{{ route('service.edit', $service->id) }}" class="text-info fs-14 lh-1"><i
                                        class="ri-edit-line"></i></a>
                                <a href="{{ route('service.delete', $service->id) }}" class="text-danger fs-14 lh-1"><i
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


            <div class="mt-5">{{ $services->links('pagination::bootstrap-5') }}</div>


        </div>

    </div>
</div>

@endsection