@section('title', 'Home')


@extends('layouts.app')

@section('customCss')
    <style>

    </style>
@endsection

@section('content')


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>






        <div class="hero" style="background-image: url({{Storage::url($setting->slider_image)}});">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10">

                        <div class="row mb-5">
                            <div class="col-lg-7 intro">
                                <h1><strong>Rent a car</strong> is within your finger tips.</h1>
                            </div>
                        </div>

                        <form class="trip-form">

                            <div class="row align-items-center">

                                <div class="mb-3 mb-md-0 col-md-3">
                                    <select name="" id="" class="custom-select form-control">
                                        <option value="">Select Type</option>
                                        <option value="">Ferrari</option>
                                        <option value="">Toyota</option>
                                        <option value="">Ford</option>
                                        <option value="">Lamborghini</option>
                                    </select>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <div class="form-control-wrap">
                                        <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                                        <span class="icon icon-date_range"></span>

                                    </div>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <div class="form-control-wrap">
                                        <input type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3">
                                        <span class="icon icon-date_range"></span>
                                    </div>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>



        <div class="site-section">
            <div class="container">


                <div class="row mb-5">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>1</span>
                            <div class="step-inner">
                                <span class="number text-primary">01.</span>
                                <h3>Select a car</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>2</span>
                            <div class="step-inner">
                                <span class="number text-primary">02.</span>
                                <h3>Fill up form</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>3</span>
                            <div class="step-inner">
                                <span class="number text-primary">03.</span>
                                <h3>Payment</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <a href="https://www.facebook.com/nevalcarrental/videos/neval-rent-a-car-auto-detailing-has-specialized-tools-and-knowledgeable-staff-to/344897846756772/" class="d-flex align-items-center play-now mx-auto">
                <span class="icon">
                  <span class="icon-play"></span>
                </span>
                            <span class="caption">Video how it works</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-center order-lg-2">
                        <div class="img-wrap-1 mb-5">
                            <img src="{{Storage::url($setting->set_image)}}" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto order-lg-1">
                        <h3 class="mb-4 section-heading"><strong>You can easily avail our promo for renting a car.</strong></h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>

                        <p><a href="#" class="btn btn-primary">Meet them now</a></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Car Listings</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>


                <div class="row">
                    @foreach($cars as $key=>$car)
                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{Storage::url($car->image)}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{$car->brand}} {{$car->model}}</h3>
                                <div class="rent-price">
                                    <strong>${{$car->price}}</strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Color:</span>
                                        <span class="number">{{$car->color}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Year:</span>
                                        <span class="number">{{$car->year}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Status:</span>
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
            </div>
        </div>



        <div class="site-section bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">What are you waiting for?</h2>
                        <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                    </div>
                    <div class="col-lg-5 text-md-right">
                        <a href="{{ route('app.cars') }}" class="btn btn-primary btn-white">Rent a car now</a>
                    </div>
                </div>
            </div>
        </div>




    </div>

@endsection
