<?php

//starting session
session_start();

//unsetting the sessions
unset($_SESSION['pid']);

//redirect to login page
header('Location: ../login/login.php');
exit();





























?>