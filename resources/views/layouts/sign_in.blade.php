<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/sign_in.css')}}">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css')}}"/>
    <title>Sign in Form </title>

</head>
<body>
<div class="container_singup">
    <div class="form-wrapper">
        <div class="banner">
            <h1>Welcome!!</h1>
            <p>Enter your personal details and buy a ticket</p>
        </div>
        <div class="green-bg">
            <button type="button">Sign in</button>
        </div>

        <!-- login  -->

        <form class="signup-form" id="sing-in">
            <h1>Login Your Account</h1>
            <div class="social-media">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <p>or use your email to sing in</p>

            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Email">
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Password">
            </div>
            <p>Forgot your password? <a href="">Repassword</a></p>
            <div class="btn-field">
                <a href="/sign_up.blade.php"><button type="button" id="signupBtn" class="disable">Sign up </button></a>
                <button type="button" id="singinBtn">login </button>
            </div>
            <a href="{{asset('/')}}" class="backHome">Back Home</a>


        </form>
    </div>
</div>

</body>
</html>
