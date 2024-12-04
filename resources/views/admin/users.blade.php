<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .table-container {
            margin-top: 30px;
        }
        .table-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body">


@section('title', 'Car List')
@extends('layouts.admin')

@section('content')


    <div class="container table-container">
        <div class="table-title">İstifadəçi Siyahısı</div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th class="text-center">Profile</th>
                <th class="text-center">Fullname</th>
                <th class="text-center">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">Role</th>
                <th class="text-primary text-center">Control</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <th>{{$key+1}}</th>
                    <td><img src="{{Storage::url($user->avatar)}}" alt="{{$user->name}}" width="50" height="50"></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td><a href="{{ route('admin.users.destroy', ['id'=>$user->id]) }}" type="submit" class="btn btn-danger text-center">Delete</a></td>
                    <td></td>
                </tr>

            @endforeach


            </tbody>
        </table>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
