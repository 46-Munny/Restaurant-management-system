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
    <link rel="stylesheet" href="css/ofcregform.css">

  </head>
  <body style="background-image: url('images/ofcr5.jpg'); background-repeat: no-repeat; background-size: cover;">
    <?php require('navbar2.php'); ?>
<div class="container">
  <h2 class=" text-center mt-4 rtext">Registration form for Open Food Corner</h2>
  <br>
  <div class="col-lg-8 m-auto d-block">
    <form class="" action="pageOFC.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        Username:<input type="text" name="username" value=""  class="form-control" placeholder="Enter your name" required>

      </div>
      <div class="form-group">
        Profile Name:<input type="text" name="profilename" value=""  class="form-control" placeholder="Enter your profile name" required>

      </div>
      <div class="form-group">
        Address:<input type="text" name="address" value=""  class="form-control" placeholder="Enter your address" required>

      </div>
      <div class="form-group">
        Phone No:<input type="text" name="phn" value=""  class="form-control" placeholder="Enter your phone no" required>

      </div>
      <div class="form-group">
        Email:<input type="text" name="email" value=""  class="form-control" placeholder="Enter your email" required>

      </div>
      <div class="form-group">
        Profile Image:<input type="file" name="file" value="file" id="file" class="form-control" required>

      </div>
      <div class="form-group">
        Food Image1:<input type="file" name="file1" value="file1" id="file1" class="form-control" required>

      </div>
      <div class="form-group">
        Food Image2:<input type="file" name="file2" value="file2" id="file2" class="form-control" required>

      </div>
      <div class="form-group">
        Food Image3:<input type="file" name="file3" value="file3" id="file3" class="form-control" required>

      </div>
      <div class="form-group">
        Password:<input type="password" name="password" value=""  class="form-control" placeholder="Enter your password" required>

      </div>
      <div class="form-group">
         Confirm Password:<input type="password" name="cpassword" value=""  class="form-control" placeholder="Confirm your password" required>

      </div>

      <input type="submit" name="submit" value="Submit" class="btn btn-primary mb-4">
    </form>
  </div>


</div>

 <?php require('footer.php'); ?>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>
