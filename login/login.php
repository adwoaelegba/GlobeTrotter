<?php

session_start();
include("../ajax/script.php");
include("../actions/login_user_action.php");
//if(isset($_SESSION["pid"])){
   // header("Location: ../view/home.php");
   //exit;
//}
?>





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
    <form autocomplete="off"  class="login-form" method="post">
    <i class="fa-solid fa-circle-user"></i>
    <input type="hidden" id="action" value="login">
    <input type="text" name="email" id="email" class="user-input" placeholder="Email">
    <input type="password" name="password" id="password" class="user-input" placeholder="Password">
    
    <div class="options-1">
        <label class="remember"><input type="checkbox">Remember me</label>
        <a href="#">Forgot password</a>

    </div>
    <button class="button" type="button"  onclick="submitData();">Log In</button>
    <div class="options-2">
        <p>Not registered? <a href="#">Create an account</a></p>
    </div>
</form>



<script type="text/javascript">
$('.options-2 a').click(function(){
    $('form').animate({
        height: "toggle", opacity:"toggle"

    }, "slow");
});
</script>

    
</body>
</html>