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
            <div class="sidebar-heading">
                <h5>ประเภท</h5>
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-cheese"></i>
                    <span>เค้ก</span>
                </a>
                <form action="index.php" method="POST">
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <input value="1ปอนด์" class="dropdown-item" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="1pond" href="index.php"></a>
                            <input value="2ปอนด์" class="dropdown-item" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="2pond" href="index.php"></a>
                            <input value="3ปอนด์" class="dropdown-item" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="3pond" href="index.php"></a>
                            <input value="ชิ้น" class="dropdown-item" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="cin" href="index.php"></a>
                        </div>
                    </div>
                </form>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-mug-hot"></i>
                    <span>เครื่องดื่ม</span>
                </a>
                <form action="bav_order.php" method="POST">
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <input value="ร้อน" class="dropdown-item" method="POST" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="hot" href="bav_order.php"></a>
                            <input value="เย็น" class="dropdown-item" method="POST" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="ice" href="bav_order.php"></a>
                            <input value="ปั่น" class="dropdown-item" method="POST" style=" font-size: 14px;width:185px;height:38px; " type="submit" name="smootie" href="bav_order.php"></a>
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

                                <div class="col-lg-8">

                                    <!-- Circle Buttons -->



                                    <?php
                                    include "connectcakeDB/connectcakeDB.php";
                                    $bev_unit = 'รายการเครื่องดื่ม';
                                    if (isset($_POST['hot'])) {
                                        $query = "SELECT * FROM `beverage` WHERE `bev_unit` LIKE 'ร้อน'";

                                        $result = $conn->query($query);
                                        $bev_unit = 'ร้อน';
                                        //echo  $unit;
                                    } else if (isset($_POST['ice'])) {
                                        $query = "SELECT * FROM `beverage` WHERE `bev_unit` LIKE 'เย็น'";

                                        $result = $conn->query($query);
                                        $bev_unit = 'เย็น';
                                        //echo  $unit;
                                    } else if (isset($_POST['smootie'])) {
                                        $query = "SELECT * FROM `beverage` WHERE `bev_unit` LIKE 'ปั่น'";

                                        $result = $conn->query($query);
                                        $bev_unit = 'ปั่น';
                                        // echo  $unit;

                                    } else {
                                        $query = "SELECT * FROM `beverage` ";

                                        $result = $conn->query($query);

                                        // echo  $unit;
                                    } ?>

                                    <div class="card shadow mb-">
                                        <div class="card-header py-6">
                                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $bev_unit; ?></h6>
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="main">
                                                <article>
                                                    </form>
                                                    <div class="row justify-content-left">


                                                        <?php

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $bavid =  $row['bev_id']; 
                                                        ?>


<?php
      $querywaitorder = "SELECT * FROM waitorder WHERE idproduct ='$bavid' ";
     $resultwaitorder = $conn->query($querywaitorder);
     $amount1=0;
        if ($resultwaitorder->num_rows > 0) {
            while ($row1 = $resultwaitorder->fetch_assoc()) {
                $amount1 =  $row1['amount'];             
        
?><?php  } }?>

                                                                <div class="row">
                                                                    <div class="col-sm-7">
                                                                        <div class="card" style="width: 11.5rem; margin-center: 15px;">
                                                                            <div class="card-body">
                                                                                <form action="bav_order.php" method="POST">
                                                                                    <center><img src="<?php echo $row['bev_imgs']; ?>" alt="" width='140' height='130'></center><br>

                                                                                    <input type="hidden" value="<?php echo $row['bev_name']; ?>" name="bev_name">
                                                                                    <center>
                                                                                        <h6 class="card-text mb-1 text-muted"> <?php echo $row['bev_name']; ?></h6>
                                                                                    </center>

                                                                                    <input type="hidden" value="<?php echo $row['bev_unit']; ?>" name="bev_unit">
                                                                                    <center>


                                                                                        <h6 class="card-text mb-2 text-muted" style="color:black" name="price<?php echo $row['idcake']; ?>">ราคา<?php echo $row['bev_price']; ?> บาท </h6>
                                                                                        </p>
                                                                                        <div><input type="hidden" value="<?php echo $row['bev_price']; ?>" name="bev_price">
                                                                                            <input type="hidden" value="<?php echo $row['bev_id']; ?>" name="bev_id">
                                                                                            <input type="submit" class="btn btn-primary" name="add" value="+" style="width:45px;height:30px ;font-size: 14px"></a>
                                                                                            
                                                                                            &nbsp; &nbsp; 

                                                                                            <?php if ($amount1 < 1 AND $amount1>-1) { ?>
                                                                                                <input type="submit" class="btn btn-primary" name="del" value="-" style="width:45px;height:30px ;font-size: 14px" disabled>
                                                                                                <?php   }else { ?>
                                                                                                    <b style="color :black; font-size:120%;"> <?php echo $amount1 ; ?> &nbsp;</b>
                                                                                                    <input type="submit" class="btn btn-primary" name="del" value="-" style="width:45px;height:30px ;font-size: 14px">
                                                                                                <?php }?>
                                                                                            
                                                                                           


                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </div>

                                            <?php
                                                            }
                                                        }
                                            ?><br><br><br><br><br><br><br>


                                                </article>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Brand Buttons -->


                                </div>

                                <div class="col-lg-4">

                                    <div class="card shadow mb-1">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">คำสั่งซื้อ</h6>
                                        </div>
                                        <div class="card-body">
                                            <form id="bev_id" method="POST">
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a  href=" " onclick="window.open('export.php').window.print()"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Icons8_flat_print.svg/1024px-Icons8_flat_print.svg.png" alt="" width='40' height='40'></a> 
                                            <?php include "bill.php";?>
                                            

                                                                                                  
 <div class="botton">
