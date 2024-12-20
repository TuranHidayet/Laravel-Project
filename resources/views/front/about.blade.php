@section('title', 'About')

@extends('layouts.app')

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

        <div class="hero inner-page" style="background-image: url();">

            <div class="container">
                <div class="row align-items-end ">
                    <div class="col-lg-5">

                        <div class="intro">
                            <h1><strong>About</strong></h1>
                            <div class="custom-breadcrumbs"><a href="{{ route('app.home') }}">Home</a> <span class="mx-2">/</span> <strong>About</strong></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
                        <img src="{{Storage::url($setting->about_image)}}" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <h2 class="text-danger">{{$setting->company_name}}</h2>
                        <p>{{$setting->about_description}}</p>
                        <p>{{$setting->description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center text-center mb-5 section-2-title">
                    <div class="col-md-6">
                        <h2 class="mb-4">Meet Our Team</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100 person-1">

                            <img src="{{asset('assets/front/images/qurban.jpeg')}}" width="190px !important" alt="Image">

                            <div class="post-entry-1-contents">
                                <span class="meta">Founder</span>
                                <h2>Qurnab Qurbanov</h2>
                                <p>Qarabağ Futbol klubunun baş məşqçisi </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100 person-1">

                            <img src="{{asset('assets/front/images/resadsadiqov.jpg')}}" width="190px !important" alt="Image">

                            <div class="post-entry-1-contents">
                                <span class="meta">Founder</span>
                                <h2>Rəşad Sadıqov</h2>
                                <p>Zirə Futbol klubunun baş məşqçisi </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100 person-1">

                            <img src="{{asset('assets/front/images/efran.png')}}" width="190px !important" alt="Image">

                            <div class="post-entry-1-contents">
                                <span class="meta">Founder</span>
                                <h2>Əfran İsmayılov</h2>
                                <p>Azərbaycan Millisinin Futbolçusu</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="{{Storage::url($setting->slider_image)}}" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <h2>Our History</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit suscipit, repudiandae similique accusantium eius nulla quam laudantium sequi.</p>
                        <p>Debitis voluptates corporis saepe molestias tenetur ab quae, quo earum commodi, laborum dolore, fuga aliquid delectus cum ipsa?</p>
                    </div>
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
