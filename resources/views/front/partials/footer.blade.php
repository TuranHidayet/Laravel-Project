<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="footer-heading mb-4">@lang('footer_about_us')</h2>
                <p>{{$setting->about_description}}</p>
                <ul class="list-unstyled social">
                    <li><a href="{{$setting->facebook}}"><span class="icon-facebook"></span></a></li>
                    <li><a href="{{$setting->instagram}}"><span class="icon-instagram"></span></a></li>
                    <li><a href="{{$setting->twitter}}"><span class="icon-twitter"></span></a></li>
                    <li><a href="{{$setting->linkedin}}"><span class="icon-linkedin"></span></a></li>
                    <li><a href="{{$setting->whatsapp}}"><span class="icon-whatsapp"></span></a></li>
                </ul>
            </div>
            <div class="col-lg-8 ml-auto">
                <div class="row">
                    <div class="col-lg-3 mr-5">
                        <h2 class="footer-heading mb-4">@lang('footer_contact_us')</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">@lang('footer_email'): {{$setting->email}}</a></li>
                            <li><a href="#">@lang('footer_phone'): {{$setting->phone}}</a></li>
                            <li><a href="#">@lang('footer_address'): {{$setting->address}}</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 mr-4">
                        <h2 class="footer-heading mb-4">@lang('footer_support')</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">@lang('footer_about_us')</a></li>
                            <li><a href="#">@lang('footer_testimonials')</a></li>
                            <li><a href="#">@lang('footer_terms_of_service')</a></li>
                            <li><a href="#">@lang('footer_privacy')</a></li>
                            <li><a href="#">@lang('footer_contact_us')</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">@lang('footer_company')</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">{{$setting->company_name}}</a></li>
                            <li><a href="#">{{$setting->email}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        Turan &copy;<script>document.write(new Date().getFullYear());</script>
                        @lang('footer_all_rights_reserved') | @lang('footer_made_with')
                        <i class="icon-heart text-danger" aria-hidden="true"></i>
                        @lang('footer_by') <a href="https://colorlib.com" target="_blank">Turan Cars</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
