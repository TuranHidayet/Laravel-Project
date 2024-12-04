<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Turan Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile {
            background: url('https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1740&q=80') no-repeat center center fixed;
            background-size: cover;
            margin-top: 80px;
            padding-bottom: 200px;
            color: #fff;
        }
        .profile-container {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 8px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .profile-title {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')

<div class = "profile">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="profile-container">

                    <div class="profile-title">
                        <img src="{{Storage::url($user->avatar) }}" alt="User Avatar" style="width: 100px; height: 100px; border-radius: 50%;">
                        <div class="profile-title">Xoş Gəldiniz, {{$user->name }}!</div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item bg-dark text-white "><strong>Ad:</strong> {{ $user->username }}</li>
                        <li class="list-group-item bg-dark text-white"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item bg-dark text-white"><strong>Qeydiyyat Tarixi:</strong> {{$user->created_at->format('d/m/Y') }}</li>
                    </ul>
                    <div class="text-center mt-3">
                        <a href="{{route('app.logout')}}" class="btn btn-danger">Çıxış Et</a>
                    </div>
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
