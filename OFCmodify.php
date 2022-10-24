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
    <link rel="stylesheet" href="css/OFCmodify.css">
  </head>
  <body >
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

    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <h1 class="tag">Update Your Info</h1>
        <form class="" action="OFCmodify.php" method="post" enctype="multipart/form-data">


          <div class="form-group">
            Username:<input type="text" name="username" value=""  class="form-control input" placeholder="Enter your name">

          </div>
          <div class="form-group">
            Profile Name:<input type="text" name="profilename" value=""  class="form-control input" placeholder="Enter your profile name">

          </div>
          <div class="form-group">
            Address:<input type="text" name="address" value="" class="form-control input" placeholder="Enter your address">

          </div>
          <div class="form-group">
            Phone No:<input type="text" name="phn" value=""  class="form-control input" placeholder="Enter your phone no">

          </div>
          <div class="form-group">
            Email:<input type="text" name="email" value="" class="form-control input" placeholder="Enter your email">

          </div>
          <div class="form-group">
            Profile Image:<input type="file" name="pimg" value=""  class="form-control  input">

          </div>
          <div class="form-group">
            Food Image1:<input type="file" name="img1" value=""  class="form-control input">

          </div>
          <div class="form-group">
            Food Image2:<input type="file" name="img2" value=""  class="form-control input">

          </div>
          <div class="form-group">
            Food Image3:<input type="file" name="img3" value=""  class="form-control input">

          </div>
          <div class="form-group">
            Password:<input type="password" name="password" value=""  class="form-control input" placeholder="Enter your password">

          </div>
          <div class="form-group">
             Confirm Password:<input type="password" name="cpassword" value=""  class="form-control  input" placeholder="Enter your confirm password">

          </div>



      	<input class="btn btn-primary m-auto btn-block " type="submit" name="updateInfo" value="Update">

    </form>
    <?php
    require('connection.php');
  $id=$_SESSION["ofcId"];

  if(isset($_POST['updateInfo']))
  {
     $uname=$_POST['username'];
      $pname=$_POST['profilename'];
     $address=$_POST['address'];
      $phnNo=$_POST['phn'];
      $email=$_POST['email'];
      $files=$_FILES['pimg'];
      $files1=$_FILES['img1'];
      $files2=$_FILES['img2'];
      $files3=$_FILES['img3'];
      $password=$_POST['password'];

      if($uname=="")
      {
        echo "<br /> <div class=\"alert alert-danger text-center \">
         *Please fill up your name.
        </div>";
      }
      if($pname=="")
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please fill up your profile name.
        </div>";
      }
      if($address=="")
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please fill up your address.
        </div>";
      }
      if($phnNo=="")
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please fill up your phone no.
        </div>";
      }
      if($email=="")
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please fill up your email.
        </div>";
      }

      if($files['error']==4)
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please choose your profile image.
        </div>";
      }

      if($files1['error']==4)
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please choose your food image1.
        </div>";
      }
      if($files2['error']==4)
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please choose your food image2.
        </div>";
      }
      if($files3['error']==4)
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please choose your food image3.
        </div>";
      }
      if($password=="")
      {
        echo " <div class=\"alert alert-danger text-center \">
         *Please fill up your .
        </div>";
      }


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


      if($uname!=""&&$pname!="" && $address!="" && $phnNo!="" && $email!="" && $password==$_POST['cpassword'] && $files['error']!=4 && $files1['error']!=4&& $files2['error']!=4&& $files3['error']!=4)
        {
         $sql1="update openfood set username='$uname',profileName='$pname',address='$address',phnNo='$phnNo',email='$email',profileImg='$destinationfile',foodImg1='$destinationfile1',foodImg2='$destinationfile2',foodImg3='$destinationfile3',password='$password'
         where id='$id'";

         if(mysqli_query($conn,$sql1))
         {
           echo "<br /> <div class=\"alert alert-success text-center \">
            Your information is updated successfully .
           </div>";
         }
         else {
           echo "<br /> <div class=\"alert alert-danger text-center \">
            Your information do not updated .
           </div>";
         }
       }
     }




     ?>




     <h1 class="tag2">Delete Your Profile</h1>
   <form class="" action="OFCmodify.php" method="post" enctype="multipart/form-data">
     <div class="form-group">
       Profile Id:<input type="text" name="pid" value=""  class="form-control input" placeholder="Enter your profile id">

     </div>

         <input class="btn btn-primary m-auto btn-block " type="submit" name="delete1" value="Delete">
   </form>

   <?php


                if(isset($_POST['delete1']))
                {
                  $pid=$_POST['pid'];

                  if($pid=="")
                  {
                    echo " <br /><div class=\"alert alert-danger text-center \">
                     *Please fill up your profile id.
                    </div>";
                  }
                  if($pid!="")
                    {
                      $sql8="delete from openfood where id='$id' and id='$pid'";

                     if(mysqli_query($conn,$sql8))
                     {
                       echo " <br /><div class=\"alert alert-success text-center \">
                        Your profile is deleted successfully .
                       </div>";
                     }
                     else {
                       echo " <br /><div class=\"alert alert-danger text-center \">
                         Your profile does not delete .
                       </div>";
                     }
                   }

                }



    ?>



      <h1 class="tag2">Insert Food Info</h1>
    <form class="" action="OFCmodify.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        Food Id:<input type="text" name="fid" value=""  class="form-control input" placeholder="Enter your food id">

      </div>
      <div class="form-group">
        Food Name:<input type="text" name="fname" value=""  class="form-control input" placeholder="Enter your food name">

      </div>

      <div class="form-group">
        Food Image:<input type="file" name="fimg" value=""  class="form-control input">

      </div>
      <div class="form-group">
        Food Price:<input type="text" name="fprice" value=""  class="form-control input" placeholder="Enter your food price">

      </div>

      <div class="form-group">
        Food Rating:<input type="text" name="frating" value=""  class="form-control input" placeholder="Enter your food rating">

      </div>
      <div class="form-group">
        Food Quantity:<input type="text" name="fquantity" value=""  class="form-control input" placeholder="Enter your food quantity">

      </div>

         	<input class="btn btn-primary m-auto btn-block " type="submit" name="insert" value="Insert">
    </form>

    <?php

    if(isset($_POST['insert']))
    {
      $fid=$_POST['fid'];
       $fname=$_POST['fname'];
        $fquantity=$_POST['fquantity'];
         $frating=$_POST['frating'];
         $files4=$_FILES['fimg'];
         $fprice=$_POST['fprice'];


         if($fid=="")
         {
           echo " <br /><div class=\"alert alert-danger text-center \">
            *Please fill up your food id.
           </div>";
         }
         if($fname=="")
         {
           echo " <div class=\"alert alert-danger text-center \">
            *Please fill up your food name.
           </div>";
         }

         if($files4['error']==4)
         {
           echo " <div class=\"alert alert-danger text-center \">
            *Please choose your food image.
           </div>";
         }

         if($fprice=="")
         {
           echo " <div class=\"alert alert-danger text-center \">
            *Please fill up your food price.
           </div>";
         }


         if($frating=="")
         {
           echo " <div class=\"alert alert-danger text-center \">
            *Please fill up your food rating.
           </div>";
         }
         if($fquantity=="")
         {
           echo " <div class=\"alert alert-danger text-center \">
            *Please fill up your food quantity.
           </div>";
         }
         $filename4=$files4['name'];
         $fileerror4=$files4['error'];
         $filetmp4=$files4['tmp_name'];


         $fileext4=explode('.',$filename4);
         $filecheck4=strtolower(end($fileext4));
         $fileextstored4 = array('png','jpg','jpeg' );


         if(in_array($filecheck4,$fileextstored4 ))
         {
           $destinationfile4='upload/'.$filename4;
           move_uploaded_file($filetmp4,$destinationfile4);
         }


         if($fid!=""&&$fname!="" && $frating!="" && $fquantity!="" && $files4['error']!=4)
           {
            $foodquantity=(int)$fquantity;
            $availablity="";
            if($foodquantity>0)
            {
              $availablity="Available";
            }
            else{
              $availablity="Not available";
            }



            $sql1="insert into ofcfood values('$id','$fid','$fname','$destinationfile4','$frating','$foodquantity','$availablity','$fprice')";

            if(mysqli_query($conn,$sql1))
            {
              echo " <br /><div class=\"alert alert-success text-center \">
               Food information is inserted successfully .
              </div>";
            }
            else {
              echo "<br /> <div class=\"alert alert-danger text-center \">
               Food information does not insert .
              </div>";
            }
          }

    }



     ?>

    <h1 class="tag2">Delete Food Info</h1>
  <form class="" action="OFCmodify.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      Food Id:<input type="text" name="ffid" value=""  class="form-control input" placeholder="Enter your food id">

    </div>

        <input class="btn btn-primary m-auto btn-block " type="submit" name="delete" value="Delete">
  </form>

  <?php


               if(isset($_POST['delete']))
               {
                 $fid=$_POST['ffid'];

                 if($fid=="")
                 {
                   echo " <br /><div class=\"alert alert-danger text-center \">
                    *Please fill up your food id.
                   </div>";
                 }
                 if($fid!="")
                   {
                     $sql1="delete from ofcfood where id='$id' and foodId='$fid'";

                    if(mysqli_query($conn,$sql1))
                    {
                      echo " <br /><div class=\"alert alert-success text-center \">
                       Food information is deleted successfully .
                      </div>";
                    }
                    else {
                      echo " <br /><div class=\"alert alert-danger text-center \">
                       Food information does not delete .
                      </div>";
                    }
                  }

               }



   ?>


  <h1 class="tag2">Update Food Info</h1>
