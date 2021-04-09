<?php
// get cookie cart
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
require_once './php/Meal.php';
$Meal = new Meal();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
    <title>Happy Meals</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>


<nav class="navbar navbar-expand-lg p-0 navbar-custom  navbar-dark justify-content-spacebetween">
    <a class="navbar-brand " href="#home">
        <img src="./Images/logo-White.svg" alt="">
    </a>

    <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <i class="fas fa-bars"></i>
    </button>
    <div class="ml-auto collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
        <ul class="navbar-nav text-center nav-links">
            <li class="nav-item ">
                <a class="nav-link" name="Home"  href="index.php#Home">Home</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" name="Menu" href="index.php#Menu">Menu</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" name="Gallery" href="index.php#Gallery">Gallery</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" name="Testimonials" href="index.php#Testimonials">Testimonials</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" name="Contact" href="#Contact">Contact Us</a>
            </li>

            <li class="red-link nav-item">
                <a class="nav-link" href="#">Search <i class="fas fa-search"></i></a>
            </li>

            <li class="red-link nav-item">
                <a class="nav-link" href="#">Profile <i class="fas fa-user"></i></a>
            </li>

            <li id="cart" data-toggle="modal" data-target="#cart-modal" class="red-link nav-item">
                <a class="nav-link">Cart <i class="fas fa-shopping-cart"></i> <span
                            id="cart-display"><?php echo count($cart) ?></span> </a>
            </li>

        </ul>
    </div>
</nav>


<!-- Modal -->
<div style="color: black" class="modal fade" id="cart-modal" tabindex="-1" role="dialog"
     aria-labelledby="cart-modalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cart-modalLabel">Cart Meals</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-5 ">


                                <div class="row justify-content-between">
                                    <p>Meal</p>
                                    <p>Price</p>
                                </div>

                                <div id="cart-items">
                                    <?php
                                    $total = 0;
                                    foreach ($cart as $COOKIE_Meal){
                                        $meal = $Meal->getMealById($COOKIE_Meal->id);
                                        $totalPriceForMeal = $meal['price'] * $COOKIE_Meal->quantity;

                                        ?>
                                    <div class="row  justify-content-between">
                                        <p><?php echo $meal['title'] ?> x <?php echo $COOKIE_Meal->quantity ?></p>
                                        <p><?php echo $totalPriceForMeal ?> </p>
                                    </div>
                                    <?php $total+= $totalPriceForMeal; } ?>
                                </div>

                                <div class="row justify-content-between">
                                    <p>Total</p>
                                    <p id="total-display-cart"><?php echo $total ?>$</p>
                                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                <!-- <button id="order-now" type="button" class="btn  btn-warning">Order now</button> -->
                <?php
                $actual_link = "http://$_SERVER[HTTP_HOST]";

                ?>
                <form action="php/order.php" method="post">
                    <input type="hidden" name="total" value="<?= $total ?>">
                    <input type="hidden" name="meals" value="<? $_COOKIE['cart'] ?>">
                    <input type="hidden" name="redirect" value="<?= $actual_link ?>">

                    <input id="order-now" type="submit" class="btn  btn-warning" value="Order now">


                </form>
            </div>
        </div>
    </div>
</div>


