
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dentition - Medical Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index">
                    <i class="fas fa-tooth"></i>Dental Clinic
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                @foreach ($navbars as $navbar )
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto me-2 my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{$navbar->name}}">{{$navbar->name}}</a>
                        </li>
                        @endforeach
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li> --}}
                        @guest

                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }} <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item active" href="appointment">Appointment</a></li>
                                <li><a class="dropdown-item" href="logout">logout</a></li>
                                {{-- <li><a class="dropdown-item" href="blog-single">Blog Single</a></li>
                                <li><a class="dropdown-item" href="error">404 Page</a></li>
                                <li><a class="dropdown-item" href="email-template">Email Template</a></li>
                                <li><a class="dropdown-item" href="shortcodes">Shortcodes</a></li>
                                <li><a class="dropdown-item" href="landing-single">Landing Page</a></li> --}}
                            </ul>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="login">logout</a>
                        </li> --}}
                    </ul>
                    {{-- <form action="#error" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search" required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form> --}}
                </div>
                @endguest
                <!-- toggle switch for light and dark theme -->
                {{-- <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div> --}}
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