<form class="" action="OFCmodify.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    Food Id:<input type="text" name="foodid" value=""  class="form-control input" placeholder="Enter your food id">

  </div>
  <div class="form-group">
    Food Name:<input type="text" name="foodname" value=""  class="form-control input" placeholder="Enter your food name">

  </div>

  <div class="form-group">
    Food Image:<input type="file" name="foodimg" value=""  class="form-control input">

  </div>

  <div class="form-group">
    Food Price:<input type="text" name="foodprice" value=""  class="form-control input" placeholder="Enter your food price">

  </div>


  <div class="form-group">
    Food Rating:<input type="text" name="foodrating" value=""  class="form-control input" placeholder="Enter your food rating">

  </div>
  <div class="form-group">
    Food Quantity:<input type="text" name="ffquantity" value=""  class="form-control input" placeholder="Enter your food quantity">

  </div>

      <input class="btn btn-primary m-auto btn-block " type="submit" name="update" value="Update">
</form>


       <?php



                          if(isset($_POST['update']))
                          {
                            $fid=$_POST['foodid'];
                             $fname=$_POST['foodname'];
                              $fquantity=$_POST['ffquantity'];
                               $frating=$_POST['foodrating'];
                               $files4=$_FILES['foodimg'];
                               $foodprice=$_POST['foodprice'];


                               if($fid=="")
                               {
                                 echo " <br /><div class=\"alert alert-danger text-center \">
                                  *Please fill up your food id.
                                 </div>";
                               }
                               if($fname=="")
                               {
                                 echo " <div class=\"alert alert-danger text-center \">
                                  *Please fill up your food name.
                                 </div>";
                               }

                               if($foodprice=="")
                               {
                                 echo " <div class=\"alert alert-danger text-center \">
                                  *Please fill up your food price.
                                 </div>";
                               }


                               if($files4['error']==4)
                               {
                                 echo " <div class=\"alert alert-danger text-center \">
                                  *Please choose your food image.
                                 </div>";
                               }

                               if($frating=="")
                               {
                                 echo " <div class=\"alert alert-danger text-center \">
                                  *Please fill up your food rating.
                                 </div>";
                               }
                               if($fquantity=="")
                               {
                                 echo " <div class=\"alert alert-danger text-center \">
                                  *Please fill up your food quantity.
                                 </div>";
                               }
                               $filename4=$files4['name'];
                               $fileerror4=$files4['error'];
                               $filetmp4=$files4['tmp_name'];


                               $fileext4=explode('.',$filename4);
                               $filecheck4=strtolower(end($fileext4));
                               $fileextstored4 = array('png','jpg','jpeg' );


                               if(in_array($filecheck4,$fileextstored4 ))
                               {
                                 $destinationfile4='upload/'.$filename4;
                                 move_uploaded_file($filetmp4,$destinationfile4);
                               }


                               if($fid!=""&&$fname!="" && $frating!="" && $fquantity!="" && $files4['error']!=4)
                                 {
                                  $foodquantity=(int)$fquantity;
                                  $availablity="";
                                  if($foodquantity>0)
                                  {
                                    $availablity="Available";
                                  }
                                  else{
                                    $availablity="Not available";
                                  }



                                  $sql1="update ofcfood set foodName='$fname',foodImg='$destinationfile4',rating='$frating',quantity='$foodquantity',availability='$availablity',price='$foodprice'
                                  where id='$id' and foodId='$fid'";

                                  if(mysqli_query($conn,$sql1))
                                  {
                                    echo " <br /><div class=\"alert alert-success text-center \">
                                     Food information is updated successfully .
                                    </div>";
                                  }
                                  else {
                                    echo "<br /> <div class=\"alert alert-danger text-center \">
                                     Food information does not update .
                                    </div>";
                                    echo mysqli_error($conn);
                                  }
                                }

                          }
          ?>

      </div>

      <div class="col-md-4">

      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
