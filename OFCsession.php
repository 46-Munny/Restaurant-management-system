<?php
    session_start();
    unset($_SESSION['rgid']);
    //session_destroy();
      header("location:pageOFC.php");
      exit();


?>
