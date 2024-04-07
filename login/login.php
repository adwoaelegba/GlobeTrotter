<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeTrotter-Log In</title>
    <!-- Font Awesome CDN link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="../css/logCSS.css">

    <!--JQuery libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<header>
<a href="#" class="brand">GlobeTrotter</a>
</header>

<div class="form">
    <!--log in form  -->
    <form action="#" class="login-form" method="post">
    <i class="fa-solid fa-circle-user"></i>
    <input type="text" name="email" class="user-input" placeholder="Email">
    <input type="password" name="password" class="user-input" placeholder="Password">
    
    <div class="options-1">
        <label class="remember"><input type="checkbox" name="">Remember me</label>
        <a href="#">Forgot password</a>

    </div>
    <button class="button" type="submit">Log In</button>
    <div class="options-2">
        <p>Not registered? <a href="#">Create an account</a></p>
    </div>
</form>

<!--form end -->
<!--sign in -->
<form class="sign-up" action="" method="post">
<i class="fa-solid fa-user-plus"></i>
<input class="user-input" type="text" name="firstName" placeholder="First Name">
<input class="user-input" type="text" name="lastName" placeholder="Last Name">
<input class="user-input" type="text" name="country" placeholder="Country">
<input class="user-input" type="text" name="password" placeholder="Password">
<input class="user-input" type="text" name="cpassword" placeholder="Confirm password">
<button class="button" type="submit">Sign up</button>

<div class="options-2">
    <p>Already Registered? <a href="#">Sign In</a></p>

</div>
</form>

</div>

<script type="text/javascript">
$('.options-2 a').click(function(){
    $('form').animate({
        height: "toggle", opacity:"toggle"

    }, "slow");
});
</script>

    
</body>
</html>