<?php  $querycomment = "SELECT * FROM comment ";
 $resultsquerycomment = $conn->query( $querycomment);
if ($resultsquerycomment->num_rows > 0) {
    while ($rowresultsquerycomment = $resultsquerycomment->fetch_array()) {
        $rowresultsquerycommentzz  = $rowresultsquerycomment['comment_name'];

    }}

?>

                                                    <div class="form-row align-items-center">
                                                        <div class="botton">
                                                            <form  method="post"><br>
                                                                <div class="form-row align-items-center">
                                                                    <div class="col-auto" style='font-size: 19px'>
                                                                        <tr>
                                                                        <a href="#edit1<?php echo $row['idcake']; ?>"  data-toggle="modal" class="btn btn-outline-warning"  style="width:42px;height:35px ;font-size: 14px" ><i   class='far fa-lg fa-edit' title="หมายเหตุ"></i></a>
                                                                            <td class='t-right' style='font-size: 19px'>หมายเหตุ :</td>
                                                                            <td><label class="sr-only" style='font-size: 19px'>หมายเหตุ</label>
                                                                                <?php echo $rowresultsquerycommentzz;?>
                                                                               
                                                                                
                                                                                
                                                                               <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                               &nbsp;&nbsp;&nbsp;
                                                                </div>
                                                                </div> 
                                                                
                                                                 </form>
                                                               
                                                                 <?php  if (isset($_POST['set'])) {
                                                                      error_reporting(0);
                                                                    $commentdd =$_POST['comment'];
                                                                    $querycommentee = "UPDATE `comment`  SET  `comment_name`='$commentdd'  WHERE `comment`.`id` = 1 ";
                                                                        $querycommentee = $conn->query( $querycommentee);

                                                                        echo "<meta http-equiv='refresh' content='0.25;URL=bav_order.php'>";
                                                            }
                                                            
                                                             ?>
                        <?php include('comment_bav.php'); ?> <?php  include('change_bav.php'); ?>

                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <a href="#edit<?php echo $row['idcake']; ?>" data-toggle="modal" class="btn btn-primary"  style="width:250px;height:35px ;font-size: 18px"> <i   class='far  fa-lg fa-money-bill-alt' title="คิดเงิน"></i></a>                                      
                    <br> <br>
                  <form action="bav_order.php" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                             <input  action="export.php" href="export.php" class="btn btn-success" name="save" type="submit" value="บันทึก" style="width:120px;height:30px ;font-size: 14px"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input class="btn btn-danger" name="addtoorder" type="submit" value="ยกเลิก" style="width:120px;height:30px;font-size: 14px" />

                                          
                                                             
                                                                </form>

                                                                
                                                            </form>
                                                            
                                                        </div>
                                                    </div>

                                                </div>

                                        </div>

                                    </div>
                    </body>


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


<?php

