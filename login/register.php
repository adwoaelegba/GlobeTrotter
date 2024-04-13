<?php

include("../ajax/script.php");
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
        <!--form end -->
        <!--sign in -->
        <form autocomplete="off" class="sign-up" action="" method="post">
            <i class="fa-solid fa-user-plus"></i>
            <input class="user-input" type="text" name="firstName" id="firstName" placeholder="First Name">
            <input class="user-input" type="text" name="lastName"  id="lastName"  placeholder="Last Name">
            <input class="user-input" type="email" name="email"  id="email" placeholder="Email">
            <input class="user-input" type="text" name="phone" id="phone" placeholder="Phone">
            <input class="user-input" type="text" name="country" id="country" placeholder="Country">
            <input class="user-input" type="password" name="password" id="password" placeholder="Password">
            <input class="user-input" type="password" name="cpassword" placeholder="Confirm password">
            <button class="button" type="button" onclick="submitInfo('insert');">Sign up</button>

            <div class="options-2">
                <p>Already Registered? <a href="login.php">Sign In</a></p>

            </div>
        </form>
    </div>

</body>
</html>