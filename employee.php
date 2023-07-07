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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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


            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Divider -->


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
                                        <a class="nav-link" href="index.php"><i class='fas fa-cart-plus' style='font-size:20px'></i>&nbsp;จัดการคำสั่งซื้อ <span class="sr-only">(current)</span></a>
                                    </li>&nbsp;&nbsp;&nbsp;
                                    <li class="nav-item">
                                        <a class="nav-link" href="cake.php"><i class='fas fa-archive' style='font-size:20px'></i>&nbsp;จัดการคงคลัง</a>
                                    </li>&nbsp;&nbsp;&nbsp;
                                    <li class="nav-item">
                                        <a class="nav-link" href="report.php"><i class='fas fa-file-alt' style='font-size:20px'></i>&nbsp; รายงานการขาย</a>
                                    </li>&nbsp;&nbsp;&nbsp;
                                  
                                    <li class="nav-item">
                                        <a class="nav-link" href="employee.php"><i class='fas fa-user-tie' style='font-size:20px'></i>&nbsp;พนักงาน</a>
                                    </li>&nbsp;&nbsp;&nbsp;



                    </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                <a class="dropdown-item" href="editemp.php">
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

                                    <center><a type="button" href="regis.php" class="btn btn-success" style="width:130px;height:34px;font-size: 14.5px;"><i class="fas fa-plus">&nbsp;&nbsp;เพิ่มพนักงาน</i></a></center>
                                    <br>
                        
                            

                            <div style="height:5px;"></div>
                            <table class="table table-striped " class="well" style="margin:auto; padding:auto; width:94%;  ;font-size: 16px;background-color: #FFFFFF ;">
                                <tr style="background-color: #0c5999  ;color: #FFFFFF;font-size: 16px; ">


                                    <th width="300">ลำดับ</th>
                                    <th width="300">ชื่อ-สกุล</th>
                                    <th width="105">E-mail</th>
                                    <th width="240">เบอร์โทร</th>
                                    <th width="400">ที่อยู่</th>
                                    <th width="400">วันที่เริ่มงาน</th>
                                    <th width="400">เวลาทำงาน</th>
                                    <th width="400">แก้ไข</th>

                                    </thead>
                                    <tbody>
                                        <?php
                                        include "connectcakeDB/connectcakeDB.php";

                                        $i=0;

                                        $query = mysqli_query($conn, "select * from user where status=02");
                                        while ($row = mysqli_fetch_array($query)) {$i++;

                                        ?>

                                            <tr style='background-color: #ffffff  ;color: #080404 ;'>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['tel']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['work_start']; ?></td>
                                                <td><?php echo $row['worktime']; ?></td>
                                                <td>&nbsp;
                                                    <a href='editemp_list.php?editidemp_list=<?php echo $row['ID']; ?>' class='btn btn-warning '>
                                                        <i class='far fa-edit'></i>
                                                    </a>
                                                    
                                                    <a href='delemp_list.php?delidemp_list="<?php echo $row['ID']; ?>"' onclick="return confirm('คุณต้องการลบรายชื่อหรือไม่ ?')" class="btn btn-danger ">
                                                        <i class='fas fa-trash-alt'></i>


                                                </td>

                                            </tr>
                                        <?php


                                        }

                                        ?>

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