@section('title', 'Car List')
@extends('layouts.admin')

@section('content')

    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-container">
                    <div class="d-flex align-items-center  mb-3">
                        <a href="{{ route('admin.service.create') }}" class="btn btn-sm btn-warning mr-auto">Create</a>
                        <div class="table-title font-weight-bold mx-auto">Turan Cars - Service</div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $key=>$service)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$service->name}}</td>

                                <td>
                                    @if($service->status)
                                        <span class="badge badge-pill badge-success">Active</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">No Active</span>
                                    @endif
                                </td>

                                <td class="d-flex column-gap-2">
                                    <a href="{{ route('admin.service.edit', ['id'=>$service->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('admin.service.destroy', ['id'=>$service->id]) }}" onclick="confirm('Are you sure to delete this car?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>



    <x-admin.alert/>
@endsection
