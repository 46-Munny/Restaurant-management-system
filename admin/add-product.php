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
  //echo"Connection Successfull<br>";
}
else {

  die(mysqli_connect_error());
}
//connecting to a database ends here






if ($_SERVER['REQUEST_METHOD']=='POST') {
    # code...
   $Id=$_POST['id'];
   $files=$_FILES['file'];
   $Name=$_POST['name'];
   $Catagory=$_POST['catagory'];
   $Taka=$_POST['taka'];
   $Desc=$_POST['desc'];
   $Rating=$_POST['rating'];
   $Status=$_POST['status'];
   $discount=$_POST['dis'];


$filename=$files['name'];
 $fileerror=$files['error'];
 $filetmp=$files['tmp_name'];


 $fileext=explode('.',$filename);
 $filecheck=strtolower(end($fileext));
 $fileextstored = array('png','jpg','jpeg' );

 if(in_array($filecheck,$fileextstored ))
 {
   $destinationfile='upload/'.$filename;
   move_uploaded_file($filetmp,$destinationfile);
 }



 $sql = "INSERT INTO `product` (`Id`,`Image`, `Product_Name`, `Catagory_Name`, `Price`, `discount`,`Description`, `Rating`, `Status`) VALUES ('$Id', '$destinationfile', '$Name', '$Catagory', '$Taka', '$discount','$Desc', '$Rating', '$Status')";
 $result=mysqli_query($conn,$sql);



 if ($result) {
    # code...
    $insert=true;
   // echo"data are saved";
  }
  else {
    # code...
    die(mysqli_connect_error($conn));
  }





  }








?>


<html>
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FoodFun- Add Product</title>
        <link href="styles.css" rel="stylesheet" />
       <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
       <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head><body class="sb-nav-fixed">





             <!--Top nav starts here-->
             <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">FoodFun</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!--Top nav ends here-->



        <!--Side nav starts here-->

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <a class="nav-link" href="admin-panel.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Admin Dashboard
                            </a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Orders
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="order.php">Order details</a>
                                    <a class="nav-link" href="view-cupon.php">Cupon</a>

                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Inventory
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                      Add  Products & Categories
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="view-product.php">Product</a>
                                            <a class="nav-link" href="view-category.php">Categories</a>

                                        </nav>
                                    </div>

                            </div>


                            <a class="nav-link" href="view-customer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Customers
                            </a>


                            <a class="nav-link collapsed" href="view-openfood.php" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-hamburger"></i></div>
                                Openfood Corner
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="order.php">Customer Profile details</a>
                                    <a class="nav-link" href="order.php">Menu details</a>

                                </nav>

                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-child"></i></div>
                                Orphanage Fund
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="view-donar.php">Donor details</a>
                                    <a class="nav-link" href="view-orphan.php">Orphan details</a>

                                </nav>

                            </div>
                        </div>
                    </div>

                </nav>
            </div>





            <!--SideNavContent Starts here-->
            <div id="layoutSidenav_content"  >
                <main>

                <div>
                <div class="row pl-4">
                <h2> <span style="text-align:center;"> Add Products</span></h2>
                <div class="col-lg-12">
                  <div class="card mb-4">
                      <div class="card-header">
                      <a href="add-product.php"><button type="button" class="btn btn-danger">Add Product</button></a>
                          <a href="view-product.php"><button type="button" class="btn btn-warning">View Product</button></a>
                      </div>
                </div>
                </div>
                </div>
                    <div class="container mb-4 mt-2" id="addForm">


                    <form action="add-product.php" method="post" enctype="multipart/form-data" >

                    <div class=" from-group mb-3">
                      <label for="Customer"form-label">Product Id</label>
                      <input type="text"  class="form-control" id="id" name="id" style="width:100%;">
                    </div>


                    <div class=" from-group mb-3">
                      <label for="Image"form-label">Product Image</label>
                      <input type="file"  class="form-control" id="file" name="file" style="width:100%;" >
                    </div>

                    <div class=" from-group mb-3">
                      <label for="Name"form-label">Product Name</label>
                      <input type="text"  class="form-control" id="name" name="name" style="width:100%;">
                    </div>
                    <div class=" from-group mb-3">
                        <label for="Catagory" class="form-label">Catagory</label>
                        <input type="text"  class="form-control" id="catagory" name="catagory" style="width:100%;">
                      </div>
                      <div class=" from-group mb-3">
                        <label for="Amount" class="form-label">Total Amount (tK)</label>
                        <input type="text"  class="form-control" id="taka" name="taka" style="width:100%;">
                      </div>
                      <div class=" from-group mb-3">
                        <label for="Discount" class="form-label">Discount (%)</label>
                        <input type="text"  class="form-control" id="dis" name="dis" style="width:100%;">
                      </div>
                      <div class=" from-group mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text"  class="form-control" id="desc" name="desc" style="width:100%;">
                      </div>
                      <div class=" from-group mb-3">
                        <label for="Rating" class="form-label">Rating</label>
                        <input type="text"  class="form-control" id="rating" name="rating" style="width:100%;">
                      </div>


                      <div class=" from-group mb-3">
                        <label for="Status" class="form-label"> Status</label>
                        <input type="text"  class="form-control" id="status" name="status" style="width:100%;">
                      </div>

                    <button type="submit" name="Submit" value="Submit" class="btn btn-info">Import</button>
                  </form>

                  </div>


                  <!--Form Ends here-->



                            </main>

       </div>

       <footer class="py-4 bg-light mt-auto">
                                <div class="container-fluid">
                                    <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; FoodFun 2020</div>
                                        <div>
                                            <a href="#">Privacy Policy</a>
                                            &middot;
                                            <a href="#">Terms &amp; Conditions</a>
                                        </div>
                                    </div>
                                </div>
                            </footer>



    <!--Form Starts here-->

</div>


       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
</body>
</html>
