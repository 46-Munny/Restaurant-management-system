<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/nabvar.css">
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


<div class="container ">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center text-uppercase text-info">Registration Form</h1>

	</div>
</div>
	<div class="row text-center" >
		<div class="col-md-12">

			<?php
			if(isset($_SESSION['message']))
			{?>
				<div class="alert alert-success">
					Congrats!!Your registration is successful.....
				</div>

			<?php }
			?>








		<form action="storeReg.php" method="post">
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="phone" type="phone" required="required" placeholder="Enter your Phone Number ">
			</div>
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="name" type="text" required="required" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="amount" type="Number" required="required" placeholder="Enter Donation Amount">
			</div>
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="address" required="required" type="text" placeholder="Enter Your Address">
			</div>
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="comment" type="text" placeholder="Enuter Your Comment">
			</div>


			<input class="btn btn-outline-info" type="submit" value="registration">
		</form>
		<a class="btn btn-dark mt-4" href="display.php">Back</a>

	</div>
	</div>
</div>


	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


	<?php
	unset($_SESSION['message']);
	?>
</body>
</html>
