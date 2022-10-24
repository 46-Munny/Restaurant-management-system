<?php





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

$sql="SELECT * FROM `orderinfo`";
$res=mysqli_query($conn,$sql);

if ($res) {
    # code..
    //echo"Connection Successfull<br>";
}

$html='<table><tr><td>Id</td><td>Name</td><td>Phone</td><td>Amount</td><td>Order received</td><td>Delivery Time</td><td>Status</td><td>Item</td></tr>';


while ($row=mysqli_fetch_assoc($res)) {

  $html.='<tr><td>'.$row['Id'].'</td><td>'.$row['Name'].'</td><td>'.$row['Contact'].'</td><td>'.$row['Taka'].'</td><td>'.$row['Order_Received'].'</td><td>'.$row['Delivery_Time'].'</td><td>'.$row['Status'].'</td><td>'.$row['item'].'</td></tr>';
  # code...
}


$html.='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=orphan.xls');

echo $html;
//Dispalying a database ends here


?>
