<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
    <title>Meal 1</title>

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<body>



<!--<nav style="background-color: #281923;-->
<!--    opacity: 61%;"  class=" navbar navbar-expand-lg navbar-dark justify-content-spacebetween">-->
<!--    <a class="navbar-brand " href="#">-->
<!--        <img  src="./Images/logo-White.svg" alt="">-->
<!--    </a>-->
<!---->
<!--    <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">-->
<!--        <i class="fas fa-bars"></i>-->
<!--    </button>-->
<!--    <div class="ml-auto collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">-->
<!--        <ul class="navbar-nav text-center nav-links">-->
<!--            <li class="nav-item " >-->
<!--                <a class="nav-link" href="index.php">Home</a>-->
<!--            </li>-->
<!---->
<!--            <li class="nav-item " >-->
<!--                <a class="nav-link" href="#Menu">Menu</a></a>-->
<!--            </li>-->
<!---->
<!--            <li class="nav-item " >-->
<!--                <a class="nav-link" href="#Gallery">Gallery</a></a>-->
<!--            </li>-->
<!---->
<!--            <li class="nav-item " >-->
<!--                <a class="nav-link" href="#Testimonials">Testimonials</a></a>-->
<!--            </li>-->
<!---->
<!--            <li class="nav-item " >-->
<!--                <a class="nav-link" href="#Contact">Contact Us</a></a>-->
<!--            </li>-->
<!---->
<!--            <li class="red-link nav-item">-->
<!--                <a class="nav-link" href="#">Search</a>-->
<!--            </li>-->
<!---->
<!--            <li class="red-link nav-item">-->
<!--                <a class="nav-link" href="#">Profile</a>-->
<!--            </li>-->
<!---->
<!--            <li class="red-link nav-item">-->
<!--                <a class="nav-link" href="#">Cart <span id="cart-display">0</span></a>-->
<!--            </li>-->
<!---->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->

<?php
include "./include/inc.header.php";
?>

<div class="container">

    <section id="meal-info">

        <div class="flex">
            <img class="img" src="Images/meal1.png" alt="delivery pizza guy">

            <div>
                <h1 class='title'>Best Sandwich</h1>
                <p id="price">24 SAR</p>
                <p>⭐️ 4.5 rating</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laborum minima nobis quia.
                    Adipisci dolor
                    laboriosam omnis quis suscipit totam!</p>
                <div class="flex ">
                    <div class="quantity-buttons">
                        <button onclick="decrementQuantity()">-</button>
                        <button id="quantity-display">1</button>
                        <button onclick="incrementQuantity()">+</button>
                    </div>
                    <input onclick="addQuantityToCart()" class="yellow-button" type="button" value="add to cart">
                </div>
            </div>

        </div>


    <!-- <div class="container  align-items-start"></div> -->

        <ul class="nav nav-tabs d-flex justify-content-start ">
            <li class="active tab "><a data-toggle="tab" href="#desc"><h2 class="title   my-tabs">Description</h2></a></li>
            <li class="tab"> <a data-toggle="tab" href="#menu1"><h2 class="title  my-tabs">Reviews</h2></a></li>
          </ul>

    <!-- here -->


    <div class="tab-content ">
        <div id="desc" class="tab-pane  active in ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti, dolorum ipsum laboriosam
                    maiores quae rem vel voluptatum! Explicabo facere harum iste
                    neque optio quia ratione recusandae tenetur veniam? Voluptatem.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consectetur deserunt dolore,
                    eveniet
                    excepturi explicabo laboriosam perspiciatis sunt totam velit.
                </p>



                <section id="nutrition-facts ">
                    <h4>Nutrition Facts</h4>

                    <table>
                        <tr>
                            <td colspan="3"><strong>Supplement Facts</strong></td>

                        </tr>

                        <tr class="row-coloring">

                            <td colspan="3"><strong>Serving Size:</strong> 1 Cookie (57g)</td>

                        </tr>

                        <tr>
                            <td colspan="3"><strong>Serving Per Container:</strong> 12</td>
                        </tr>


                        <tr class="row-coloring">
                            <td></td>
                            <td><strong>Amount Per Serving</strong></td>
                            <td><strong>%Daily Value*</strong></td>
                        </tr>

                        <tr>
                            <td>Calories</td>
                            <td>200</td>
                            <td></td>
                        </tr>
                        <tr class="row-coloring">
                            <td>Calories from Fat</td>
                            <td>70</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Total Fat</td>
                            <td>7 g</td>
                            <td>11%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Saturated Fat</td>
                            <td>4 g</td>
                            <td>20%</td>
                        </tr>

                        <tr>
                            <td>Trans Fat</td>
                            <td>0</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Cholesterol</td>
                            <td>0 g</td>
                            <td>0%</td>
                        </tr>

                        <tr>
                            <td>Sodium</td>
                            <td>220 g</td>
                            <td>9%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Total Carbohydrate</td>
                            <td>31 g</td>
                            <td>10%</td>
                        </tr>

                        <tr>
                            <td>Dietary Fiber</td>
                            <td>5g</td>
                            <td>20%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Sugars</td>
                            <td>12 g</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Sugar Alcohol</td>
                            <td>0 g</td>
                            <td></td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Protein</td>
                            <td>8 g</td>
                            <td>8%</td>
                        </tr>

                        <tr>
                            <td>Vitamin A</td>
                            <td></td>
                            <td>0%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Vitamin C</td>
                            <td></td>
                            <td>0%</td>
                        </tr>

                        <tr>
                            <td>Calcium</td>
                            <td></td>
                            <td>2%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Iron</td>
                            <td></td>
                            <td>10%</td>
                        </tr>

                        <tr>

                            <td colspan="3">* Percent Daily Values are based on a 2.000 calorie dieL Your daily values may be higher
                                or
                                lower depending on your calorie needs
                            </td>

                        </tr>

                    </table>

                </section>




            </div>
            <div id="menu1" class="tab-pane fade">
            <!-- review -->

            <section id="review">

                <div class="row flex">

                        <div class="col-lg-6 col-md-12 align-self-center">
                            <img class="img" src="Images/man-eating-burger.png" alt="man-eating-burger">
                        </div>
                        <div class="col-lg-6 col-sm-12  align-self-center">
                            <h4>reviewer name</h4>
                            <h5>Dhahran-Feb08,2020 ⭐️⭐️⭐️⭐️⭐️</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ad natus officiis optio excepturi
                                dignissimos, minima quaerat, quo vitae, veritatis corrupti fugiat sed ipsam pariatur nemo harum
                                error sunt
                                voluptatibus!</p>
                        </div>

                </div>

                <button class="yellow-button" id="addRevBtn">Add your Review</button>

                <div id="formWrapper">
                    <form method="GET" action="detail.php" id="form" class="hide" >

                        <div>
                            <label for="file">Image</label>
                            <input type="file" id="file" name="myFile">
                        </div>

                        <div>
                            <label for="rate">Rate the Food</label>
                            <input type="range" id="rate" name="rate" min="0" max="5" value="3" list="tickmarks">
                        </div>

                        <div>
                            <datalist id="tickmarks">
                                <option value="1"></option>
                                <option value="2"></option>
                                <option value="3"></option>
                                <option value="4"></option>
                                <option value="5"></option>
                            </datalist>

                        </div>

                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="First and Last Name">
                        </div>

                        <div>
                            <label for="feedback">Review</label>
                            <h4 id="msgForEmptyForm" class="hide" >Type your review</h4>
                            <textarea maxlength="500" placeholder="Type your review here 500 character max" name="feedback" id="feedback" cols="30" rows="10" onkeypress="removeErrorMessage()"></textarea>
                            <div id="counter">0/500</div>
                        </div>

                            <div>
                             <input class="yellow-button" type="button" onclick="validateForm()" value="Submit">
                            </div>
                        </form>
                    </div>


                </section>

            </div>
        </div>
    <!-- </div> -->




    </section>






    </div>

