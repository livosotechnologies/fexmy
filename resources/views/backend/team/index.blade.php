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
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Facebook URL</th>
                        <th scope="col">Instagram URL</th>
                        <th scope="col">Twiter URL</th>
                        <th scope="col">Linkedin URL</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($teams->count() > 0)
                    @foreach ($teams as $key => $team)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><img src="{{ asset('storage/' . $team->image) }}"
                                alt="Teams Image" style="width: 100px;"></td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->designation }}</td>
                        <td>
                            @if($team->facebook)
                                <a href="{{ $team->facebook }}" target="_blank" class="btn btn-primary">Facebook</a>
                            @else
                                <span>NONE</span> 
                            @endif
                        </td>
                        <td>
                            @if($team->instagram)    
                                <a href="{{$team->instagram}}" target="_blank" class="btn btn-primary">Instagram</a>
                            @else
                                <span>NONE</span> 
                            @endif
                        </td>
                        <td>
                            @if($team->twiter)    
                                <a href="{{$team->twiter}}" target="_blank" class="btn btn-primary">Twiter</a>
                            @else
                                <span>NONE</span>
                            @endif
                        </td> 
                        <td>
                            @if($team->linkedin)    
                                <a href="{{$team->linkedin}}" target="_blank" class="btn btn-primary">Linkedin</a>
                            @else
                            <span>NONE</span>
                            @endif
                        </td>
                        <td>
                            <div class="hstack gap-2 flex-wrap">
                                <a href="{{ route('team.edit', $team->id) }}" class="text-info fs-14 lh-1"><i
                                        class="ri-edit-line"></i></a>
                                <a href="{{ route('team.delete', $team->id) }}" class="text-danger fs-14 lh-1"><i
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


            <div class="mt-5">{{ $teams->links('pagination::bootstrap-5') }}</div>


        </div>

    </div>
</div>

@endsection