<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Turan Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">


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
        .login {
            background: url('https://c.wallhere.com/photos/c0/f8/bmw_1m_akrapovic_worldcars-1053159.jpg!d') no-repeat center center fixed;
            background-size: cover;
            margin-top:90px;
            padding-bottom:100px;
            padding-top: 100px;
            color: white;
            height: 100vh;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .login-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .login-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .btn-custom {
            background-color: #ff6600;
            border-color: #ff6600;
            color: white;
        }
        .btn-custom:hover {
            background-color: #e65c00;
            border-color: #e65c00;
        }
    </style>
</head>
<body>
@include('front.partials.header')


<div class="login-container login">
    <div class="login-box">
        <div class="login-title">Turan Cars Login</div>
        <form action="{{ route('app.postLogin') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Emailinizi daxil edin" required>
            </div>
            <div class="form-group">
                <label for="password">Şifrə</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Şifrənizi daxil edin" required>
            </div>
            <button type="submit" class="btn btn-custom btn-block">Daxil Ol</button>
        </form>
    </div>
</div>

@include('front.partials.footer')

{{--bootstrapin js linkleri--}}
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


{{--registerin js linkleri --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

