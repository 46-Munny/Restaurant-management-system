<?php
$servername = 'localhost';
$username='root';
$password='';
$dbname='restaurantdb';
$con=mysqli_connect($servername, $username, $password, $dbname);





 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="main.css">
    
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet">

</head>
<body>




    <!---Menu Section---=========-->
   <section class="menu" id="menu">




       <article class="menu-image"></article>
       <article class="menu-text">
           <div class="menu-text-center">
               <h1>Our Menu</h1>
               <p> We are <b>FOODFUN</b>.
               	<br> We offer Bengali food. like Rice, Beef, Mutton, Chicken, Fish, Desserts, Drinks with Bengali fusion
               	<br>Click the button and explore our menu.</p>
                <a href="#food">Explore</a>
           </div>
       </article>
   </section>
   <!---End of Menu Section============-->
   <!----------============Counter / Numbers-===================-->
      <section id="numbers">
       <article class="number">
           <i class="fas fa-stroopwafel"></i>
           <p>7</p>
          <h3><a href="rice.php">Rice Dishes</a></h3>
        </article>
        <article class="number">
            <i class="fas fa-drumstick-bite"></i>
            <p>35</p>
           <h3><a href="meat.php">Meat Dishes</a></h3>
         </article>
         <article class="number">
            <i class="fas fa-fish"></i>
            <p>20</p>
          <h3><a href="fish.php">Fish Dishes</a></h3>
         </article>
         <article class="number">
            <i class="fas fa-ice-cream"></i>
            <p>20</p>
          <h3><a href="desserts.php">Desserts</a></h3>
         </article>
         <article class="number">
            <i class="fas fa-mug-hot"></i>
            <p>50</p>
          <h3><a href="drinks.php">Drinks</a></h3>
         </article>
   </section>
   <!--End of Counter===================-->
   <!--=======-----------Card Section-----====================-->
   <section id="food">
       <div>
       <h2 style="color:white;" class="title-text">  Daily Meal </h2>
        </div>




             <div class="food-container">

                     <!--======Card Start ----============-->



                                <?php
                                $sql= "select * from admincategory where categoryName='Daily Meal'";
                                $querydisplay=mysqli_query($con,$sql);
                                while($result=mysqli_fetch_array($querydisplay))
                                {
                                  if($result['status']=='Active')
                                  {



                                 ?>
             <article class="food-card">
                     <img src="<?php echo $result['scategoryImage']; ?>" class="food-img"alt="">
                     <div class="img-text">
                         <h1><?php echo $result['scategoryName']; ?></h1>
                     </div>
                     <div class="img-footer">

                         <div class="footer-btn">
                           <button type="button"class="food-btn"><a href="<?php echo $result['scategoryPage']; ?>">See More...</a></button>
                         </div>
                     </div>
                     </article>
                     <?php

                   }
                 }
                      ?>

              </div>









   </section>
       <!--======End of Card =========-->

     <!--=====End of Card Section=================-->

     <!--Regional Card --->
     <section id="food">
         <div>
         <h2  style="color:white;" class="title-text">  Bengali Regional Fusion </h2>
          </div>




               <div class="food-container">

                       <!--======Card Start ----============-->



                                  <?php
                                  $sql2= "select * from admincategory where categoryName='Regional Meal'";
                                  $querydisplay2=mysqli_query($con,$sql2);
                                  while($result2=mysqli_fetch_array($querydisplay2))
                                  {
                                    if($result2['status']=='Active')
                                    {




                                   ?>
               <article class="food-card">
                       <img src="<?php echo $result2['scategoryImage']; ?>" class="food-img"alt="">
                       <div class="img-text">
                           <h1><?php echo $result2['scategoryName']; ?></h1>
                       </div>
                       <div class="img-footer">

                           <div class="footer-btn">
                             <button type="button"class="food-btn"><a href="<?php echo $result2['scategoryPage']; ?>">See More...</a></button>
                           </div>
                       </div>
                       </article>
                       <?php
                     }

                     }
                        ?>

                </div>









     </section>
   <!--- Regional Card End --->

   <!-- Healthy Food-->

   <section id="food">
       <div>
       <h2 style="color:white;" class="title-text"> Healthy Food </h2>
        </div>




             <div class="food-container">





                                <?php
                                $sql3= "select * from admincategory where categoryName='Healthy Food'";
                                $querydisplay3=mysqli_query($con,$sql3);
                                while($result3=mysqli_fetch_array($querydisplay3))
                                {
                                  if($result3['status']=='Active')
                                  {




                                 ?>
             <article class="food-card">
                     <img src="<?php echo $result3['scategoryImage']; ?>" class="food-img"alt="">
                     <div class="img-text">
                         <h1><?php echo $result3['scategoryName']; ?></h1>
                     </div>
                     <div class="img-footer">

                         <div class="footer-btn">
                           <button type="button"class="food-btn"><a href="<?php echo $result3['scategoryPage']; ?>">See More...</a></button>
                         </div>
                     </div>
                     </article>
                     <?php
                   }

                   }
                      ?>

              </div>









   </section>

   <!-- End of Healthy Food--->

</body>
</html>
