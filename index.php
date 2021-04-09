
<?php
include './include/inc.header.php'
?>
<header id="Home">


    <div class="container landing">
        <p class="mb-5"></p>
        <h1 data-aos="fade-right" data-aos-delay="50"
            data-aos-duration="1000" class="title mt-5">Party Time</h1>

        <div data-aos="fade-right" data-aos-delay="50"
             data-aos-duration="1000" class="offer">
            <div class="shape">
                <div class="shape-text">
                    Buy any 2 burgers and get 1.5L Pepsi Free
                </div>
            </div>
        </div>

        <button data-aos="fade-up-right" data-aos-once="true" data-aos-delay="50"
                data-aos-duration="1000"  id='order'>Order Now</button>
    </div>


</header>

<div class="container">
<?php if(isset($_COOKIE["recent-bought"])){
    $recent = json_decode($_COOKIE["recent-bought"]);

    ?>
    <Section id="recent">
        <h2 class="title">Yor Recent Bought Meals</h2>



        <div class="row justify-content-center ">
            <?php
            foreach ($recent as $COOKIE_Meal){
                $meal = $Meal->getMealById($COOKIE_Meal->id);
                ?>
                <div data-aos="zoom-in-up" data-aos-once="true" data-aos-delay="50"
                     data-aos-duration="1000" class="card p-0 my-2 col-lg-3 col-md-4 col-11">
                    <a href=" detail.php?id=<?php echo  $meal['id']  ?>">
                        <img  src="<?php echo "Images/".$meal['image'] ?>"   class="card-img-top" alt="<?php echo $meal['title']; ?>">
                    </a>

                    <div class="mealInfo ">
                        <div class="d-flex justify-content-between">
                            <p> <?php echo $meal['title'] ?></p>
                            <p class="weight200">⭐️ <?php echo $meal['rating'] ?> rating</p>
                        </div>
                        <p class="weight200"><?php echo $meal['description']  ?></p>
                        <div class="meal-order d-flex justify-content-between">

                            <form action="php/cart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $meal['id'] ?>">
                                <input type="hidden" name="quantity" value="1">
                                <?php
                                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#Gallery";

                                ?>
                                <input type="hidden" name="back" value="<?=$actual_link?>">

                                <button type="submit" id="increment" onClick="increment()">
                                    buy Again
                                </button>
                            </form>

                            <p ><?php echo $meal['price'] ?> SAR</p></div>
                    </div>


                </div>
            <?php } ?>

        </div>


    </Section>
<?php } ?>

</div>

<Section id="Menu">
    <h2 class="title">Want to Eat</h2>
    <p>Try out most delicious food and usually take minutes to deliver</p>


    <div class="menu-links row container mx-auto">
        <a  data-aos="zoom-in" data-aos-once="true" data-aos-delay="50"
            data-aos-duration="1000" class="col my-0 mx-1 p-1" href="">burger</a>
        <a data-aos="zoom-in" data-aos-once="true" data-aos-delay="250"
            data-aos-duration="1000" class="col my-0 mx-1 p-1" href="">pizza</a>
        <a data-aos="zoom-in" data-aos-once="true" data-aos-delay="450"
            data-aos-duration="1000" class="col my-0 mx-1 p-1" href="">fast food</a>
        <a data-aos="zoom-in" data-aos-once="true" data-aos-delay="650"
            data-aos-duration="1000" class="col my-0 mx-1 p-1" href="">cupcake</a>
        <a data-aos="zoom-in" data-aos-once="true" data-aos-delay="850"
            data-aos-duration="1000" class="col my-0 mx-1 p-1" href="">sandwich</a>
        <a data-aos="zoom-in" data-aos-once="true" data-aos-delay="1050"
            data-aos-duration="1000" class="col my-0 mx-1 p-1" href="">spaghetti</a>
    </div>


    <div class="image-background">


        <img data-aos="fade-down-right" data-aos-once="true" data-aos-delay="50"
             data-aos-duration="1500" class="w-100" src="Images/delivery.png" alt="delivery pizza guy" id="pizza-guy">


        <div data-aos="fade-down-left" data-aos-once="true" data-aos-delay="50"
             data-aos-duration="1500">
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
        <p class="text-center">Try out most delicious food and usually take minutes to deliver</p>



        <div class="row justify-content-center ">
            <?php

            $meals = $Meal->getAllMeals();

            foreach ($meals as $key=>$meal) { ?>
            <div data-aos="zoom-in-down"
                 data-aos-anchor-placement="center-bottom"  data-aos-once="true" data-aos-delay="<?php echo 100*$key ?>"
                 data-aos-duration="1500" class="card p-0   my-2 col-lg-2 col-md-4 col-11">

                <a href=" detail.php?id=<?php echo  $meal['id']  ?>">
                    <img  src="<?php echo "Images/".$meal['image'] ?>"   class="card-img-top" alt="<?php echo $meal['title']; ?>">
                </a>

                    <div class="mealInfo">

                        <div class="d-flex justify-content-between">
                            <p> <?php echo $meal['title'] ?></p>
                            <p class="weight200">⭐️ <?php echo $meal['rating'] ?> rating</p>
                        </div>
                       
                        <p class="weight200"><?php echo $meal['description']  ?></p>
                        <div class="meal-order d-flex justify-content-between ">

                            <form action="php/cart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $meal['id'] ?>">
                                <input type="hidden" name="quantity" value="1">
                                <?php
                                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#Gallery";

                                ?>
                                <input type="hidden" name="back" value="<?=$actual_link?>">

                                <button type="submit" id="increment" onClick="increment()">
                                    Add to cart
                                </button>
                            </form>

                            <p ><?php echo $meal['price'] ?> SAR</p></div>
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

