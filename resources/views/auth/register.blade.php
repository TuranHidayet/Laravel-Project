<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qeydiyyat | Turan Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('assets/front/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <style>
        .register {
            background: url('https://www.rentallscript.com/resources/content/images/size/w1075h650/2024/08/47196-min.jpg') no-repeat center center fixed;
            background-size: cover;
            margin-top: 100px !important;
            padding-bottom:80px !important;
            padding-top: 80px;
            color: white;

        }
        .card {
            background-color: rgba(0, 0, 0, 0.7);
            border: none;
        }
        .card-header h3 {
            color: #f8c146;
        }
        .btn-primary {
            background-color: #f8c146;
            border: none;
        }
        .btn-primary:hover {
            background-color: #d8a639;
        }



    </style>
</head>
<body>

@include('front.partials.header')

<div class="register mt-3">
    <div class="container register-margin">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Turan Cars | Qeydiyyat Forması</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('app.postRegister')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="name">Ad, Soyad</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Adınızı daxil edin" value="{{old('name')}}">
                            @error('name')
                                <span class="text-danger mt-1">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">İstifadəçi adı</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="İstifadəçi adınızı daxil edin" value="{{old('username')}}">
                            @error('username')
                                <span class="text-danger mt-1"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email adresinizi daxil edin" value="{{old('email')}}">
                            @error('email')
                                <span class="text-danger mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Şifrə</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Şifrənizi daxil edin" >
                            @error('password')
                                <span class="text-danger mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Şifrə (təkrar)</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Şifrənizi təkrar daxil edin" >
                            @error('password')
                                <span class="text-danger mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">

                            <input type="file" class="form-control"  name="avatar">
                            @error('avatar')
                            <span class="text-danger mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Qeydiyyatdan keç</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@include('front.partials.footer')

<script src="{{ asset('assets/front/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/front/js/aos.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>
