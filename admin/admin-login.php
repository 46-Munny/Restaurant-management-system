<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    	<link rel="stylesheet" href="admin-login.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(upload/admin.jpg);"></div>
		      	<h3 class="text-center mb-0">Welcome</h3>
		      	<p class="text-center">Sign in by entering the information below</p>
						<form action="admin-login.php" class="login-form" method="post">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" name="uname" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" name="password" class="form-control" placeholder="Password" required>
	            </div>

	            <div class="form-group">
	            	<button type="submit" name="submit" class="btn form-control btn-primary rounded submit px-3">Sign In</button>
	            </div>
	          </form>

	        </div>

          <?php


          if(isset($_POST['submit']))
          {

            $servername = 'localhost';
            $username='root';
            $password='';
            $dbname='restaurantdb';
            $conn=mysqli_connect($servername, $username, $password, $dbname);

            $fName=$_POST['uname'];
            $pass=$_POST['password'];

            if($fName!=""&&$pass!="")
            {
              $sql= "select * from admin";
              $result=mysqli_query($conn,$sql);
              $n=mysqli_num_rows($result);
              $cnt=0;
              if($n>0)
              {
                while($array=mysqli_fetch_assoc($result))
                {
                  if($array["username"]==$fName && $array["password"]==$pass)
                  {


                    $_SESSION["adminN ame"]=$array["username"];
                      $cnt=$cnt+1;
                      header("location:admin-panel.php");

                  }

                }

                if($cnt==0)
                {
                  echo " <div class=\"alert alert-danger text-center\">
                   *Please Check your username and passward.
                  </div>";
                }


              }



            }


          }


           ?>
				</div>
			</div>
		</div>
	</section>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	</body>
</html>
