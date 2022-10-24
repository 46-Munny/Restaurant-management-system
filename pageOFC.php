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
    <link rel="stylesheet" href="css/OFC.css">

  </head>
  <body style="  background-color: #eee;">
    <?php require('navbar2.php'); ?>
<div class="container">
  <div class="">
        <div class="alert alert-success text-center mt-3">If you want to create your own profile?<a href="OFCregform.php">click here</a><br>
       If you want to modify your own profile?<a href="OFClogin.php">click here</a><br>
       To see your current order<a href="ofcorder.php">click here</a>
     </div><br>

  </div>
  <?php
  $servername = 'localhost';
  $username='root';
  $password='';
  $dbname='restaurantdb';
  $con=mysqli_connect($servername, $username, $password, $dbname);

   if(isset($_POST['submit']))
   {
     $username=$_POST['username'];
     $profilename=$_POST['profilename'];
     $address=$_POST['address'];
     $phnNo=$_POST['phn'];
     $email=$_POST['email'];
     $files=$_FILES['file'];
     $files1=$_FILES['file1'];
     $files2=$_FILES['file2'];
     $files3=$_FILES['file3'];
     $password=$_POST['password'];


      $filename=$files['name'];
      $fileerror=$files['error'];
      $filetmp=$files['tmp_name'];

      $filename1=$files1['name'];
      $fileerror1=$files1['error'];
      $filetmp1=$files1['tmp_name'];

      $filename2=$files2['name'];
      $fileerror2=$files2['error'];
      $filetmp2=$files2['tmp_name'];

      $filename3=$files3['name'];
      $fileerror3=$files3['error'];
      $filetmp3=$files3['tmp_name'];

      $fileext=explode('.',$filename);
      $filecheck=strtolower(end($fileext));
      $fileextstored = array('png','jpg','jpeg' );

      $fileext1=explode('.',$filename1);
      $filecheck1=strtolower(end($fileext1));
      $fileextstored1 = array('png','jpg','jpeg' );

      $fileext2=explode('.',$filename2);
      $filecheck2=strtolower(end($fileext2));
      $fileextstored2 = array('png','jpg','jpeg' );

      $fileext3=explode('.',$filename3);
      $filecheck3=strtolower(end($fileext3));
      $fileextstored3 = array('png','jpg','jpeg' );

      if(in_array($filecheck,$fileextstored ))
      {
        $destinationfile='upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
      }

      if(in_array($filecheck1,$fileextstored1 ))
      {
        $destinationfile1='upload/'.$filename1;
        move_uploaded_file($filetmp1,$destinationfile1);
      }

      if(in_array($filecheck2,$fileextstored2))
      {
        $destinationfile2='upload/'.$filename2;
        move_uploaded_file($filetmp2,$destinationfile2);
      }
      if(in_array($filecheck3,$fileextstored3 ))
      {
        $destinationfile3='upload/'.$filename3;
        move_uploaded_file($filetmp3,$destinationfile3);
      }

      $a=substr($username,0,3);
      $b=substr($address,0,3);
      $d=date('d');
      $m=date('m');
      $y=date('y');
       $id=$a.$b.$d.$m.$y;



       echo " <div class=\"alert alert-danger text-center \">
        Your id number is:".$id."</div>";

        $query=mysqli_query($con,"insert into openfood values('$id','$username','$profilename','$address','$phnNo','$email','$destinationfile','$destinationfile1','$destinationfile2','$destinationfile3','$password')");

         if($query)
         {
           echo "";
         }

         else{
           echo"not inserted";
           echo mysqli_error($con);
         }

       }

   ?>
  <div class="row">
    <?php



        $display="select * from openfood";
        $querydisplay=mysqli_query($con,$display);

        while($result=mysqli_fetch_array($querydisplay))
        {

          ?>
    <div class="col-lg-1">


    </div>

      <div class="col-lg-10 mt-3 mb-3">

        <div class="card mt-4">
      <img class="pimg " src="<?php echo $result['profileImg']; ?>" alt="Card image cap">
       <div class="card-body">
      <h5 class="card-title text-center"><?php echo $result['profileName']; ?></h5>
      <p class=" text-center"><?php echo $result['username']; ?></p>
      <p class=" text-center"><i class="fas fa-home mr-1"></i><?php echo $result['address']; ?></p>
      <p class=" text-center"><i class="fas fa-phone-square mr-1 "></i><?php echo $result['phnNo']; ?></p>
      <p class=" text-center"><i class="fas fa-envelope mr-1 "></i><?php echo $result['email']; ?></p>
      <div class="row">
        <div class="col-lg-4">
          <img src="<?php echo $result['foodImg1']; ?>" alt="" class="banner" >
        </div>
        <div class="col-lg-4">
          <img src="<?php echo $result['foodImg2']; ?>" alt="" class="banner">
        </div>
        <div class="col-lg-4">
          <img src="<?php echo $result['foodImg3']; ?>" alt="" class="banner">
        </div>
      </div>
    </div>

  <form class="" action="OFCfood.php" method="post">

     <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
     <input type="submit" class="btn btn-primary button1"name="morefoods" value="More Foods">

  </form>

      </div>



      </div>

        <div class="col-lg-1">

        </div>

        <?php
      }


   ?>

  </div>



</div>


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>
