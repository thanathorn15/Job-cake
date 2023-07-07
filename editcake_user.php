<?php
if (!isset($_SESSION)) {
    session_start();
    $ID =  $_SESSION['ID'];
    $nameuser =  $_SESSION['name'];
    $email = $_SESSION['email'];
    $tel = $_SESSION['tel'];
    $status = $_SESSION['status'];


    if (!isset($_SESSION["ID"])) {
        header("Location: login.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<?php include "connectcakeDB/connectcakeDB.php"; ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_user.php">
                <div class="sidebar-brand-icon ">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">JOB CAKE </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <h5>ประเภท</h5>
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-cheese"></i>
                    <span>เค้ก</span>
                </a>
                <form action="cake_user.php" method="POST">
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <input value="1ปอนด์" class="dropdown-item" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="1pond" href="cake_user.php"></a>
                            <input value="2ปอนด์" class="dropdown-item" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="2pond" href="cake_user.php"></a>
                            <input value="3ปอนด์" class="dropdown-item" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="3pond" href="cake_user.php"></a>
                            <input value="ชิ้น" class="dropdown-item" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="cin" href="cake_user.php"></a>
                        </div>
                    </div>
                </form>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-mug-hot"></i>
                    <span>เครื่องดื่ม</span>
                </a>
                <form action="bav_menu_user.php" method="POST">
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <input value="ร้อน" class="dropdown-item" method="POST" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="hot" href="bav_menu_user.php"></a>
                            <input value="เย็น" class="dropdown-item" method="POST" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="ice" href="bav_menu_user.php"></a>
                            <input value="ปั่น" class="dropdown-item" method="POST" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="smootie" href="bav_menu_user.php"></a>
                        </div>
                    </div>
                </form>
            </li>

     

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand   topbar mb-4 static-top shadow" style='background-color: #FFFFFf  ;color: #af9f9f ;'>





                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Search -->
                    <form>

                        <body>


                            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index_user.php"><i class='fas fa-cart-plus' style='font-size:20px'></i>&nbsp;จัดการคำสั่งซื้อ <span class="sr-only">(current)</span></a>
                                    </li>&nbsp;&nbsp;&nbsp;
                                    <li class="nav-item">
                                        <a class="nav-link" href="cake_user.php"><i class='fas fa-archive' style='font-size:20px'></i>&nbsp;จัดการคงคลัง</a>
                                    </li>&nbsp;&nbsp;&nbsp;

                                    <li class="nav-item">
                                        <a class="nav-link" href="employee_user.php"><i class='fas fa-user-tie' style='font-size:20px'></i>&nbsp;พนักงาน</a>
                                    </li>&nbsp;&nbsp;&nbsp;



                    </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>


                            <!-- Nav Item - Alerts -->


                            <!-- Dropdown - Alerts -->




                            <!-- Nav Item - User Information -->

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <h6><?php echo $nameuser; ?></h6>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="editemp_user.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    แก้ไขข้อมูลส่วนตัว
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ออกจากระบบ
                                </a>
                            </div>
                        </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <body>
                        <div class="container-fluid">

                            <!-- Page Heading -->


                            <div class="row">

                                <div class="col-lg-12">

                                    <!-- Circle Buttons -->

                                    <center>
                                        <form form name="form1" class="form" method="post" action="editcakecheck_user.php" enctype="multipart/form-data">

                                            <?php
                                            $edit = mysqli_query($conn, "select * from cake  where idcake='" . $_GET['editidcake'] . "'");
                                            $cakeedit = mysqli_fetch_array($edit);

                                            if ($cakeedit["unit"] == '1ปอนด์') {
                                                $cakeedit["unit"] = "<select class='custom-select mr-sm-2' id='unit' name='unit' required>
                                                                        <option value='1ปอนด์'> 1 ปอนด์</option>
                                                                        <option value='2ปอนด์'> 2 ปอนด์</option>
                                                                        <option value='3ปอนด์'> 3 ปอนด์</option>
                                                                        <option value='ชิ้น'>     ชิ้น</option>
                                                                            
                                                                                </select>
                                                                                ";
                                            }

                                            if ($cakeedit["unit"] == '2ปอนด์') {
                                                $cakeedit["unit"] = "<select class='custom-select mr-sm-2' id='unit' name='unit' required>
                                                                        <option value='1ปอนด์'> 1 ปอนด์</option>
                                                                        <option value='2ปอนด์'> 2 ปอนด์</option>
                                                                        <option value='3ปอนด์'> 3 ปอนด์</option>
                                                                        <option value='ชิ้น'>     ชิ้น</option>
                                                                            
                                                                                </select>
                                                                                ";
                                            }

                                            if ($cakeedit["unit"] == '3ปอนด์') {
                                                $cakeedit["unit"] = "<select class='custom-select mr-sm-2' id='unit' name='unit' required>
                                                                        <option value='1ปอนด์'> 1 ปอนด์</option>
                                                                        <option value='2ปอนด์'> 2 ปอนด์</option>
                                                                        <option value='3ปอนด์'> 3 ปอนด์</option>
                                                                        <option value='ชิ้น'>     ชิ้น</option>
                                                                      </select>
                                                                            ";
                                            }
                                            if ($cakeedit["unit"] == 'ชิ้น') {
                                                $cakeedit["unit"] = "<select class='custom-select mr-sm-2' id='unit' name='unit' required>
                                                                    <option value='1ปอนด์'> 1 ปอนด์</option>
                                                                    <option value='2ปอนด์'> 2 ปอนด์</option>
                                                                    <option value='3ปอนด์'> 3 ปอนด์</option>
                                                                    <option value='ชิ้น'>     ชิ้น</option>   
                                                                            </select>
                                                                            ";
                                            }

                                            ?>

                                            <br><br>
                                            <h4>แก้ไขรายการเค้ก</h4>

                                            <table>


                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <tr>

                                                            <td><label class="sr-only"></label>
                                                                <input class="form-control" type='text' name='idcake' id='idcake' style="width:300px" value="<?php echo $cakeedit["idcake"]; ?>" hidden /></td>
                                                        </tr>
                                                    </div>
                                                </div>


                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <tr>
                                                            <td class='t-right' style=" font-size: 18px;">ชื่อรายการ:</td>
                                                            <td><label class="sr-only">Name</label>
                                                                <input class="form-control" type='text' name='cakename' id='cakename' style="width:350px" value="<?php echo $cakeedit["cakename"]; ?>" required /><br></td>
                                                        </tr>
                                                    </div>
                                                </div>



                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <tr>
                                                            <td class='t-right' style=" font-size: 18px;">ชนิด : </td>
                                                            <td>
                                                                <?php echo $cakeedit["unit"]; ?>&nbsp;
                                                            </td>
                                                        </tr>
                                                    </div>
                                                </div>





                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <tr>
                                                            <td class='t-right' style=" font-size: 18px;">ราคา :</td>
                                                            <td><label class="sr-only">price</label>
                                                                <input class="form-control" type='text' name='price' id='price' style="width:350px" value="<?php echo $cakeedit["price"]; ?>" required /><br></td>
                                                        </tr>
                                                    </div>
                                                </div>


                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <tr>
                                                            <td class='t-right' style=" font-size: 18px;">ขั้นต่ำแจ้งเตือน :</td>
                                                            <td><label class="sr-only">minimum</label>
                                                                <input class="form-control" type='text' name='minimum' id='minimum' style="width:350px" value="<?php echo $cakeedit["minimum"]; ?>" required /><br></td>
                                                        </tr>
                                                    </div>
                                                </div>

                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <tr>
                                                            <td class='t-right' style=" font-size: 18px;">คงเหลือ :</td>
                                                            <td><label class="sr-only">balance</label>
                                                                <input class="form-control" type='text' name='balance' id='balance' style="width:350px" value="<?php echo $cakeedit["balance"]; ?>" required /><br></td>
                                                        </tr>
                                                    </div>
                                                </div>

                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <tr>
                                                            <td class='t-right' style=" font-size: 18px;">วันนำเข้า :</td>
                                                            <td><label class="sr-only">import_date</label>
                                                                <input class="form-control" type='date' name='import_date' id='import_date' style="width:350px" value="<?php echo $cakeedit["import_date"]; ?>" required /><br></td>
                                                        </tr>
                                                    </div>
                                                </div>

                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">
                                                        <tr>
                                                            <td class='t-right' style=" font-size: 18px;">วันหมดอายุ :</td>
                                                            <td><label class="sr-only">exp_date</label>
                                                                <input class="form-control" type='date' name='exp_date' id='exp_date' style="width:350px" value="<?php echo $cakeedit["exp_date"]; ?>" required /><br></td>
                                                        </tr>
                                                    </div>
                                                </div>
                                                <br>
                                                <tr>
                                                    <td class='t-right' style=" font-size: 18px;">รูปภาพ :</td>
                                                    <td><input type="file" name="imgs" id='imgs' required></td>
                                                </tr>


                                            </table>
                                            <br>
                                            <center>
                                                <input class="btn btn-success" name="btnSubmit" type="submit" value="บันทึก" />&nbsp;&nbsp;
                                                <input class="btn btn-warning" name="btnReset" type="reset" value="รีเซต" />&nbsp;&nbsp;
                                                <a href="cake_user.php">
                                                    <input class="btn btn-danger" type="button" class="cancel" value="ยกเลิก" />&nbsp;&nbsp;
                                                </a>
                                            </center>
                                            <br />
                                        </form>
                                    </center>


                                    <!-- Content Row -->
                                    <div class="row">



                                        <!-- Bootstrap core JavaScript-->
                                        <script src="vendor/jquery/jquery.min.js"></script>
                                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                                        <!-- Core plugin JavaScript-->
                                        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                                        <!-- Custom scripts for all pages-->
                                        <script src="js/sb-admin-2.min.js"></script>

                                        <!-- Page level plugins -->
                                        <script src="vendor/chart.js/Chart.min.js"></script>

                                        <!-- Page level custom scripts -->
                                        <script src="js/demo/chart-area-demo.js"></script>
                                        <script src="js/demo/chart-pie-demo.js"></script>

                    </body>

</html>