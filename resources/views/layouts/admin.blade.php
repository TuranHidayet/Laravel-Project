<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'dashboard')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .table-container {
            margin-top: 50px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .table-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .table img {
            max-width: 100px;
            border-radius: 5px;
        }

        body{
            position: relative;
        }

        .container{
            position: absolute;
            left: 250px;
            top: 50px;
        }
    </style>
    <!-- Favicons -->
    <link href="{{ asset('assets/admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

{{--    sweat alert--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Main CSS File -->
    <link href="{{ asset('assets/admin/css/main.css') }}" rel="stylesheet">
    @yield('customCss')
</head>

<body class="index-page">


@include('admin.partials.header')

@yield('content')

{{--@include('admin.partials.footer')--}}



<!-- Vendor JS Files -->
<script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/typed.js/typed.umd.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/swiper/swiper-bundle.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/admin/js/main.js') }}"></script>

@yield('customJs')
</body>

</html>
