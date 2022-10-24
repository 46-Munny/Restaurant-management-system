<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/regform.css">
  </head>
  <body style="background-image: url('images/reg.jpg'); background-repeat: no-repeat; background-size: cover;">
    <nav class="navbar navbar-expand-lg ">
      <a class="navbar-brand" href="#">FoodFun</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">

            <a class="nav-link" href="/Restuproject/index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Restuproject/admin/index.php">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Restuproject/pageOFC.php">OpenFoodCorner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Restuproject/Orphanage Funnd/Orphanage Funnd/index.php">OrphanageFund</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Restuproject/contact.php">Contact</a>
          </li>
          <?php

            if (isset($_SESSION['Uname'])) {
              echo ' <li class="nav-item"><a class="nav-link" href="login.php">Hi, '.$_SESSION['Uname'].'</a></li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>';
            } else {
              echo ' <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="regform.php">Registration</a>
              </li>'
            ;
            }

          ?>

        </ul>

      </div>
    </nav>



  <div class="container">
    <div class="row">
      <div class="col-md-6">

      </div>
      <div class="col-md-6">
        <h1 class="tag">Sign Up</h1>
        <form class="" action="" method="post">

        <div class="col-md-9" >
          <input type="text" name="fullName" class="form-control input" value="" placeholder="Enter your name">
        </div>

      <div class="col-md-9">
        <input type="text" name="email" class="form-control input" value="" placeholder="Enter your email">
      </div>

      <div class="col-md-9">
        <input type="text" name="age" class="form-control input" value="" placeholder="Enter your age">
      </div>

      <div class="col-md-9">
        <input type="text" name="address" class="form-control input" value="" placeholder="Enter your address">
      </div>

      <div class="col-md-9">
        <input type="password" name="passward" class="form-control input" value="" placeholder="Enter your password">
      </div>

      <div class="col-md-9">
        <input type="password" name="confirmPassward" class="form-control input" value="" placeholder="Enter your passaword again">
      </div>

      <div class="col-md-4 mb-3">
      	<input class="btn btn-primary m-auto btn-block " type="submit" name="submit" value="Create a Account">
      </div>
        </form>

        <div class="col-md-9">
            <?php
            require('connection.php');

            if(isset($_POST['submit'])){

              $email=$_POST['email'];
              $fullName=$_POST['fullName'];
              $age=$_POST['age'];
              $address=$_POST['address'];
              $passward=$_POST['passward'];
              $confirmPassward=$_POST['confirmPassward'];

              if($fullName=="")
              {
                echo " <div class=\"alert alert-danger text-center \">
                 *Please fill up your name.
                </div>";
              }

              if($email=="")
              {
                echo " <div class=\"alert alert-danger text-center\">
                 *Please fill up your email.
                </div>";
              }
              if($age=="")
              {
                echo " <div class=\"alert alert-danger text-center\">
                 *Please fill up your age.
                </div>";
              }
              if($address=="")
              {
                echo " <div class=\"alert alert-danger text-center\">
                 *Please fill up your address.
                </div>";
              }
              if($passward=="")
              {
                echo " <div class=\"alert alert-danger text-center\">
                 *Please fill up your passward.
                </div>";
              }
              if($confirmPassward=="")
              {
                echo " <div class=\"alert alert-danger text-center\">
                 *Please confirm your passward.
                </div>";
              }

              if($passward!=$confirmPassward)
              {
                echo " <div class=\"alert alert-danger text-center\">
                 *Your passwar doesn't match.
                </div>";
              }

              if($email!=""&&$fullName!=""&&$age!=""&&$address!=""&&$passward!=""&&$confirmPassward!=""&&$passward==$confirmPassward)
              {
                $sql= "insert into user values('$fullName','$email','$age','$address','$passward')";
                if(mysqli_query($conn,$sql))
                {
                  echo " <div class=\"alert alert-success text-center\">
                   Your account created successfully.
                  </div>";
                }
                else {
                  echo " <div class=\"alert alert-danger text-center\">
                   *Something wrong.
                  </div>";
                }
              }

            }




            ?>

        </div>

        <div class="col-md-9">
        	<p class="mt-3">If you have already a account.
            <a href="login.php">Login.</a>
          </p>
        </div>


      </div>



    </div>

  </div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>
