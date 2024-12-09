@section('title', 'Service Create')
@extends('layouts.admin')

@section('customCss')

@endsection

@section('content')

<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-lg-8 mt-5">
            <div class="form-container shadow-lg p-5 rounded bg-white ">
                <div class="d-flex align-items-center  form-title text-center mb-4 font-weight-bold text-primary" style="font-size: 1.5rem;">
                    <a href="{{ route('admin.service.index') }}" class="btn btn-sm btn-warning mr-auto">List</a>
                    <div class="table-title font-weight-bold mx-auto">Turan Cars - Service</div>
                </div>
               <div class="bg-secondary p-5">
                   <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                   @csrf

                       <div class="form-group my-4">
                           <label for="name" class="font-weight-bold">Name</label>
                           <input type="text" class="form-control rounded-pill @error('name') is-invalid @enderror"  name="name" value="{{old('name')}}" placeholder="Name Service" >
                           @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group my-4">
                           <label for="status" class="font-weight-bold">Status</label>
                          <select class="form-control" name="status">
                              <option value="1" selected>Active</option>
                              <option value="0">Passive</option>
                          </select>
                           @error('status')
                           <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>

                       <button type="submit" class="btn btn-primary btn-block rounded-pill py-2">Əlavə Et</button>
                   </form>
               </div>
            </div>
        </div>
    </div>
</div>

<x-admin.alert/>

@endsection
