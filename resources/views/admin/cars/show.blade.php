@section('title', 'Show Car')
@extends('layouts.admin')


@section('content')

    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-container shadow-lg p-5 rounded bg-white">
                    <div class="d-flex align-items-center  mb-3 form-title text-center mb-4 font-weight-bold text-primary" style="font-size: 1.5rem;">
                        <a href="{{ route('admin.cars.index') }}" class="btn btn-sm btn-warning mr-auto">Car List</a>

                    </div>
                    <div class="bg-secondary p-5">
                        <form action="{{ route('admin.cars.show', ['id'=>$car->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="table-title font-weight-bold mx-auto">Turan Cars - {{$car->brand}}</div>

                                @if($car->image)
                                    <div class="col-md-12 my-4">
                                        <div class="form-group">
                                            <img src="{{Storage::url($car->image)}}" alt="{{$car->brand}}" width="500">
                                        </div>
                                    </div>
                                @endif

                            <div class="form-group my-4 d-flex ">
                                <div class="mx-5">
                                    <p>Mark</p>
                                    <h5>{{$car->brand}}</h5>
                                </div>
                                <div>
                                    <p>Model</p>
                                    <h5>{{$car->model}}</h5>
                                </div>
                                <div class="mx-5">
                                    <p>Color</p>
                                    <h5>{{$car->color}}</h5>
                                </div>
                                <div >
                                    <p>Year</p>
                                    <h5>{{$car->year}}</h5>
                                </div>
                                <div class="mx-5">
                                    <p>Status</p>
                                    <h5>{{$car->status}}</h5>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
@endsection
