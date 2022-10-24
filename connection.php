<?php
$servername = 'localhost';
$username='root';
$password='';
$dbname='restaurantdb';
$conn=mysqli_connect($servername, $username, $password, $dbname);
if($conn){
  echo "";
}
else{
die("Connection failed: " . mysqli_connect_error());
}


?>
