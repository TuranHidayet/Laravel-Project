@section('title', 'Cars')

@extends('layouts.app')

@section('customCss')
    <style>



    </style>
@endsection


@section('content')

    <div class="site-section bg-light mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>Cars</strong></h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>


            <div class="row mt-5">

                @foreach($cars as $car)
                    <div class="col-md-6 col-lg-4 mb-4 my-5">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{Storage::url($car->image)}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3 class="brand">{{$car->brand}} {{$car->model}}</h3>
                                <div class="rent-price">
                                    <strong>${{$car->price}}</strong><span class="mx-1">/</span>day
                            </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3 year">
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Year:</span>
                                        <span class="number">{{$car->year}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Color:</span>
                                        <span class="number">{{$car->color}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Available:</span>
                                        <span class="number">{{$car->status}}</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <p><a href="{{ route('app.car', ['id'=>$car->id]) }}" class="btn btn-info btn-sm">Details</a></p>
                                    <p><a href="#" class="btn btn-success btn-sm ml-4">Rent Now</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                 @endforeach
            </div>

            <div class="row mt-5">
                <div class="col">
                    <div class="custom-pagination">
                        @include('front.partials.paginate', ['paginator' => $cars])
                    </div>
                </div>
            </div>

        </div>
@endsection


