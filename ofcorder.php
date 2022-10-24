<?php
session_start();
//error_reporting(0);
?>

<?php

$servername = 'localhost';
$username='root';
$password='';
$dbname='restaurantdb';
$con=mysqli_connect($servername, $username, $password, $dbname);



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require('navbar2.php'); ?>

    <?php 		if (isset($_SESSION['ofcId']))
    {?>

    <div id="layoutSidenav_content">
        <main style="background-color:#cae4e9;">
            <div class="container-fluid">
                <div class="row ml-1" style="background-color:white;">
                    <div class="col-lg-2">
                        <h6 class="mt-1 mb-1">Home / Order</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2" >
                    <h2 class="mt-4">Order</h2>
                    </div>
                </div>




                <div class="card mb-4">
                    <div class="card-header">

                    <div class="row mt-4">
                    <div class="col-lg-4">
                     </div>


                   <div class="col-lg-4">

                   </div>



                   <div class="col-lg-2">
                        <!--<button type="button" class="btn btn-info mb-4 px-4 " id="editButton">Edit</button>-->
                       <!-- <button type="button" class="btn btn-danger mb-4 px-3" id="resetButton">Reset</button>-->
                   </div>


                </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Ordered Food Id</th>
                                        <th scope="col">Ordered Food</th>
                                        <th scope="col">Contact Number</th>

                                        <th scope="col">Quantity</th>
                                          <th scope="col">Total Amount(tk)</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    $wid=$_SESSION["ofcId"];

                                    //database Display starts here
                                    $sql = "SELECT * FROM `ofcpayment` where owner_id='$wid'";
                                    $result = mysqli_query($con, $sql);

                                    $num=mysqli_num_rows($result);
                                    if ($num>0) {
                                    # code...

                                    while($row = mysqli_fetch_assoc($result)){


                                        echo"<tr>

                                        <td>".$row['full_name']."</td>
                                        <td>".$row['foodId']."</td>
                                        <td>".$row['foodName']."</td>
                                        <td>".$row['phnNo']."</td>
                                        <td>".$row['quantity']."</td>
                                        <td>".$row['price']."</td>







                                    </tr>";

                                    }
                                    }

                                    //Database Display ends here

                                    if(isset($_POST['delete']))
                                    {

                                      $sql2="delete from orderinfo  where Id={$_POST['cid']}";
                                      if(mysqli_query($conn,$sql2))
                                      {

                                      }
                                      else {
                                         echo mysqli_error($conn);;
                                      }
                                    }

                                  }

                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  </body>
</html>
