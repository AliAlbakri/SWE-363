<?php

$mealID = $_POST["id"];
$quantity = $_POST['quantity'];
$back = $_POST['back'];

echo $back;


$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

$isDuplicate = validateDuplicate($mealID);

if (!$isDuplicate){
    array_push($cart, array(
        "id" => $mealID,
        "quantity" => $quantity,

    ));
}




setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // 86400 = 1 day

// redirect to previous page

header('Location: ' . $back);

function validateDuplicate($id){
    global $cart;
    global $quantity;
    foreach($cart as &$meal){
        if($meal->id == $id){
            echo 'found it';
            $meal->quantity +=$quantity;
            return true;
        }
    }
}



