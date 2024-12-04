@extends('layouts.app')

@section('content')




    <div class="site-section bg-light" id="contact-section">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-container p-4 rounded shadow bg-light">
                            <h2 class="text-center mb-4">Contact Us</h2>
                            <form action="{{route('app.contact.store')}}" method="POST">
                            @csrf

                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">Name</label>
                                    <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="Adınızı daxil edin" >
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email" class="font-weight-bold">Email</label>
                                    <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Email ünvanınızı daxil edin" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="subject" class="font-weight-bold">Subject</label>
                                    <input type="subject" class="form-control rounded-pill" id="subject" name="subject" placeholder="Subject" >
                                    @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="message" class="font-weight-bold">Message</label>
                                    <textarea class="form-control rounded" id="message" name="message" rows="5" placeholder="Mesajınızı yazın" ></textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary btn-block rounded-pill py-2">Send</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>
@endsection

