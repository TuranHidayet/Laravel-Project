@section('title', 'Car List')
@extends('layouts.admin')

@section('content')

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-container">
                    <div class="d-flex align-items-center  mb-3">
                        <a href="{{ route('admin.cars.create') }}" class="btn btn-sm btn-warning mr-auto">Create</a>
                        <div class="table-title font-weight-bold mx-auto">Turan Cars - Avtomobil Siyahısı</div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Color</th>
                            <th>Price ($)</th>
                            <th>Status</th>
                            <th>Əməliyyatlar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $key=>$car)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{Storage::url($car->image)}}" alt="{{$car->brand}}" width="100" height="70"></td>
                            <td>{{$car->brand}}</td>
                            <td>{{$car->model}}</td>
                            <td>{{$car->year}}</td>
                            <td>{{$car->color}}</td>
                            <td>{{$car->price}}</td>
                            <td>
                                @if($car->status)
                                    <span class="badge badge-pill badge-success">Available</span>
                                @else
                                    <span class="badge badge-pill badge-danger">Not Available</span>
                                @endif
                            </td>
                            <td class="d-flex column-gap-2">
                                <a href="{{ route('admin.cars.show', ['id'=>$car->id]) }}" class="btn btn-sm btn-info">Show</a>
                                <a href="{{ route('admin.cars.edit', ['id'=>$car->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('admin.cars.destroy', ['id'=>$car->id]) }}" onclick="confirm('Are you sure to delete this car?')" class="btn btn-sm btn-danger">Delete</a>
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
