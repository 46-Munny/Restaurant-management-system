
<?php
$servername = 'localhost';
$username='root';
$password='';
$dbname='restaurantdb';
$con=mysqli_connect($servername, $username, $password, $dbname);
$sql= "select * from admincategory";
$querydisplay=mysqli_query($con,$sql);




 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FoodFun - View Category</title>
        <link href="styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
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
                        <a class="dropdown-item" href="admin-logout.php">Logout</a>
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



            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4 mb-4">Category</h1>

                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                            <a href="export-category.php"> <button type="button" class="btn btn-info mb-4  mr-2 px-2" id="exportButton">   Export Data</button></a>
                            <a href="add-category.php"> <button type="button" class="btn btn-warning mb-4 pr-2 px-2" id="importButton">Import Data</button></a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Sub-category Name</th>
                                                  <th>Sub-category Image</th>
                                                <th>Status</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php





                                        while($result=mysqli_fetch_array($querydisplay))
                                        {



                                         ?>


                                          <tr>
                                            <td><?php echo $result['id']; ?></td>
                                            <td><?php echo $result['categoryName']; ?></td>
                                            <td><?php echo $result['scategoryName']; ?></td>
                                            <td>  <img  src="<?php echo $result['scategoryImage']; ?>" alt="" class="categoryImage" ></td>
                                              <td><button type="button" class="btn btn-success"><?php echo $result['status']; ?></button></td>
                                              <td>

                                                <form class="" action="edit-category.php" method="post">
                                                  <input type="hidden" name="cid" value="<?php echo $result['id'] ?>">
                                                    <button type="submit" name="edit" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></button>

                                                </form>



                                            <form class="" action="" method="post">

                                              <input type="hidden" name="cid" value="<?php echo $result['id'] ?>">

                                              <button type="submit" name="delete" class="mt-2 btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>

                                            </form>
                                              </td>



                                          </tr>


                                        <?php
                                         }

                                         if(isset($_POST['delete']))
                                         {

                                           $sql2="delete from admincategory where id={$_POST['cid']}";
                                           if(mysqli_query($con,$sql2))
                                           {

                                           }
                                           else {
                                              echo mysqli_error($con);
                                           }
                                         }



                                         ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
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
