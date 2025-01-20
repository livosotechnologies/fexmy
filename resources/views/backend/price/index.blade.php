@extends('backend.layouts.app')
@section('content')
<div class="main-content app-content">
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table text-nowrap table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Service&nbsp;Name</th>
                        <th scope="col">Sub-Service&nbsp;Name</th>
                        <th scope="col">Service&nbsp;Type</th>
                        <th scope="col">Details</th>
                        <th scope="col">Price</th>
                        <th scope="col">Features</th>
                        <th scope="col">Quotation</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($prices->count() > 0)
                    @foreach ($prices as $key => $price)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $price->service_name }}</td>
                        <td>{{ $price->sub_service_name }}</td>
                        <td>{{ $price->service_type }}</td>
                        <td>{!! Str::limit($price->description, 30) !!}</td>
                        <td>₹&nbsp;{{ $price->price }}</td>
                        <td>@foreach(json_decode($price->points, true) as $point)
                                <div>{{ $point }}</div>
                            @endforeach
                        </td>
                        <td><a href="{{ asset('storage/' . $price->quotation) }}" target="_blank" class="btn btn-primary">View Quotation</a></td>
                        <td>
                            <div class="hstack gap-2 flex-wrap">
                                <a href="{{ route('price.edit', $price->id) }}" class="text-info fs-14 lh-1"><i
                                        class="ri-edit-line"></i></a>
                                <a href="{{ route('price.delete', $price->id) }}" class="text-danger fs-14 lh-1"><i
                                        class="ri-delete-bin-5-line"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="9">
                            <h4>No Data Yet</h4>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>


            <div class="mt-5">{{ $prices->links('pagination::bootstrap-5') }}</div>


        </div>

    </div>
</div>

@endsection