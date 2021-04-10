<?php

$redirect = $_POST['redirect'];


if(isset($_COOKIE["cart"])){

    setcookie('recent-bought', $_COOKIE["cart"], time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie('cart','',time()-3600,'/');
}

 header('Location: ../index.php');
