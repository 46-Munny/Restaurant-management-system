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
    $id=$_POST['id'];
    $Name=$_POST['name'];
    $item=$_POST['item'];
   $Contact=$_POST['contact'];
   $Taka=$_POST['taka'];
   $Received=$_POST['received'];
   $Delivery=$_POST['delivery'];
   $Status=$_POST['status'];



 $sql = "INSERT INTO `orderinfo` ( `Id`,`Name`, `Contact`, `Taka`, `Order_Received`, `Delivery_Time`, `Status`, `item`) VALUES ( '$id','$Name', '$Contact', '$Taka', '$Received', '$Delivery', '$Status','$item')";
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
        <title>Order -Admin</title>
        <link href="styles.css" rel="stylesheet" />
       <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
       <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head><body class="sb-nav-fixed">

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

                      <a class="dropdown-item" href="#">Activity</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="admin-logout.php">Logout</a>
                  </div>
              </li>
          </ul>
      </nav>
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
                                          <a class="nav-link" href="view-category.php">Categories</a>
                                          <a class="nav-link" href="#">Product</a>


                                      </nav>
                                  </div>

                          </div>


                          <a class="nav-link" href="#">
                              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                              Customers
                              <a class="nav-link" href="#">Customer Details</a>
                          </a>
                          <a class="nav-link" href="#">
                              <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                              Settings
                          </a>
                      </div>
                  </div>

              </nav>
          </div>




            <!--SideNavContent Starts here-->
            <div id="layoutSidenav_content" >
              <div class="card mb-4">
                  <div class="card-header">
                      <button type="button" class="btn btn-danger"><a href="import.php">Add Order</a></button>
                      <button type="button" class="btn btn-warning"><a href="order.php">View Order</a></button>
                  </div>
                <main style="background-color:#cae4e9;">
                    <div class="container-fluid mb-4 mt-2">



                    <form action="import.php" method="post">
                      <div class=" from-group mb-3">
                        <label for="Customer"form-label">Customer Id</label>
                        <input type="text"  class="form-control" id="id" name="id">
                      </div>
                    <div class=" from-group mb-3">
                      <label for="Customer"form-label">Customer Name</label>
                      <input type="text"  class="form-control" id="name" name="name">
                    </div>
                    <div class=" from-group mb-3">
                      <label for="Customer"form-label">Ordered Item</label>
                      <input type="text"  class="form-control" id="item" name="item">
                    </div>
                    <div class=" from-group mb-3">
                        <label for="Contact" class="form-label">Contact no</label>
                        <input type="text"  class="form-control" id="contact" name="contact">
                      </div>
                      <div class=" from-group mb-3">
                        <label for="Amount" class="form-label">Total Amount (tK)</label>
                        <input type="text"  class="form-control" id="taka" name="taka">
                      </div>
                      <div class=" from-group mb-3">
                        <label for="Received" class="form-label">Order Received</label>
                        <input type="text"  class="form-control" id="received" name="received">
                      </div>
                      <div class=" from-group mb-3">
                        <label for="Delivery" class="form-label">Order Delivery</label>
                        <input type="text"  class="form-control" id="delivery" name="delivery">
                      </div>

                      <div class=" from-group mb-3">
                        <label for="Status" class="form-label">Order Status</label>
                        <input type="text"  class="form-control" id="status" name="status">
                      </div>

                    <button type="submit" name="Submit" value="Submit" class="btn btn-info">Import</button>
                  </form>


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
