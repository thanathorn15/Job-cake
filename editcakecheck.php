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
        $idcake = $_POST['idcake'];
        $cakename= $_POST['cakename'];
        $unit  =   $_POST['unit'];
        $price =   $_POST['price'];
        $minimum = $_POST['minimum'];
        $balance= $_POST['balance'];
        $import_date  =   $_POST['import_date'];
        $exp_date =   $_POST['exp_date'];
 
      
        $sql_update = "update cake set minimum = '".$minimum."'
        ,balance = '".$balance."'
        ,import_date='".$import_date."'
        ,exp_date='".$exp_date."'  where idcake = '".$idcake."'";
        $query_sql = mysqli_query($conn,$sql_update);
        $imgs =   $_FILES['imgs'];
        

        $file_get   =   $_FILES['imgs']['name'];
        $temp       =   $_FILES['imgs']['tmp_name'];
        $file_to_saved = "imgs/".$file_get;
        move_uploaded_file($temp, $file_to_saved);
      
        $sql_update = "update cake set cakename = '".$cakename."',unit = '".$unit."',price='".$price."',imgs = '".$file_to_saved."' where idcake = '".$idcake."'";
        $query_sql = mysqli_query($conn,$sql_update);

        if ($query_sql){
          
            echo "<meta http-equiv='refresh' content='0.25;URL=cake.php'>";
        }else{
           
            echo "<meta http-equiv='refresh' content='0.25;URL=cake.php'>";
    }}
?>

