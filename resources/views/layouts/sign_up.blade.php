<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/sing_up.css')}}">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>Sign Up Form</title>
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
        <form class="signup-form">
            <h1>Create Account</h1>
            <div class="social-media">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <p>or use your email for registration</p>
            <div class="input-group">
                <i class="fa-brands fa-skype"></i>
                <input type="text" placeholder="Username">
            </div>
            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Email">
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Password">
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Confirm Password">
            </div>
            <p>Already has an account? click Login</p>
            <div class="btn-field">
                <button type="button" >Sign up</button>
                <a href="sign_in.blade.php"><button type="button" class="disable"> login </button></a>
            </div>
            <!-- <div class="backHome">
                <a href="./index.html">Back Home</a>
            </div> -->
            <a href="/" class="backHome">Back Home</a>
        </form>

        <!-- login  -->
        <!--
                    <form class="signup-form sing-in" id="sing-in">
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
                        <button type="button">login </button>
                    </form> -->
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>
