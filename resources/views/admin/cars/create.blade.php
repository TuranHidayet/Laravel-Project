@section('title', 'title')
@extends('layouts.admin')

@section('customCss')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-5">
                <div class="form-container shadow-lg p-5 rounded bg-white">
                    <div class="d-flex align-items-center form-title text-center mb-4 font-weight-bold text-primary" style="font-size: 1.5rem;">
                        <a href="{{ route('admin.cars.index') }}" class="btn btn-sm btn-warning mr-auto">@lang('car_list')</a>

                        <a  href="{{ route('locale', ['locale'=> 'az']) }}" class="btn btn-sm btn-info mr-auto">AZ</a>
                        <a href="{{ route('locale', ['locale'=> 'en']) }}" class="btn btn-sm btn-info mr-auto">EN</a>


                        <div class="table-title font-weight-bold mx-auto">@lang('add_new_car')</div>
                    </div>
                    <div class="bg-secondary p-5">
                        <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group my-4">
                                <label for="image" class="font-weight-bold">@lang('image_label')</label>
                                <input type="file" class="form-control-file border p-2 rounded @error('image') is-invalid @enderror" value="{{ old('image') }}" name="image" required>
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="brand" class="font-weight-bold">@lang('brand_label')</label>
                                <input type="text" class="form-control rounded-pill @error('brand') is-invalid @enderror" name="brand" value="{{ old('brand') }}" placeholder="@lang('brand_placeholder')">
                                @error('brand')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="model" class="font-weight-bold">@lang('model_label')</label>
                                <input type="text" class="form-control rounded-pill @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" placeholder="@lang('model_placeholder')">
                                @error('model')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="year" class="font-weight-bold">@lang('year_label')</label>
                                <input type="number" class="form-control rounded-pill @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" placeholder="@lang('year_placeholder')">
                                @error('year')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="color" class="font-weight-bold">@lang('color_label')</label>
                                <input type="text" class="form-control rounded-pill @error('color') is-invalid @enderror" name="color" value="{{ old('color') }}" placeholder="@lang('color_placeholder')">
                                @error('color')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-4">
                                <label for="price" class="font-weight-bold">@lang('price_label')</label>
                                <input type="number" step="0.01" class="form-control rounded-pill @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="@lang('price_placeholder')">
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group my-3 rounded border bg-light" style="border-color: #ccc;">
                                <select class="form-control @error('status') is-invalid @enderror" name="status" required>
                                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>@lang('status_available')</option>
                                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>@lang('status_not_available')</option>
                                </select>
                            </div>

                            @foreach ($services as $service)
                                <div class="form-check mb-4">
                                    <input type="checkbox" class="form-check-input" name="features[]" value="{{ $service->id }}" checked>
                                    <label class="form-check-label">{{ $service->name }}</label>
                                </div>
                            @endforeach

                            <div class="form-group">
                                <label for="description" class="font-weight-bold">@lang('description_label')</label>
                                <div id="editor" class="mb-4" style="height: 100px;"></div>
                                <input type="hidden" id="description" name="description">
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-block rounded-pill py-2">@lang('submit_button')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-admin.alert/>

@endsection

@section('customJs')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: '@lang('description_placeholder')',
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    ['link', 'image']
                ]
            }
        });

        document.querySelector('form').onsubmit = function() {
            document.querySelector('input[name=description]').value = quill.root.innerHTML;
        };
    </script>
@endsection
