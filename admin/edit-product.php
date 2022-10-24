<?php

$servername = 'localhost';
$username='root';
$password='';
$dbname='restaurantdb';
$con=mysqli_connect($servername, $username, $password, $dbname);



 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FoodFun - Edit Product</title>
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




            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4 mb-4">Products</h1>

                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <button type="button" class="btn btn-danger"><a href="add-product.php">Add Products</a></button>
                                <button type="button" class="btn btn-warning"><a href="view-product.php">View Products</a></button>
                            </div>

                            <div class="container">
                    <h2 class=" text-center mt-4 rtext">Edit Product details</h2>
                    <br>

                    <?php

                    if(isset($_POST['edit']))
                    {
                        $sql2= "SELECT * FROM `product` WHERE `Id`={$_POST['cid']}";

                        $display=mysqli_query($con,$sql2);
                        while($result=mysqli_fetch_array($display))
                        {



                    ?>
                    <div class="col-lg-8 m-auto d-block">
                        <form class="" action="edit-product.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            ID:<input type="text" name="id" value="<?php echo $result['Id']; ?>"  class="form-control" placeholder="Enter Product Id" required>

                        </div>



                        <div class="form-group">
                            Image:<input type="file" name="file" value="<?php echo $result['Image']; ?>"  class="form-control" placeholder="Enter Image" required>

                        </div>

                        <div class="form-group">
                            Product Name:<input type="text" name="pname" value="<?php echo $result['Product_Name']; ?>"  class="form-control" placeholder="Enter Product Name" required>

                        </div>
                        <div class="form-group">
                            Catagory Name:<input type="text" name="cname" value="<?php echo $result['Catagory_Name']; ?>"  class="form-control" placeholder="Enter Category Name" required>

                        </div>
                        <div class="form-group">
                        Amount:<input type="text" name="taka" value="<?php echo $result['Price']; ?>"  class="form-control" placeholder="Enter Price(tk)" required>

                        </div>

                        <div class="form-group">
                            Discount:<input type="text" name="discount" value="<?php echo $result['discount']; ?>"  class="form-control" placeholder="Enter Discount" required>

                        </div>


                        <div class="form-group">
                        Description:<input type="text" name="desc" value="<?php echo $result['Description']; ?>"  class="form-control" placeholder="Enter description about the food" required>

                        </div>

                        <div class="form-group">
                        Order recieved:<input type="text" name="rating" value="<?php echo $result['Rating']; ?>"  class="form-control" placeholder="Enter food rating" required>

                        </div>




                        <div class="form-group">
                            Status:<input type="text" name="status" value="<?php echo $result['Status']; ?>"  class="form-control" placeholder="Enter Category Status" required>
                        </div>

                        <input type="submit" name="Submit" value="Update" class="btn btn-primary mb-4">

                        </form>
                    </div>


                    </div>
                    </main>


                    <?php
                    }
                    }

                    if(isset($_POST['Submit']))
                    {

                        $Id=$_POST['id'];
                     $files=$_FILES['file'];
                    $Name=$_POST['pname'];
                    $Catagory=$_POST['cname'];
                    $Taka=$_POST['taka'];
                    $discount=$_POST['discount'];
                    $Desc=$_POST['desc'];
                    $Rating=$_POST['rating'];
                    $Status=$_POST['status'];


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





                    $sql1="UPDATE `product` SET `Id` = '$Id',`Image` = '$destinationfile',`Product_Name` = '$Name',`Catagory_Name` = '$Catagory',`Price` = '$Taka',`discount` = '$discount',`Description` = '$Desc',`Rating` = '$Rating',`Status` = '$Status' WHERE `product`.`Id` ={$_REQUEST['id']} ";






                    if(mysqli_query($con,$sql1))
                    {
                        echo " <div class=\"alert alert-success text-center \">
                        Food Info  Successfully updated</div>";
                    }

                    else{
                        echo " <div class=\"alert alert-success text-center \">
                        Food info not updated</div>";
                        echo mysqli_error($con);
                    }



                    }

                    ?>



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
