@section('title', 'Create Car')
@extends('layouts.admin')

@section('customCss')

@endsection

@section('content')

<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-lg-8 mt-5">
            <div class="form-container shadow-lg p-5 rounded bg-white ">
                <div class="d-flex align-items-center  form-title text-center mb-4 font-weight-bold text-primary" style="font-size: 1.5rem;">
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-sm btn-warning mr-auto">Car List</a>
                    <div class="table-title font-weight-bold mx-auto">Turan Cars - Yeni Avtomobil Əlavə Et</div>
                </div>
               <div class="bg-secondary p-5">
                   <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                       <div class="form-group my-4">
                           <label for="image" class="font-weight-bold">Avtomobil Şəkli</label>
                           <input type="file" class="form-control-file border p-2 rounded @error('image') is-invalid @enderror"  value="{{old('image')}}" name="image" required>
                           @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group my-4">
                           <label for="brand" class="font-weight-bold">Brend</label>
                           <input type="text" class="form-control rounded-pill @error('brand') is-invalid @enderror"  name="brand" value="{{old('brand')}}" placeholder="Avtomobil brendi" >
                           @error('brand')
                                <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group my-4">
                           <label for="model" class="font-weight-bold">Model</label>
                           <input type="text" class="form-control rounded-pill @error('model') is-invalid @enderror"   name="model" value="{{old('model')}}" placeholder="Avtomobil modeli" >
                           @error('model')
                                <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group my-4">
                           <label for="year" class="font-weight-bold">İl</label>
                           <input type="number" class="form-control rounded-pill @error('year') is-invalid @enderror" name="year" value="{{old('year')}}" placeholder="Avtomobil istehsal ili" >
                           @error('year')
                                <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group my-4">
                           <label for="color" class="font-weight-bold">Rəng</label>
                           <input type="text" class="form-control rounded-pill"  name="color" value="{{old('color')}}" placeholder="Avtomobil rəngi" >
                           @error('color')
                                <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group my-4">
                           <label for="price" class="font-weight-bold">Qiymət (AZN)</label>
                           <input type="number" step="0.01" class="form-control rounded-pill @error('price') is-invalid @enderror" name="price" value="{{old('price')}}" placeholder="Avtomobil qiyməti" >
                           @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                       </div>

                       <!-- Availability Box -->
                       <div class="form-group my-3  rounded border bg-light" style="border-color: #ccc;">
                           <select class="form-control @error('price') is-invalid @enderror" name="status" required>
                               <option value="1" {{old('status')}}> Available </option>
                               <option value="0" {{old('status')}}> Not Available </option>
                           </select>
                       </div>

                       <button type="submit" class="btn btn-primary btn-block rounded-pill py-2">Əlavə Et</button>
                   </form>
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