</div>

<Section id="Contact">


    <div class="info">

        <div class="info-item">
            phone:<strong>+966531381813</strong>
        </div>


        <div class="info-item">
            <img class="icon" src="Images/clock.svg" alt="clock">
            <p class="weight200">Sun-thr 11:00-23:00
                <br>
                fri-sat 12:00-23</p>
        </div>

        <div class="info-item">
            <img class="icon" src="Images/placeholder.svg" alt="placeholder">
            <p class="weight200">123 KFUPM Studemts Mall
                <br>
                Dhahran 34464
            </p>
        </div>

        <div class="social info-item">
            <a href="">facebook</a>
            <a href="">Twitter</a>
            <a href="">Instagram</a>
        </div>


    </div>


    <img src="Images/map.png" alt="">
</Section>


<footer class="mx-md-5 mx-2 row">

    <div class="about col-lg-4 col-sm-11">
        <img src="Images/logo-red.svg" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, aperiam possimus quia, in impedit
            doloribus quidem corporis animi aliquid ab delectus nam repudiandae sapiente iure asperiores eveniet
            repellat suscipit voluptates?</p>
    </div>

    <div class="useful-links col-lg-4 col-md-6 col-sm-12">
        <h3 class="title">USEFUL LINKS</h3>
        <ul class="footer-links">
            <li><a href="">About</a></li>
            <li><a href="#Menu">Menu</a></li>
            <li><a href="#Testimonials">Testimonials</a></li>
            <li><a href="#Contact">Contact Us</a></li>
        </ul>
    </div>

    <div class="feeds col-lg-4 col-md-6 col-sm-12">
        <h3 class="title">INSTAGRAM FEEDS</h3>

        <div class="grid-gallery">
            <a href="#"><img src="Images/meal1.png" alt=""></a>
            <a href="#"><img src="Images/meal2.png" alt=""></a>
            <a href="#"><img src="Images/meal3.png" alt=""></a>
            <a href="#"><img src="Images/meal4.png" alt=""></a>
            <a href="#"><img src="Images/meal5.png" alt=""></a>
            <a href="#"><img src="Images/meal6.png" alt=""></a>

        </div>
    </div>

</footer>
<script type="text/javascript" src="js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>