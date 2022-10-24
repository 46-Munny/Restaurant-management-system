<?php

session_start();


?>









<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <title>Success</title>
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
<br><br><br>


    <div class="row text-center" >
        <div class="col-md-12">




            <?php
            if(isset($_SESSION['message']))
            {?>
                <div class="alert alert-success">
                    Congrats!!Your signup is successful.....
                </div>

            <?php }
            ?>

            <div class="mt-5">
                <a class="btn btn-primary" href="index.php">go back</a>

            </div>











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
