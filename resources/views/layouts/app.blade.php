{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}

{{--        <!-- Scripts -->--}}
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--    </head>--}}
{{--    <body class="font-sans antialiased">--}}
{{--        <div class="min-h-screen bg-gray-100">--}}
{{--            @include('layouts.navigation')--}}

{{--            <!-- Page Heading -->--}}
{{--            @if (isset($header))--}}
{{--                <header class="bg-white shadow">--}}
{{--                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                        {{ $header }}--}}
{{--                    </div>--}}
{{--                </header>--}}
{{--            @endif--}}

{{--            <!-- Page Content -->--}}
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css')}}" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="nav">
    <div class="container">

        <div class="navbar-logo">
            <img
                src="./asset/cinema_logo.png"
                class="d-inline-block align-text-middle"
                width="120"
                alt=""

            />
            <h1 class="welcome">WELCOME TO CINEMA</h1>

        </div>


        <ul class="navbar-list ">
            <li class="nav-li">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-li">
                <a class="nav-link" href="#movies">MOVIES</a>
            </li>
            <li class="nav-li">
                <a class="nav-link" href="/coming.html">COMING SOON</a>
            </li>
            <li class="nav-li">
                <a class="nav-link" href="/now_showing.blade.php">NOW SHOWING</a>
            </li>
            <li class="nav-li">
                <a class="nav-link" href="/promotion.html">PROMOTION</a>
            </li>
            <li class="nav-li">
                <a class="nav-link" href="/membership.html">MEMBERSHIP</a>
            </li>
            <li class="nav-li search-movies">
                <input type="text" placeholder="  Search movies....">
                <a href="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
                <a href="/sign_up.blade.php"><i class="fa-solid fa-user"></i></a>
            </li>

        </ul>
    </div>

</div>



<!-- Slider -->
<section class="slider">
    <div class="slides">

    </div>
</section>



<section class="container-poster" id="movies">
    <div class="item-poster poster1">
        <!-- <div class="poster"> -->
        <a href="./now_showing.html"><img
                class="movie-img-top"
                src="asset/deadpool.jpg"
                alt="Movie Poster"
            /></a>
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <br>
            <h1 class="movie-title">Dead Pool</h1>
            <br>
            <p>English(subtitle: khmer)</p>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="./now_showing.html" class="btn btn-primary">Buy Now</a></p>
        </div>
        <!-- </div> -->
    </div>

    <div class="item-poster poster2">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Dead Pool</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster3">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Dead Pool</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster4">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Dead Pool</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster5">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Dead Pool</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster6">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Dead Pool</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster7">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Dead Pool</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster8">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Dead Pool</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster9">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Train to Busan Korea</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster9">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Train to Busan Korea</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster9">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Train to Busan Korea</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

    <div class="item-poster poster9">

        <img
            class="movie-img-top"
            src="asset/deadpool.jpg"
            alt="Movie Poster"
        />
        <div class="movie-body">
            <h5 class="date">10-MAR-2023</h5>
            <h1 class="movie-title">Train to Busan Korea</h1>
            <button class="movie-type"><p>Action</p></button>
            <button class="movie-time"><p>120min</p></button>
            <p class="rating">
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
                <a href=""><i class="fa-solid fa-star"></i></a>
            </p>
            <br>

            <p><a href="#" class="btn btn-primary">Buy Now</a></p>
        </div>

    </div>

</section>

<!-- Footer -->
<section id="contact">
    <div class="footer">
        <div class="main">
            <div class="col">
                <h4>MOVIE</h4>
                <ul>

                    <li><a href="#">COMING SOON</a></li>
                    <li><a href="#">NOW SHOWING</a></li>
                    <li><a href="#">PROMOTION</a></li>
                    <li><a href="#">MEMBERSHIP</a></li>
                </ul>
            </div>

            <div class="col">
                <h4>System type</h4>
                <ul>
                    <li><a href="#">ScreenX</a></li>
                    <li><a href="#">4DX</a></li>
                    <li><a href="#">IMAX</a></li>
                    <li><a href="#">VIP Hall</a></li>
                    <li><a href="#">Kid Hall</a></li>
                </ul>
            </div>

            <div class="col">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Term & Conditions</a></li>
                </ul>
            </div>

            <div class="col">
                <h4>Contact Us</h4>
                <div class="social">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
