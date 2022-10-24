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

$sql="SELECT * FROM `openfood`";
$res=mysqli_query($conn,$sql);

if ($res) {
    # code..
    //echo"Connection Successfull<br>";
}

$html='<table><tr><td>ID</td><td>User Name</td><td>Profile Name</td><td>Address</td><td>Phone</td><td>E-mail</td><td>Profile Picture</td><td>Password</td></tr>';


while ($row=mysqli_fetch_assoc($res)) {

  $html.='<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td><td>'.$row['profileName'].'</td><td>'.$row['address'].'</td><td>'.$row['phnNo'].'</td><td>'.$row['email'].'</td><td>'.$row['profileImg'].'</td><td>'.$row['password'].'</td></tr>';
  # code...
}


$html.='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=userprofiles.xls');

echo $html;
//Dispalying a database ends here


?>
