<?php

$insert=false;



//connecting to a database starts here
$servername="localhost";
$username="root";
$password="";
$database="restaurantdb";


$conn=mysqli_connect($servername,$username,$password,$database);
if ($conn) {
  # code...
  echo"Connection Successfull<br>";
}
else {

  die(mysqli_connect_error());
}
//connecting to a database ends here
//Dispalying a database starts here

$sql="SELECT * FROM `cupon`";
$res=mysqli_query($conn,$sql);

if ($res) {
    # code..
    //echo"Connection Successfull<br>";
}

$html='<table><tr><td>ID</td><td>Name</td><td>Description</td><td>Price</td><td>Status</td></tr>';


while ($row=mysqli_fetch_assoc($res)) {

  $html.='<tr><td>'.$row['Id'].'</td><td>'.$row['Name'].'</td><td>'.$row['Description'].'</td><td>'.$row['Price'].'</td><td>'.$row['Status'].'</td></tr>';
  # code...
}


$html.='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=cupons.xls');

echo $html;
//Dispalying a database ends here


?>
