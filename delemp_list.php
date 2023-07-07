


<?php include "connectcakeDB/connectcakeDB.php";

$sql = "DELETE FROM user where ID = ".$_GET['delidemp_list']."";
$query = mysqli_query($conn,$sql);
    if ($query){
        $msg = "ลบข้อมูลสำเร็จ";
        echo $msg;
        header("Location: employee.php");


    } else {
        $msg = "ไม่สามารถลบข้อมูลได้";
        echo $msg;
        header("Location: employee.php");

    }



?>