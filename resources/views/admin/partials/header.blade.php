

<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
        @if ($user && $user->avatar)
            <img src="{{ Storage::url($user->avatar) }}" alt="" class="img-fluid rounded-circle">
        @else
            <img src="{{ asset('uploads/users/avatars/bxk8ZxnfaANAfhj6Us8EF3Xk3NEVESV3yOSw2xWp.jpg') }}" alt="Default Avatar" class="img-fluid rounded-circle">
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
            <li><a href="{{route('admin.dashboard')}}" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
            <li><a href="{{route('admin.users.index')}}"><i class="bi bi-person navicon"></i> Users</a></li>
            <li><a href="{{route('admin.cars.index')}}"><i class="bi bi-car-front-fill navicon"></i> Cars</a></li>
            <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
            <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="#">Dropdown 1</a></li>
                    <li><a href="#">Dropdown 2</a></li>
                    <li><a href="#">Dropdown 3</a></li>
                    <li><a href="#">Dropdown 4</a></li>
                </ul>
            </li>
            <li><a href="{{route('admin.contact.index')}}"><i class="bi bi-envelope-open-fill navicon"></i> Contact Messages</a></li>
            <li><a href="{{route('app.logout')}}"><i class="bi bi-box-arrow-left navicon"></i> Logout</a></li>
        </ul>
    </nav>

</header>

