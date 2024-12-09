@section('title', 'Create Car Settings')
@extends('layouts.admin')

@section('customCss')
@endsection

@section('content')
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-lg-8 mt-5">
                <div class="form-container shadow-lg p-5 rounded bg-white ">
                    <div class="d-flex align-items-center  form-title text-center mb-4 font-weight-bold text-primary" style="font-size: 1.5rem;">

                        <div class="table-title font-weight-bold mx-auto">Turan Cars - Settings</div>
                    </div>
                    <div class="bg-secondary p-5">
                        <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group mb-4">
                                <label for="title" class="font-weight-bold">Title</label>
                                <input type="text" class="form-control rounded-pill @error('title') is-invalid @enderror" name="title" value="{{$setting->title}}" placeholder="Başlıq">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group my-4">
                                <label for="company_name" class="font-weight-bold">Company Name</label>
                                <textarea class="form-control @error('company_name') is-invalid @enderror" name="company_name" rows="3" placeholder="Şirkət adı">{{$setting->company_name}}</textarea>
                                @error('company_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group my-4">
                                <label for="description" class="font-weight-bold">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4" placeholder="Təsvir">{{$setting->description}}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group my-4">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{$setting->email}}" placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group my-4">
                                <label for="address" class="font-weight-bold">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="2" placeholder="Ünvan">{{$setting->address}}</textarea>
                                @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group my-4">
                                <label for="phone" class="font-weight-bold">Phone</label>
                                <input type="text" class="form-control rounded-pill @error('phone') is-invalid @enderror" name="phone" value="{{$setting->phone}}" placeholder="Telefon">
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="instagram" class="font-weight-bold">Instagram</label>
                                <input type="text" class="form-control rounded-pill @error('instagram') is-invalid @enderror" name="instagram" value="{{$setting->instagram}}" placeholder="Instagram">
                                @error('instagram')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="facebook" class="font-weight-bold">Facebook</label>
                                <input type="text" class="form-control rounded-pill @error('facebook') is-invalid @enderror" name="facebook" value="{{$setting->facebook}}" placeholder="Facebook">
                                @error('facebook')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="twitter" class="font-weight-bold">Twitter</label>
                                <input type="text" class="form-control rounded-pill @error('twitter') is-invalid @enderror" name="twitter" value="{{$setting->twitter}}" placeholder="Twitter">
                                @error('twitter')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="linkedin" class="font-weight-bold">LinkEdin</label>
                                <input type="text" class="form-control rounded-pill @error('linkedin') is-invalid @enderror" name="linkedin" value="{{$setting->linkedin}}" placeholder="Linkedin">
                                @error('linkedin')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="whatsapp" class="font-weight-bold">WhatsApp</label>
                                <input type="text" class="form-control rounded-pill @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{$setting->whatsapp}}" placeholder="WhatsApp">
                                @error('whatsapp')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="about_description" class="font-weight-bold">About Description</label>
                                <textarea class="form-control @error('about_description') is-invalid @enderror" name="about_description" rows="5" placeholder="Haqqında">{{$setting->about_description}}</textarea>
                                @error('about_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="about_image" class="font-weight-bold">About Image</label>
                                <input type="file" class="form-control-file border p-2 rounded @error('about_image') is-invalid @enderror" name="about_image">
                                @error('about_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="slider_image" class="font-weight-bold">Slider Image</label>
                                <input type="file" class="form-control-file border p-2 rounded @error('slider_image') is-invalid @enderror" name="slider_image">
                                @error('slider_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="set_image" class="font-weight-bold">Setting Image</label>
                                <input type="file" class="form-control-file border p-2 rounded @error('set_image') is-invalid @enderror" name="set_image">
                                @error('set_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary btn-block rounded-pill py-2">Yadda Saxla</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<x-admin.alert/>
@endsection
