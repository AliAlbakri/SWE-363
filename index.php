<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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


<?php
include './include/inc.header.php'
?>

<Section id="Menu">
    <h2 class="title">Want to Eat</h2>
    <p>Try out most delicious food and usually take minutes to deliver</p>


    <div class="menu-links row container mx-auto">
        <a class="col my-0 mx-1 p-1" href="">burger</a>
        <a class="col my-0 mx-1 p-1" href="">pizza</a>
        <a class="col my-0 mx-1 p-1" href="">fast food</a>
        <a class="col my-0 mx-1 p-1" href="">cupcake</a>
        <a class="col my-0 mx-1 p-1" href="">sandwich</a>
        <a class="col my-0 mx-1 p-1" href="">spaghetti</a>
    </div>


    <div class="image-background">


        <img class="w-100" src="Images/delivery.png" alt="delivery pizza guy" id="pizza-guy">


        <div>
            <div class="Tshape">
                <div class="Tshape-text">
                    <h2><strong>guarantee 30 minutes delivery</strong></h2>
                </div>
            </div>
            <p id="ttt"> If your are having a meeting working late at night and need an extra push</p>

        </div>

    </div>


</Section>


<div class="container">

    <Section id="Gallery">
        <h2 class="title">Our most popular recipes</h2>
        <p>Try out most delicious food and usually take minutes to deliver</p>


        <div class="row justify-content-center justify-content-lg-start">
            <?php
            include './php/Meal.php';
            $meal = new Meal();
            $meals = $meal->getAllMeals();

            foreach ($meals as $meal) { ?>
            <div class="card mx-0 my-2 col-lg-3 col-md-4 col-11">
                <a href="<?php echo "detail&id?".  $meal['id']  ?>">
                    <img  src="<?php echo "Images/".$meal['image'] ?>"   class="card-img-top" alt="<?php echo $meal['title']; ?>">
                </a>

                    <div class="mealInfo">
                        <p class="weight200">⭐️ <?php echo $meal['rating']?> rating</p>
                        <p> <?php echo $meal['title']  ?></p>
                        <p class="weight200"><?php echo $meal['description']  ?></p>
                        <div class="meal-order">
                            <button name="<?php echo $meal['title']  ?>" onclick="incrementCart(event)" id="increment" onClick="increment()">Add
                                to cart
                            </button>
                            <p class="weight200"><?php echo $meal['price'] ?> SAR</p></div>
                    </div>


            </div>
            <?php } ?>

        </div>


    </Section>


    <Section id="Testimonials">
        <h2 class="title"> Clients Testimonials</h2>

        <div class="Testimonials-content">

            <div class="row justify-content-center align-items-center">

                <div id="carouselExampleIndicators" class="carousel slide col-lg-6 col-sm-11 " data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Images/man-eating-burger.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Images/man-eating-burger.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Images/man-eating-burger.png" alt="Second slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>


                </div>
                <p class="col-lg-6 col-sm-11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nam aut
                    deserunt minus-->
                    provident aliquid
                    maxime
                    et? Nisi incidunt laborum beatae debitis. Voluptatibus, qui recusandae assumenda a
                    minima vero
                    quasi.</p>

            </div>


        </div>

    </Section>

</div>

<?php include './include/inc.footer.php' ?>


<script type="text/javascript" src="js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>


</body>
</html>
