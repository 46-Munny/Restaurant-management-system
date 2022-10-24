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

$sql="SELECT * FROM `admincategory`";
$res=mysqli_query($conn,$sql);

if ($res) {
    # code..
    //echo"Connection Successfull<br>";
}

$html='<table><tr><td>ID</td><td>Catagory Name</td><td>Sub-Catagory Name</td><td>Sub-Catagory Image</td><td>Sub-Catagory Page</td><td>Status</td></tr>';


while ($row=mysqli_fetch_assoc($res)) {

  $html.='<tr><td>'.$row['id'].'</td><td>'.$row['categoryName'].'</td><td>'.$row['scategoryName'].'</td><td>'.$row['scategoryImage'].'</td><td>'.$row['scategoryPage'].'</td><td>'.$row['status'].'</td></tr>';
  # code...
}


$html.='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=catagory.xls');

echo $html;
//Dispalying a database ends here


?>
