<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>FoodFun</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/navbar.css">

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
	<!-- Start Menu -->

	<div class="menu-box">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Rajshahi</h2>
						<p>Rajshahi is situated at north side of Bangladesh..<br>
						Let's see our Rajshahi Dishes.</p><br>

						<form action="rajshahi.php" method="post" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                		<div class="input-group">
                    	<input class="form-control"name="searchkey" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    	<div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" name="search">search</button>
                    	</div>
                		</div>
            			</form>
					</div>
				</div>
			</div>

			<!-- Example single danger button -->





			<div class="row">
				<div class="col-lg-6">
					<div class="special-menu text-right">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*"><a href="rajshahi.php" class="text-white text-bold">All</a></button>

						</div>

					</div>
				</div>
				<div class="col-lg-5">
					<div class="special-menu ">
						<div class="button-group filter-button-group">

							<form class="" action="rajshahi.php" method="post">
								<button type="submit" name="offer" class=" ml-3 active btn btn-dark" >Offered Item</button>
							</form>

						</div>

					</div>
				</div>
			</div>

			<br><br>




			<div class="row special-list">

				<?php

				$servername = 'localhost';
			  $username='root';
			  $password='';
			  $dbname='restaurantdb';
			  $conn=mysqli_connect($servername, $username, $password, $dbname);

				if(isset($_POST['search']))
        {


          $searchkey=$_POST['searchkey'];
          $display=" select * from product where Catagory_Name='Rajshahi' and Product_Name  like '%$searchkey%'";
        }

				else if(isset($_POST['offer']))
				{
					$display=" select * from product where Catagory_Name='Rajshahi' and discount!='0'";
				}

				else{
					$display=" select * from product where Catagory_Name='Rajshahi' ";
				}

				$querydisplay=mysqli_query($conn,$display);
				  $num=mysqli_num_rows($querydisplay);

			if($num>0)
			{

				while($result=mysqli_fetch_array($querydisplay))
				{

					if($result['Status']=='Available')
					{


				 ?>
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="<?php echo $result['Image']; ?>" class="img-fluid" alt="Image">
						<div class="why-text">
							<h2><b><?php echo $result['Product_Name']; ?></b></h2>
							<p><?php echo $result['Description']; ?>.</p>
							<div class="fif">
								<div class="left">
									<h4> <?php echo 'Tk.'. $result['Price']; ?> </h4>
									<h3><?php echo 'Rating:'. $result['Rating']; ?></h3>
									<h3><?php echo 'Discount:'. $result['discount'].'%'; ?></h3>
							    </div>
							    <div class="right">
										<form class="" action="payment.php" method="post">
											<input type="hidden" name="id" value="<?php echo $result['Id']; ?>">
											<button type="submit" name="order" class="food-btn">Order Now</button>
										</form>
							    </div>
					       </div>
						</div>
					</div>
					</div>

					<?php
				}
			}
		}

		else {
			echo " <div class=\"alert alert-danger text-center \">
			<h3>*No item found</h3></div>";
		}
					 ?>




				</div>





			</div>
			<div class="center">
					<button class="food-btn"><a href="rajshahiComment.php">Feedback</a></button>
				</div>
		</div>

	<!-- End Menu -->
</body>
</html>