if (isset($_POST['add'])) {

    $bev_id = $_POST['bev_id'];
    $idproduct = $_POST['bev_id'];
    $name = $_POST['bev_name'];
    $price = $_POST['bev_price'];
    $unit =  $_POST['bev_unit'];
    $priceperunit = $_POST['bev_price'];
    $amount =  1;
    $query3 = "SELECT * FROM waitorder WHERE idproduct = '$idproduct'";
    $resultsx = $conn->query($query3);

    if ($resultsx->num_rows > 0) {

        $query4 = "UPDATE `waitorder` SET `amount` = `amount`+1 WHERE `waitorder`.`idproduct` = '$idproduct'";
        $result = $conn->query($query4);
        $query4 = "UPDATE `waitorder` SET `price` = `amount`*'$priceperunit' WHERE `waitorder`.`idproduct` = '$idproduct'";
        $result = $conn->query($query4);
        $query4 = "UPDATE `waitorder` SET `price_vat` = (`price`+`price`*7/100)*7/107 WHERE `waitorder`.`idproduct` = '$idproduct'";
        $result = $conn->query($query4);
        if ($query) {

            echo "<meta http-equiv='refresh' content='0.25;URL=bav_order.php'>";
        } else {
            echo 'error';
        }
    } else {
        $price_vat = ($_POST['bev_price'] + $_POST['bev_price'] * 0.07)*7/107;
        $day =  date('d');

        $month_arr=array(
            "1"=>"มกราคม",
            "2"=>"กุมภาพันธ์",
            "3"=>"มีนาคม",
            "4"=>"เมษายน",
            "5"=>"พฤษภาคม",
            "6"=>"มิถุนายน", 
            "7"=>"กรกฎาคม",
            "8"=>"สิงหาคม",
            "9"=>"กันยายน",
            "10"=>"ตุลาคม",
            "11"=>"พฤศจิกายน",
            "12"=>"ธันวาคม"                 
        );
         
        $month =  $month_arr[date("n")];
        
        $year =  date("Y")+543;



        $query = "INSERT INTO `waitorder`(`id`, `idproduct`, `name`, `price`, `unit`,`priceperunit`,`amount`,`datetime`,`day`,`month`,`year`,`employee`,`billID`,`price_vat`) 
               VALUES (' $billno ','$idproduct','$name','$price','$unit','$priceperunit','$amount','$today' ,'$day' ,'$month' ,'$year' ,'$nameuser' ,001,'$price_vat')";
        $result = $conn->query($query);
      

        if ($query) {
 
            echo "<meta http-equiv='refresh' content='0.25;URL=bav_order.php'>";
        } else {
            echo 'error';
        }
    }
}


if (isset($_POST['save'])) {
    $comment = $_POST['comment'];
    $str2 = '1234567890';
    $idreport = str_shuffle($str2);
    $idreport55 = substr($idreport, 0, 5);
    date_default_timezone_set("Asia/Bangkok");
    $today2 =  date("Y-m-d H:i:s");

    
    
    date_default_timezone_set("Asia/Bangkok");
    $datestart =  date("H:i:s");
    $dateend =  date("23:59:00");

    
    $querynumberq = "SELECT * FROM numberq  ";
    $resultnumberq = $conn->query($querynumberq);
       if ($resultnumberq->num_rows > 0) {
           while ($rownumberq = $resultnumberq->fetch_assoc()) {
            $num=$rownumberq['num'];
      

    if ($datestart>=$dateend) {
        $querynum= "UPDATE `numberq`  SET  `num`=1  WHERE `numberq`.`id`=1 ";
        $querynum = $conn->query( $querynum);
    }else {
        $querynum= "UPDATE `numberq`  SET  `num`=`num` + 1  WHERE `numberq`.`id`=1 ";
        $querynum = $conn->query( $querynum);
        }
      



    $querywaitorder2 = "SELECT * FROM waitorder WHERE `billID` =1 ";
    $resultwaitorder2 = $conn->query($querywaitorder2);
       if ($resultwaitorder2->num_rows > 0) {
           while ($rowwaitorder2 = $resultwaitorder2->fetch_assoc()) {
               $idproduct2 = $rowwaitorder2['idproduct'];
               $name2 = $rowwaitorder2['name'];
               $price2 =  $rowwaitorder2['price'];
               $unit2 = $rowwaitorder2['unit'];
               $amount2 = $rowwaitorder2['amount'];   
               $datetime2 = $rowwaitorder2['datetime']; 
               $employee2 =  $rowwaitorder2['employee'];
               $billID2 =  $rowwaitorder2['billID'];
               $price_vat2 =  $rowwaitorder2['price_vat'];     
               $day =  $rowwaitorder2['day']; 
               $month =  $rowwaitorder2['month']; 
               $year =  $rowwaitorder2['year'];     
           





    $query = "INSERT INTO report(`id`, `idproduct`, `name`,  `price`, `unit`,`amount`,`datetime`,`day`,`month`,`year`,`employee`, `billID` ,`price_vat`,`num`)
     VALUES ('$idreport55','$idproduct2','$name2','$price2','$unit2','$amount2','$today2','$day','$month','$year','$nameuser' ,'$billID2','$price_vat2','$num')
                  ";
    $result = $conn->query($query);


}}

$querycomment = "SELECT * FROM comment  ";
$resultcomment = $conn->query($querycomment);
   if ($resultcomment->num_rows > 0) {
       while ($rowwaitcomment = $resultcomment->fetch_assoc()) {


        $yodddrom =  $rowwaitcomment['money']; 
       }}

       $sumyodrom =$n1;

if($yodddrom==0){
    $querybill = "INSERT INTO bill( `bill_id`,`datetime`,`id`, `num`, `total_price` )
VALUES ('','$today2','$idreport55','$num','$sumyodrom')
             ";
$resultbill = $conn->query($querybill);
}
if($yodddrom>0){
    $querybill = "INSERT INTO bill( `bill_id`,`datetime`,`id`, `num`, `total_price` )
VALUES ('','$today2','$idreport55','$num','$yodddrom')
             ";
$resultbill = $conn->query($querybill);
}



$querycommentee2 = "UPDATE `comment`  SET  `money`=0,`money_change`=0,`comment_name`='',`discount`=0    WHERE `comment`.`id` = 1 ";
$querycommentee2 = $conn->query( $querycommentee2);


   
        $queryzz = "UPDATE `report`  SET  `comment`=' $rowresultsquerycommentzz'  WHERE `report`.`id` = '$idreport55' ";
        $resultzz = $conn->query($queryzz);



        $querycommentee = "UPDATE `comment`  SET  `comment_name`=''  WHERE `comment`.`id` = 1 ";
        $querycommentee = $conn->query( $querycommentee);

    }
}

    if ($query) {
        echo "<meta http-equiv='refresh' content='0.25;URL=bav_order.php'>";
        echo '<script language="javascript">';
        echo 'alert("บันทึกสำเร็จ")';
        echo '</script>';
    } else {
        echo '<script>alert("error")</script>';
    }
    $query = "DELETE FROM `waitorder` ";
    $result = $conn->query($query);

    if ($query) {
        echo "<meta http-equiv='refresh' content='0.25;URL=bav_order.php'>";
    } else {
        echo '<script>alert("error")</script>';
    }
}



if (isset($_POST['del'])) {
    $idproduct = $_POST['bev_id'];


    $query = "SELECT  FROM `waitorder` ";
    $resultss = $conn->query($query);


    $query1 = "UPDATE   `waitorder`  SET  `amount`=`amount` - 1 WHERE `waitorder`.`idproduct`= '$idproduct' ";
    $result = $conn->query($query1);
    $query1 = "UPDATE `waitorder` SET `price` = `price`-`priceperunit` WHERE `waitorder`.`idproduct` = '$idproduct'";
    $result = $conn->query($query1);
    $query4 = "UPDATE `waitorder` SET `price_vat` = `price`+`price`*7/100 WHERE `waitorder`.`idproduct` = '$idproduct'";
    $result = $conn->query($query4);






    echo "<meta http-equiv='refresh' content='0.25;URL=bav_order.php'>";

    if ($amount < 2) {
        $queryw = "DELETE FROM `waitorder`WHERE `waitorder`.`idproduct`= '$idproduct' ";
        $result = $conn->query($queryw);
        echo "<meta http-equiv='refresh' content='0.25;URL=bav_order.php'>";
    }


    if ($query) {
        $msg = " ";
        echo $msg;
    } else {

        echo "<meta http-equiv='refresh' content='0.25;URL=report.php'>";
    }
}


if (isset($_POST['report'])) {

    $str = '1234567890';
    $shuffled = str_shuffle($str);
    $billno = date('Y') . date('m') . date('d') . substr($shuffled, 0, 4);


    $billno = 001;

    $sql_update = "update waitorder SET billID='1000'";
    $query_sql = mysqli_query($conn, $sql_update);

    echo "<meta http-equiv='refresh' content='0.25;URL=report.php'>";
}


if (isset($_POST['addtoorder'])) {

    $query = "DELETE FROM `waitorder` ";
    $result = $conn->query($query);
    $querycommentee = "UPDATE `comment`  SET  `comment_name`=''  WHERE `comment`.`id` = 1 ";
    $querycommentee = $conn->query( $querycommentee);
    $querycommentee = "UPDATE `comment`  SET  `money`='$money',`money_change`='$change'     WHERE `comment`.`id` = 1 ";
    $querycommentee = $conn->query( $querycommentee);

    $querycommentee2 = "UPDATE `comment`  SET  `money`=0,`money_change`=0,`comment_name`='',`discount`=0 ,`moneycus`=0   WHERE `comment`.`id` = 1 ";
$querycommentee2 = $conn->query( $querycommentee2);

    
    if ($query) {
        echo "<meta http-equiv='refresh' content='0.25;URL=bav_order.php'>";
    } else {
        echo '<script>alert("error")</script>';
    }
}
?>