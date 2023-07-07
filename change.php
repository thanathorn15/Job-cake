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


</div><!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['idcake']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
                <center>
                    <h4 class="modal-title" id="myModalLabel">ชำระเงิน</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" style="font-size: 16px;">
            
                <?php
                $edit = mysqli_query($conn, "select * from cake where idcake='" . $row['idcake'] . "'");
                $erow = mysqli_fetch_array($edit);
                ?>



                <div class="container-fluid">
                    <form method="POST" action="index.php?idcake=<?php echo $erow['idcake']; ?>" enctype="multipart/form-data">

                        <div style="height:18px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px; font-size: 15px; ">ยอดรวม</label>
                            </div>
                            <input type="text" id="idcake" name="idcake" class="form-control" value="<?php echo $erow['idcake']; ?>" hidden>
                            <div class="col-lg-10">
                                <input type="number" id="price_vat_total" style="font-size: 14px; width: 20rem;" name="price_vat_total" class="form-control" value="<?php echo $rows['sumx']; ?>" disabled >
                            </div>
                        </div>

                        <div style="height:15px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px; font-size: 15px;">ส่วนลด</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" name="discount" style="font-size: 14px; width: 20rem;" id="discount" class="form-control" value=''>
                            </div>
                        </div>

                        <div style="height:15px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px; font-size: 15px;">รับเงิน</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" name="money" style="font-size: 14px; width: 20rem;" id="money" class="form-control" value=''>
                            </div>
                        </div>


                        
                        
                       
                </div>
            </div>


            <div class="modal-footer">
                <button type="submit"  name="submityy" class="btn btn-success "><span class="glyphicon glyphicon-check"></span>บันทึก</button>
                <button type="button" class="btn btn-danger " data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
</div>


<?php

error_reporting(0);
$discount=0;
$yodroam =$n1;
if (isset($_POST['submityy'])) {
    error_reporting(0);
$money = $_POST['money'];
$discount = $_POST['discount'];
$change = ($money - ($rows['sumx'] - $discount));





$querycommentee = "UPDATE `comment`  SET  `money`='$yodroam',`money_change`='$change',`discount`='$discount',`moneycus`='$money'    WHERE `comment`.`id` = 1 ";
$querycommentee = $conn->query( $querycommentee);
}

if ($change<0) {
    $change=0;
}
    ?>


<br>
<label type="submit" id="change" style="font-size: 20px; width: 40em;" name="change"  value="<?php echo $change; ?>" disabled >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เงินทอน &nbsp;&nbsp;<?php echo $change; ?> &nbsp;&nbsp;บาท</label>



