<?php

$mealID = $_POST["id"];

$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

$isDuplicate = validateDuplicate($mealID);

if (!$isDuplicate){
    array_push($cart, array(
        "id" => $mealID,
        "quantity" => 1,

    ));
}




setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // 86400 = 1 day

// redirect to previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);

function validateDuplicate($id){
    global $cart;
    foreach($cart as &$meal){
        if($meal->id == $id){
            echo 'found it';
            $meal->quantity += 1;
            return true;
        }
    }
}


