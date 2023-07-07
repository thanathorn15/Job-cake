<?php 
if(!isset($_SESSION)){
    session_start();
    $ID=  $_SESSION['ID'] ;
    $nameuser=  $_SESSION['name'] ;
     $email= $_SESSION['email'] ;
     $tel= $_SESSION['tel'];
     $status= $_SESSION['status'];
    
 
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        exit;
        }
    }
?>


<?php

 include "connectcakeDB/connectcakeDB.php";
if(isset($_POST)){



        $idcake =  $_POST['idcake'];
        $cakename =  $_POST['cakename'];
        $unit   =   $_POST['unit'];
        $amount   =   $_POST['amount'];
        $price   =   $_POST['price'];
        $minimum   =   $_POST['minimum'];
        $balance  =   $_POST['balance'];
        $import_date   =   $_POST['import_date'];
        $exp_date    =   $_POST['exp_date'];
        $file_get   =   $_FILES['imgs']['name'];
        $temp   =   $_FILES['imgs']['temp_name'];
    $file_to_save = "imgs/".$file_get;
    move_uploaded_file($temp,$file_to_save);

    $sql = "INSERT INTO cake(idcake,cakename,unit,amount,price,minimum,balance,import_date,exp_date,imgs) VALUES
    ('".$idcake."','".$cakename."','".$unit."','".$amount."','".$price."','".$minimum."','".$balance."','".$import_date."','".$exp_date."','".$file_to_save."')";
    $query = mysqli_query($conn,$sql);
    if ($query){
        $msg = "บันทึกข้อมูลสำเร็จ";
        echo $msg;
      
        header("Location: cake.php");


    }else{
        $msg = "ไม่สามารถป้อนข้อมูลได้ [".''.$query.''."]";
        echo $msg;
       

    }
}
?>

