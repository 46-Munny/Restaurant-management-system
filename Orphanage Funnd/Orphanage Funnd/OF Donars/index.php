
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/navbar.css">

	<style type="text/css">
		#bodyId{
			visibility: hidden;
		}
	</style>

	<script type="text/javascript">



		function confirmFun () {

			var value = confirm("Are you sure, you want to donate something in orphanage fund?")
			if(value==true){
			document.getElementById('bodyId').style.visibility = 'visible'
		}
		else{
			document.getElementById('bodyId').style.visibility = 'hidden'
		}
		}

	</script>


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
			<h1 class="text-center text-uppercase text-info">welcome to orphanage fund Doner Details Page</h1>
		</div>
	</div>
</div>

<div class="container">
  <div>
  	<div class="text-center w-50 p-1 m-auto">
    	<div><img class="w-100 img-thumbnail" src="./image/orphan.jpg"></div>
      <a class="btn btn-info w-100" href="display.php">See All donor's informations</a>
    </div>

    </div>
  </div>
</div>

<div class="text-center w-100 mt-3 mb-3">
	<div class="btn btn-danger m-auto " onclick="confirmFun()">Resistration as a Doror</div>

</div>


</div>


<div id="bodyId">
<div class="container">
  <div class="row">
    <div class="col text-center">
      <a class="btn btn-success " href="registration.php">Registration now</a>
    </div>
  </div>
</div>
</div>
<br><br>
<div class="container ">
  <div class="row">
    <div class="col text-center">
      <a class="btn btn-warning " href="../index.php">Go Back</a>
    </div>
  </div>
</div>







</body>
</html>
