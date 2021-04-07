<?php
require_once './php/Meal.php';
$Meal = new Meal();

$recentMeals  = "[]";
$hideMe = 'hideME';
if(isset($_COOKIE["recent"])){
    $recentMeals = json_decode($_COOKIE["recent"]);
    $hideMe = '';
}

?>



<div class="container">

<!-- start of recent -->
<Section id="Gallery" class="<?php echo $hideMe ?>">
                <h2 class="title">Your recent bought prodcuts</h2>
             



                <div class="row justify-content-center justify-content-lg-start">
                    <?php
                    foreach ($recentMeals as $meal) { 
                        $mymeal = $Meal->getMealById($meal->id);
                        ?>
                   
                        
                      
                        
                        
                    <div class="card mx-0 my-2 col-lg-3 col-md-4 col-11">
                        <a href=" detail.php?id=<?php echo  $mymeal['id']  ?>">
                            <img  src="<?php echo "Images/".$mymeal['image'] ?>"   class="card-img-top" alt="<?php echo $mymeal['title']; ?>">
                        </a>

                            <div class="mealInfo">
                                <p class="weight200">⭐️ <?php echo $mymeal['rating']?> rating</p>
                                <p> <?php echo $mymeal['title']  ?></p>
                                <p class="weight200"><?php echo $mymeal['description']  ?></p>
                                <div class="meal-order">

                                    <form action="php/cart.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $mymeal['id'] ?>">

                                        <button type="submit" id="increment" onClick="increment()">
                                            Buy again
                                        </button>
                                    </form>
                                    
                                    <p class="weight200"><?php echo $mymeal['price'] ?> SAR</p></div>
                            </div>


                    </div>
                    <?php 
                
                }
                
                ?>

                </div>


                
            </Section>








<!-- end or recent --> 
</div>