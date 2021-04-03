<?php

$mealID = $_POST["id"];

$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);


array_push($cart, $mealID);

setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // 86400 = 1 day

// redirect to previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);


