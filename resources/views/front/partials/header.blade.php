<header class="site-navbar site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">

            <div class="col-3">
                <div class="site-logo">
                    <a href="{{route('app.home')}}"><strong>Turan Cars</strong></a>
                </div>
            </div>

            <div class="col-9  text-right">

                <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li class="{{\App\Helpers\Helper::isActiveMenu('/')}}"><a href="{{route('app.home')}}" class="nav-link">Home</a></li>
                        <li class="{{\App\Helpers\Helper::isActiveMenu('cars')}}"><a href="{{route('app.cars')}}" class="nav-link">Cars</a></li>
                        <li class="{{\App\Helpers\Helper::isActiveMenu('about')}}"><a href="{{route('app.about')}}" class="nav-link">About</a></li>
                        <li class="{{\App\Helpers\Helper::isActiveMenu('blogs')}}"><a href="{{route('app.blogs')}}" class="nav-link">Blog</a></li>
                        <li class="{{\App\Helpers\Helper::isActiveMenu('contact')}}"><a href="{{route('app.contact')}}" class="nav-link">Contact</a></li>
                        @guest
                            <li class="{{\App\Helpers\Helper::isActiveMenu('login')}}"><a href="{{route('app.login')}}" class="nav-link">Login</a></li>
                            <li class="{{\App\Helpers\Helper::isActiveMenu('register')}}"><a href="{{route('app.register')}}" class="nav-link">Register</a></li>
                        @endguest
                        @auth
                            <li class="{{\App\Helpers\Helper::isActiveMenu('register')}}"><a href="{{route('app.profile')}}" class="nav-link">Profile</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>


        </div>
    </div>

</header>
