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

$sql="SELECT * FROM `user`";
$res=mysqli_query($conn,$sql);

if ($res) {
    # code..
    //echo"Connection Successfull<br>";
}

$html='<table><tr><td>Name</td><td>E-mail</td><td>Age</td><td>Address</td><td>Password</td></tr>';


while ($row=mysqli_fetch_assoc($res)) {

  $html.='<tr><td>'.$row['Name'].'</td><td>'.$row['Email'].'</td><td>'.$row['Age'].'</td><td>'.$row['Address'].'</td><td>'.$row['Passward'].'</td></tr>';
  # code...
}


$html.='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=customer.xls');

echo $html;
//Dispalying a database ends here


?>
