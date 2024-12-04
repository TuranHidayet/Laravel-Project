@section('title', 'Cars')

@extends('layouts.app')
@section('customCss')
    <style>

        .car-image-container {
            max-height: 400px;
            overflow: hidden;
            margin-top: 100px;
        }

        .car-image-container img {
            width: 500px;
            min-height: 500px;
            /*object-fit: cover;*/
        }

        .car-details-container{
            margin-top: 100px;
            margin-left: 30px;

        }

        .car-details-container ul li {
            margin-bottom: 10px;

            font-size: 16px;
        }

        .car-description-container {
            border: 1px solid #ddd;
        }

        .car-description-container p {
            font-size: 14px;
            color: #555;
        }
    </style>
@endsection
@section('content')

    <div class="container my-5">
        <div class="row">
            <!-- Car Image -->
            <div class="col-lg-6">
                <div class="car-image-container">
                    <img src="{{Storage::url($car->image)}}" alt="Car Image" class="img-fluid rounded shadow">
                </div>
            </div>

            <!-- Car Details -->
            <div class="col-lg-6">
                <div class="car-details-container">
                    <h2 class="mb-3 font-weight-bold">Car Details</h2>
                    <ul class="list-unstyled">
                        <li><strong>Brand:</strong> <span id="car-brand">{{$car->brand}}</span></li>
                        <li><strong>Model:</strong> <span id="car-model">{{$car->model}}</span></li>
                        <li><strong>Year:</strong> <span id="car-year">{{$car->year}}</span></li>
                        <li><strong>Color:</strong> <span id="car-color">{{$car->color}}</span></li>
                        <li><strong>Price:</strong> <span id="car-status">{{$car->price}} $</span></li>
                        <li><strong>Status:</strong> <span id="car-price">{{$car->status}}</span></li>
                    </ul>
                    <div class="d-flex mt-5">
                        <p><a href="{{ route('app.cars', ['id'=>$car->id]) }}" class="btn btn-info btn-sm"> Cars</a></p>
                        <p><a href="#" class="btn btn-success btn-sm ml-4">Rent Now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Car Description -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="car-description-container p-4 bg-light rounded shadow">
                    <h3 class="font-weight-bold mb-3">Car Description</h3>
                    <p id="car-description">
                        This car is a perfect blend of luxury and performance. Equipped with the latest technology and designed for comfort, it offers an unparalleled driving experience. Ideal for both city drives and long journeys.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection



