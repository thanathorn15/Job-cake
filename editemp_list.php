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
<?php include "connectcakeDB/connectcakeDB.php";?>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h6><?php  echo $nameuser;?></h6></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="editemp.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    แก้ไขข้อมูลส่วนตัว
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ออกจากระบบ
                                </a>
                            </div>
                        </li>


                    </ul>

                </nav>

     <body>


<div class="container-fluid">
	<div style="height:45px;"></div>

	<span  style="font-family: 'Prompt', sans-serif;;font-size: 22px;" ><center><strong>แก้ไขข้อมูลพนักงาน</strong></center></span>

<center><form form name="form1" class="form" method="post" action="editemp_list_check.php"  enctype="multipart/form-data">
        
<br>

<?php
$edit=mysqli_query($conn,"select * from user where id='".$_GET['editidemp_list']."'");
$editidemp_list=mysqli_fetch_array($edit);


?>

    <table>


    <input class="form-control" type='text' name='ID' id='ID' style="width:300px"   
        value="<?php echo $editidemp_list['ID']?>"  hidden />

        <div class="form-row align-items-center">
        <div class="col-auto">
        <tr>
        <td class='t-right'>ชื่อผู้ใช้ :</td>
        <td><label class="sr-only" >ชื่อผู้ใช้</label>
        <input class="form-control" type='text' name='username' id='username' style="width:300px"   
        value="<?php echo $editidemp_list['username']?>" required  />&nbsp;</td></tr>
        </div>
    </div>

    <div class="form-row align-items-center">
        <div class="col-auto">
        <tr>
        <td class='t-right'>รหัสผ่าน :</td>
        <td><label class="sr-only" >รหัสผ่าน</label>
        <input class="form-control" type='text' name='password' id='password' style="width:300px"   
        value="<?php echo $editidemp_list['password']?>" required  />&nbsp;</td></tr>
        </div>
    </div>



    <div class="form-row align-items-center">
        <div class="col-auto">
        <tr>
        <td class='t-right'>ชื่อ-สกุล :</td>
        <td><label class="sr-only" >ชื่อ-สกุล</label>
        <input class="form-control" type='text' name='name' id='name' style="width:300px"   
        value="<?php echo $editidemp_list['name']?>" required  />&nbsp;</td></tr>
        </div>
    </div>


    <div class="form-row align-items-center">
        <div class="col-auto">
        <tr>
        <td class='t-right'>E-mail :</td>
        <td><label class="sr-only" >E-mail </label>
        <input class="form-control" type='text' name='email' id='email' style="width:300px"  
         value="<?php echo $editidemp_list['email']?>" required />&nbsp;</td></tr>
        </div>
    </div>


<div class="form-row align-items-center">
        <div class="col-auto">
        <tr>
        <td class='t-right'>เบอร์โทร :</td>
        <td><label class="sr-only" >เบอร์โทร </label>
        <input class="form-control" type='text' name='tel' id='tel' style="width:300px"  
         value="<?php echo $editidemp_list['tel']?>" required />&nbsp;</td></tr>
        </div>
    </div>  

    <div class="form-row align-items-center">
        <div class="col-auto">
        <tr>
        <td class='t-right'>ที่อยู่ :</td>
        <td><label class="sr-only" >ที่อยู่</label>
        <textarea    class="form-control" name='address'  id='address' style="width:300px" value="<?php echo $editidemp_list['address']?>" required ><?php echo $editidemp_list['address']?></textarea>&nbsp; </td></tr>
        </div>
    </div>   

    <div class="form-row align-items-center">
        <div class="col-auto">
        <tr>
        <td class='t-right'>วันที่เริ่มงาน :</td>
        <td><label class="sr-only" >วันที่เริ่มงาน </label>
        <input class="form-control" type='date' name='work_start' id='work_start' style="width:300px"  
         value="<?php echo $editidemp_list['work_start']?>" required />&nbsp;</td></tr>
        </div>
    </div>  

    <div class="form-row align-items-center">
        <div class="col-auto">
        <tr>
        <td class='t-right'>เวลาทำงาน :</td>
        <td><label class="sr-only" >เวลาทำงาน</label>
        <textarea class="form-control" name='worktime'  id='worktime' style="width:300px" value="<?php echo $editidemp_list['worktime']?>" required ><?php echo $editidemp_list['worktime']?></textarea>&nbsp; </td></tr>
        </div>
    </div>   

   
</table>
<br>
        <center>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="btn btn-success" name="submit" type="submit" value="บันทึก"/>&nbsp;&nbsp;
            <a href="employee.php">
            <input class="btn btn-danger" type="button" class="cancel" value="ยกเลิก" />&nbsp;&nbsp;
            <a href="employee.php">
           
           
        
               
           
        </center>
        <br/>
    </form></center>


</body>

</html>