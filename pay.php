<?php
session_start();

?>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/paystyle.css">
    <link rel="stylesheet" href=" css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/navbar2.css">

</head>
<body>
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
						echo ' <li class="nav-item"><a class="nav-link" href="/Restuproject/login.php">Hi, '.$_SESSION['Uname'].'</a></li>
						<li class="nav-item">
							<a class="nav-link" href="/Restuproject/logout.php">Logout</a>
						</li>';
					} else {
						echo ' <li class="nav-item">
							<a class="nav-link" href="/Restuproject/login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/Restuproject/regform.php">Registration</a>
						</li>'
					;
					}

				?>

			</ul>

		</div>
	</nav>

  <?php

       if (isset($_SESSION['Uname']))
       {



   ?>
    <div class="wrapper">

        <h2>Payment Form</h2>

        <?php
          if(isset($_POST['order']))
          {
            $sql = "SELECT * FROM `ofcfood` WHERE `foodId` = {$_POST['fid']}";
            $result = mysqli_query($con, $sql);
              while($row = mysqli_fetch_assoc($result)){



         ?>
        <form action="pay.php" method="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-box">
                            <input type="text" placeholder="Full Name" name="fname" class="name" required>
                            <i class="fa fa-user icon"></i>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="input-box">
                            <input type="text" placeholder="Nick Name" name="Nname" class="name" required>
                            <i class="fa fa-user icon"></i>
                        </div>
                    </div>
                </div>





            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Email Address" name="email" class="name" required>
                    <i class="fa fa-envelope" id="env"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Phone Number" name="phn" class="name" required>
                    <i class="fa fa-phone" id="env"></i>
                </div>
            </div>

            <h4>Ordered Item</h4>
            <div class="input-group">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-box">
                            <input type="text" placeholder="Food Name" name="foodname" value="<?php echo $row['foodName']; ?>" class="name" required>
                            <i class="fas fa-hamburger" id="food"></i>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="input-box">
                            <input type="text" placeholder="Quantity" name="quantity" class="name" required>
                            <i class="fas fa-list-ol" id="quan"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Food Price per piece" name="price" value="<?php echo $row['price']; ?>" class="name" required>
                    <input type="hidden" name="foodid" value="<?php echo $_POST['fid']; ?>"  >
                    <input type="hidden" name="ownerid" value="<?php echo $_POST['id']; ?>"  >

                </div>
            </div>



            <div class="input-box">
                <h4>Gender</h4>
                <input type="radio" id="b1" name="gender" value="Male" class="radio" checked>
                <label for="b1">Male</label>
                <input type="radio" id="b2" name="gender" value="Female" class="radio" checked>
                <label for="b2">Female</label>
            </div>

            <div class="input-group">
                <div class="input-box">

                    <h5>Payment via card</h5>
                    <input type="radio" id="bc1" name="pay" value="Credit Card" checked class="radio">
                    <label for="bc1"><span><i class="fab fa-cc-visa"></i>Credit Card</span></label>
                    <input type="radio" id="bc2" name="pay" value="Paypal" checked class="radio">
                    <label for="bc2"><span><i class="fab fa-cc-paypal"></i>Paypal</span></label>

                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Card Number" value="Null" name="cardNo" class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>


            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Card CVC" value="Null" name="cvc" class="name" >
                    <i class="fa fa-user icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">

                    <h5>Pay via Mobile Banking</h5>
                    <input type="radio" id="bc3" name="pay" value="Rocket" checked class="radio">
                    <label for="bc3"><span>Rocket Number</span></label>
                    <input type="radio" id="bc4" name="pay" value="Bkash" checked class="radio">
                    <label for="bc4"><span>Bkash Number</span></label>

                </div>

                <div class="input-group">
                    <div class="input-box">
                        <input type="text" placeholder="Bkash or Rocket Number" value="Null" name="BRno" class="name">
                        <i class="fas fa-phone" id="phn"></i>
                    </div>
                </div>


                <div class="input-box">

                    <h5>Cash on delivery</h5>
                    <input type="radio" id="bc3" name="pay" value="Cash on delivery" checked class="radio">
                    <label for="bc3"><span>Cash on delivery</span></label>


                </div>

                <div class="input-group">
                    <div class="input-box">
                        <input type="text" placeholder="Your Address" name="address" value="Null" class="name">

                    </div>
                </div>


                <div class="input-group">
                    <div class="input-box">

                        <h4>Payment Date</h4>
                          <input type="text" placeholder="Payment Date" name="date" class="name">

                    </div>
                </div>
            </div>



            <div class="input-group">
                <div class="input-box">
                    <button type="submit" name="payment">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>
    <?php
    }

   }
  }
  else {


    echo "<br /><br /> <div class=\"alert alert-success text-center \">
      To order food, login into foodfun...</div>";
  }

  if(isset($_POST['payment']))
  {
    $fname=$_POST['fname'];
    $Nname=$_POST['Nname'];
    $email=$_POST['email'];
    $phn=$_POST['phn'];
    $foodName=$_POST['foodname'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $gender=$_POST['gender'];
    $pay=$_POST['pay'];
    $cardNo=$_POST['cardNo'];
    $cvc=$_POST['cvc'];
    $BRno=$_POST['BRno'];
    $foodid=$_POST['foodid'];
    $ownerid=$_POST['ownerid'];
    $date=$_POST['date'];
    $address=$_POST['address'];
    $name=$fname.' '.$Nname;
    $status='Processing';

    $fprice=(int)$price;
    $fquantity=(int)$quantity;


      $total_amount=($fprice*$fquantity);





    $sql="INSERT INTO `ofcpayment`( `owner_id`, `foodId`,`full_name`, `nick_name`, `email`, `phnNo`, `foodName`, `quantity`, `price`, `gender`, `payment_method`, `card_no`, `card_cvc`, `mobileBankingNo`, `payment_date`, `address`) VALUES ('$ownerid','$foodid','$fname','$Nname','$email','$phn','$foodName','$quantity','$price','$gender','$pay','$cardNo','$cvc','$BRno','$date','$address')";
    if(mysqli_query($con,$sql))
    {
      echo "<br /><br /> <div class=\"alert alert-success text-center \">
        Your total amount .$total_amount.tk</div>";
    }
    else {
    echo mysqli_error($con);
    }







}


     ?>

</body>
</html>
