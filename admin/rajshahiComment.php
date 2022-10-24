<?php


//connecting to a database starts here
$servername="localhost";
$username="root";
$password="";
$database="restaurantdb";


$conn=mysqli_connect($servername,$username,$password,$database);
if ($conn) {
  # code...
  //echo"Connection Successfull<br>";
}
else {

  die("<script>alert('Connection Failed')</script>");
}
//connecting to a database ends her

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Section</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/commentstyle.css">
    <link rel="stylesheet" href=" css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

</head>
<body class="whole">
  <div class="wrapper mt-4">
      <form action="" class="form" method="post">
         <div class="row">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name"  required>
            </div>
            <div class="input-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" placeholder="Enter your Email"  required>
            </div>

         </div>



         <div class="row">
            <div class="input-group textarea">
                <label for="category">Category</label>
                  <input type="text" name="category" id="category" placeholder="Enter your category" value="Rajshahi" required>
            </div>
         </div>

         <div class="row">
            <div class="input-group textarea">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" placeholder="Enter your comment" cols="30" rows="30"></textarea>
            </div>
         </div>



         <div class="input-group">
            <button class="btn btn-warning btn-sm ml-3" type="submit" >Post Comment</button>
         </div>
      </form>

      <?php


if($_SERVER['REQUEST_METHOD']=='POST')
{

  $Name=$_POST['name'];
   $Email=$_POST['email'];
   $Comment=$_POST['comment'];
   $Category=$_POST['category'];


  $query=mysqli_query($conn,"INSERT INTO `comments` ( `Name`, `Email`, `Comment`,`Category`) VALUES ('$Name', '$Email', '$Comment','$Category')");

   if($query)
   {
     echo "<script>alert('inserted')</script>";
   }

   else{
     echo " <div class=\"alert alert-success text-center \">
      Comment not inserted</div>";
     echo mysqli_error($conn);
   }



}

        //database Display starts here
        $sql1 = "SELECT * FROM `comments` where Category='Rajshahi'";
        $result = mysqli_query($conn, $sql1);

        $num=mysqli_num_rows($result);
        if ($num>0) {
        # code...

        while($row = mysqli_fetch_assoc($result)){
            echo'<div class="prev-comments">
            <div class="single-item">
                <h4>'.$row['Name'].'</h4>
                <a href="mailto:mushfikaikfatmunia@gmail.com">'.$row['Email'].'</a>
                <p>'.$row['Comment'].'</p>

                <div class="row">
                <div class="col-lg-9"></div>
                <div class="col-lg-3">




                </div>
                </div>
            </div>

        </div>';


        }
        }
        //database Display ends here



        ?>

  </div>

</body>
</html>
