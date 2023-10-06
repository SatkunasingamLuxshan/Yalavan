<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Top News HTML template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet">

@vite([ 'resources/js/app.js'])
</head>

<body>

    <!-- Header news -->
    <header class="bg-light">
        <!-- Navbar  Top-->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="topbar-left topbar-right d-flex">

                            <ul class="topbar-sosmed p-0">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                            <div class="topbar-text">
                                Friday, May 19, 2023
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="list-unstyled topbar-right d-flex align-items-center justify-content-end">
                            <div class="topbar_language">
                                <select>
                                    <option>English</option>
                                    <option>Chines</option>
                                    <option>Korean</option>
                                </select>
                            </div>

                            {{-- <ul class="topbar-link">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul> --}}
                            <ul class="topbar-link">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li >
                                    <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li >
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Top  -->


        <!-- Navbar  -->
        <!-- Navbar menu  -->
        <div class="navigation-wrap navigation-shadow bg-white">
            <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
                <div class="container">
                    <div class="offcanvas-header">
                        <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                            <span class="navbar-toggler-icon"></span>
                        </div>
                    </div>
                    <figure class="mb-0 mx-auto">
                        <a href="index.html">
                            <img src="images/logo1.png" alt="" class="img-fluid logo">
                        </a>
                    </figure>

                    <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('home')}}">home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{route('aboutus')}}"> about </a>
                            </li>
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link" href="{{route('blog')}}">blog </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                                <ul class="dropdown-menu animate fade-up">
                                    <li><a class="dropdown-item icon-arrow" href="{{route('blogdeatils')}}"> Blog single detail
                                        </a></li>
                                    <li><a class="dropdown-item" href="{{route('error')}}"> 404 Error </a>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}"> contact </a></li>
                        </ul>


                        <!-- Search bar.// -->
                        <ul class="navbar-nav ">
                            <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>

                        <!-- Search content bar.// -->
                        <div class="top-search navigation-shadow">
                            <div class="container">
                                <div class="input-group ">
                                    <form action="#">

                                        <div class="row no-gutters mt-3">
                                            <div class="col">
                                                <input class="form-control border-secondary border-right-0 rounded-0"
                                                    type="search" value="" placeholder="Search "
                                                    id="example-search-input4">
                                            </div>
                                            <div class="col-auto">
                                                <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                    href="/search-result.html">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Search content bar.// -->
                    </div> <!-- navbar-collapse.// -->
                </div>
            </nav>
        </div>
        <!-- End Navbar menu  -->


        <!-- Navbar sidebar menu  -->
        <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-aside" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="widget__form-search-bar  ">
                            <div class="row no-gutters">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" value=""
                                        placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <nav class="list-group list-group-flush">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link active text-dark" href="{{route('home')}}"> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{route('aboutus')}}"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark"href="{{route('blog')}}">Blog </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active dropdown-toggle  text-dark" href="#"
                                        data-toggle="dropdown">Pages </a>
                                    <ul class="dropdown-menu dropdown-menu-left">
                                        <li><a class="dropdown-item" href="/blogdetails">Blog details</a></li>
                                        <li><a class="dropdown-item" href="{{route('error')}}"> 404 Error</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="{{route('contact')}}"> Contact </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <div class="modal-footer">
                        <p>© 2020 <a href="https://websolutionus.com/.com">WebSolutionUS</a>
                            -
                            Premium template news, blog & magazine &amp;
                            magazine theme by <a href="https://websolutionus.com/.com">websolutionus.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header news -->
    @yield('content')


    <section class="wrapper__section p-0">
        <div class="wrapper__section__components">
            <!-- Footer -->
            <footer>
                <div class="wrapper__footer bg__footer-dark pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget__footer">
                                    <figure class="image-logo">
                                        <img src="images/logo2.png" alt="" class="logo-footer">
                                    </figure>

                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius magnam harum iure
                                        officia laudantium impedit voluptatem.</p>


                                    <div class="social__media mt-4">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white whatsapp">
                                                    <i class="fa fa-whatsapp"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white telegram">
                                                    <i class="fa fa-telegram"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            entertainment
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">celebity news</a>
                                        </li>
                                        <li>
                                            <a href="#">movies</a>
                                        </li>
                                        <li>
                                            <a href="#">tv news</a>
                                        </li>
                                        <li>
                                            <a href="#">music news</a>
                                        </li>
                                        <li>
                                            <a href="#">life style</a>
                                        </li>
                                        <li>
                                            <a href="#">entertainment video</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            health
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>
                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">medical research</a>
                                        </li>
                                        <li>
                                            <a href="#">healthy living</a>
                                        </li>
                                        <li>
                                            <a href="#">mental health</a>
                                        </li>
                                        <li>
                                            <a href="#">virus corona</a>
                                        </li>
                                        <li>
                                            <a href="#">children's health</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            business
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">merkets</a>
                                        </li>
                                        <li>
                                            <a href="#">technology</a>
                                        </li>
                                        <li>
                                            <a href="#">features</a>
                                        </li>
                                        <li>
                                            <a href="#">property</a>
                                        </li>
                                        <li>
                                            <a href="#">business leaders</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer bottom -->
                <div class="wrapper__footer-bottom bg__footer-dark">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border-top-1 bg__footer-bottom-section">
                                    <p class="text-white text-center">
                                        Copyright © 2023 Top News Theme by WebSolutionUS</p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
    </section>

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script type="text/javascript" src="js/index.bundle.js"></script>
</body>

</html>
