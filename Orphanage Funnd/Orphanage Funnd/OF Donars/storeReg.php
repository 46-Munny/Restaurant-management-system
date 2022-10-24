<?php

$conn=mysqli_connect('localhost','root', '','restaurantdb') or die('db not connected');



session_start();

$phone = $_POST['phone'];
$name = $_POST['name'];
$amount = $_POST['amount'];

$address= $_POST['address'];
$comment= $_POST['comment'];




$sql="INSERT INTO donor VALUES('$phone','$name', '$amount', '$address', '$comment')";


if (mysqli_query($conn,$sql)) {
	header('location: success.php');

	$_SESSION['message']="true";
}
else{
	echo "Something error!";
}
?>
