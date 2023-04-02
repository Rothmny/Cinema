<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Now Shwoing</title>
    <link rel="stylesheet" href="{{asset('css/now_showing.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body">
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
                <a class="nav-link" href="/movies.html">MOVIES</a>
            </li>
            <li class="nav-li">
                <a class="nav-link" href="/coming.html">COMING SOON</a>
            </li>
            <li class="nav-li">
                <a class="nav-link" href="now_showing.blade.php">NOW SHOWING</a>
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

<section class="showtime">
    <div class="con">
        <div class="con-item">
            <div class="small_block">
                <div class="title">
                    <h1>Dead Pool</h1>
                </div>
                <div class="con-item letter-showtime">
                    <h1>Showtime</h1>
                </div>
                <div class="con-item line"></div>
            </div>
            <div class="small_block sb_container">
                <div class="sb_items"><img src="./asset/deadpool.jpg" alt=""></div>
                <div class="sb_items">
                    <div class="sub_sb_items">
                        <div class="date"><p>Thurday,23 February 2023</p></div>
                        <div class="times"><p>10:30</p></div>
                        <div class="times"><p>12:30</p></div>
                        <div class="times"><p>2:00</p></div>
                        <div class="times"><p>4:30</p></div>
                        <div class="times"><p>7:30</p></div>
                    </div>
                    <div class="sub_sb_items">
                        <div class="date"><p>Thurday,23 February 2023</p></div>
                        <div class="times"><p>10:30</p></div>
                        <div class="times"><p>12:30</p></div>
                        <div class="times"><p>2:00</p></div>
                        <div class="times"><p>4:30</p></div>
                        <div class="times"><p>7:30</p></div>
                    </div>
                    <div class="sub_sb_items">
                        <div class="date"><p>Thurday,23 February 2023</p></div>
                        <div class="times"><p>10:30</p></div>
                        <div class="times"><p>12:30</p></div>
                        <div class="times"><p>2:00</p></div>
                        <div class="times"><p>4:30</p></div>
                        <div class="times"><p>7:30</p></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="con-item">
            <div class="small_block">
                <div class="title">
                    <h1>Dead Pool</h1>
                </div>
                <div class="con-item letter-showtime">
                    <h1>Showtime</h1>
                </div>
                <div class="con-item line"></div>
            </div>
            <div class="small_block sb_container">
                <div class="sb_items"><img src="./asset/deadpool.jpg" alt=""></div>
                <div class="sb_items">
                    <div class="sub_sb_items">
                        <div class="date"><p>Thurday,23 February 2023</p></div>
                        <div class="times"><p>10:30</p></div>
                        <div class="times"><p>12:30</p></div>
                        <div class="times"><p>2:00</p></div>
                        <div class="times"><p>4:30</p></div>
                        <div class="times"><p>7:30</p></div>
                    </div>
                    <div class="sub_sb_items">
                        <div class="date"><p>Thurday,23 February 2023</p></div>
                        <div class="times"><p>10:30</p></div>
                        <div class="times"><p>12:30</p></div>
                        <div class="times"><p>2:00</p></div>
                        <div class="times"><p>4:30</p></div>
                        <div class="times"><p>7:30</p></div>
                    </div>
                    <div class="sub_sb_items">
                        <div class="date"><p>Thurday,23 February 2023</p></div>
                        <div class="times"><p>10:30</p></div>
                        <div class="times"><p>12:30</p></div>
                        <div class="times"><p>2:00</p></div>
                        <div class="times"><p>4:30</p></div>
                        <div class="times"><p>7:30</p></div>
                    </div>

                </div>
            </div>
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





    </body>
</html>
