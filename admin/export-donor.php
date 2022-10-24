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

$sql="SELECT * FROM `donor`";
$res=mysqli_query($conn,$sql);

if ($res) {
    # code..
    //echo"Connection Successfull<br>";
}

$html='<table><tr><td>Phone</td><td>Name</td><td>Alloted Amount</td><td>Address</td><td>Comments</td></tr>';


while ($row=mysqli_fetch_assoc($res)) {

  $html.='<tr><td>'.$row['phone'].'</td><td>'.$row['name'].'</td><td>'.$row['amount'].'</td><td>'.$row['address'].'</td><td>'.$row['comment'].'</td></tr>';
  # code...
}


$html.='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=donor.xls');

echo $html;
//Dispalying a database ends here


?>
