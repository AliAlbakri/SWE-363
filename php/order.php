<?php



if(isset($_COOKIE["cart"])){

    setcookie('recent', $_COOKIE["cart"], time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie('cart','',time()-3600,'/');
}
// print_r($_COOKIE["recent"])
 header('Location: ' . $_SERVER['HTTP_REFERER']);
?>