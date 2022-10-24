<?php
session_start();
//error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/OFCfood.css">
  </head>
  <body>
  <?php require('navbar2.php'); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-2 mt-5 mb-5">
        <button type="button" name="button" class="btn btn-success">
          <a href="pageOFC.php"class="text-white">OFC</a>
        </button>
      </div>
      <div class="col-lg-6 mt-5 mb-5">

        <form class="" action="" method="post">
          <input type="text" name="searchkey" value="" class="form-control" placeholder="Search by name">
             <input type="hidden" name="rid" value="">

          </div>
          <div class="col-lg-2 mt-5 mb-5">
            <input type="submit" class="btn btn-primary" name="search" value="search">
          </div>

        </form>


    </div>



<div class="row">


    <?php

        require('connection.php');

          if(!isset($_POST['search']))
          {
            $sql1= "select * from regid";
            $result1=mysqli_query($conn,$sql1);
            $n=mysqli_num_rows($result1);
            // echo "n=".$n;
            if($n>0)
            {
                $sql2="delete from regid";
                    if(mysqli_query($conn,$sql2))
                    {
                      echo "";

                    }
                    else{
                      echo"not deleted";
                    }
            }

            $sql4= "select * from regid";
            $result4=mysqli_query($conn,$sql4);
            $n2=mysqli_num_rows($result4);
            //echo "<br />n2=".$n2;
            if($n2==0)
            {
              $rid=$_POST['id'];
            //  echo $rid;
              $sql3="insert into regid values('$rid')";
              if(mysqli_query($conn,$sql3))
              {
                echo "";

              }
              else{
                echo"not inserted";
              }
            }

             $display=" select * from ofcfood inner join regid on regid.id=ofcfood.id";
          }

        if(isset($_POST['search']))
        {


          $searchkey=$_POST['searchkey'];
          $display=" select * from ofcfood inner join regid on regid.id=ofcfood.id where foodName  like '%$searchkey%'";
        }


        $querydisplay=mysqli_query($conn,$display);

        while($result=mysqli_fetch_array($querydisplay))
        {

          ?>

        <div class="col-md-4 mt-3 mb-3">

          <div class="card mt-4">
        <img class="pimg " src="<?php echo $result['foodImg']; ?>" alt="food">
         <div class="card-body">
        <h5 class="card-title text-center"><?php echo "Food ID: ".$result['foodId']; ?></h5>
        <p class=" text-center"><?php echo $result['foodName']; ?></p>
        <h5 class=" text-center text-danger"><?php echo $result['price']."TK."; ?></h5>
        <p class=" text-center"><?php echo $result['rating']; ?><i class="fas fa-star"></i></p>
        <p class=" text-center"><?php echo "Quantity: ".$result['quantity']; ?></p>
        <h5 class=" text-center text-success"><?php echo $result['availability']; ?></h5>
        <form class="" action="pay.php" method="post">
          <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
          <input type="hidden" name="fid" value="<?php echo $result['foodId']; ?>">
          <button type="submit" name="order" style="margin-left:38%;" class=" order btn btn-primary">Order Now</button>
        </form>

      


        </div>
      </div>



        </div>








        <?php
      }


   ?>

</div>


</div>

  </body>
</html>
