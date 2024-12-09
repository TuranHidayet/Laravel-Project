<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
        @if ($user && $user->avatar)
            <img src="{{ Storage::url($user->avatar) }}" alt="" class="img-fluid rounded-circle">
        @else
            <img src="{{ asset('uploads/users/avatars/bxk8ZxnfaANAfhj6Us8EF3Xk3NEVESV3yOSw2xWp.jpg') }}" alt="@lang('default_avatar')" class="img-fluid rounded-circle">
        @endif
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
        <h1 class="sitename text-center">{{$user->name}}</h1>
    </a>

    <div class="social-links text-center">
        <a href="https://x.com/" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/feed/" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{route('admin.dashboard')}}" class="active"><i class="bi bi-house navicon"></i>@lang('home')</a></li>
            <li><a href="{{route('admin.users.index')}}"><i class="bi bi-people-fill navicon"></i> @lang('users')</a></li>
            <li><a href="{{route('admin.cars.index')}}"><i class="bi bi-car-front-fill navicon"></i> @lang('cars')</a></li>
            <li><a href="{{route('admin.service.index')}}"><i class="bi bi-stripe navicon"></i> @lang('services')</a></li>
            <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>@lang('dropdown')</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="#">@lang('dropdown_1')</a></li>
                    <li><a href="#">@lang('dropdown_2')</a></li>
                    <li><a href="#">@lang('dropdown_3')</a></li>
                    <li><a href="#">@lang('dropdown_4')</a></li>
                </ul>
            </li>

            <li><a href="{{route('admin.contact.index')}}"><i class="bi bi-envelope-open-fill navicon"></i> @lang('contact_messages')</a></li>
            <li><a href="{{route('admin.setting.index')}}"><i class="bi bi-gear-fill navicon"></i> @lang('setting')</a></li>
            <li><a href="{{route('app.logout')}}"><i class="bi bi-box-arrow-left navicon"></i> @lang('logout')</a></li>
        </ul>
    </nav>
</header>
