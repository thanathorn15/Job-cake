<?php
require('connectcakeDB/connectcakeDB.php');
?>

<h2>   ร้านจ๊อบเค้ก</h2>
<?php ?>

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


$query = "SELECT * FROM waitorder ";
$result = $conn->query($query);

$query2 = "SELECT SUM(price) AS sumx FROM waitorder;";
$results = $conn->query($query2);


$rows = $results->fetch_assoc();

$str = '1234567890';
$shuffled = str_shuffle($str);

$str2 = '1234567890';
$idreport = str_shuffle($str2);
$idreport55 =substr($idreport, 0, 5);

error_reporting(0);
date_default_timezone_set("Asia/Bangkok");
$today = date("Y-m-d H:i:s");
"</h4 style='font-size: 19px' ><br><br>";

$querynumberq = "SELECT * FROM numberq  ";
$resultnumberq = $conn->query($querynumberq);
   if ($resultnumberq->num_rows > 0) {
       while ($rownumberq = $resultnumberq->fetch_assoc()) {
        $num=$rownumberq['num'];
  
	   }}
	   

	   $querycomment = "SELECT * FROM comment  ";
$resultcomment = $conn->query($querycomment);
   if ($resultcomment->num_rows > 0) {
       while ($rowcomment = $resultcomment->fetch_assoc()) {
		$moneycuscomment=$rowcomment['moneycus'];
		$discountcomment=$rowcomment['discount'];
		$money=$rowcomment['money'];
  
       }}
       
echo "<h5 style='font-size: 19px' >คิวที่  " . $num . "  "; ?><?php  
echo "<h5 style='font-size: 19px' >เลขที่ใบเสร็จ  " . $idreport55 . "  "; ?><?php  
echo "<h5 style='font-size: 19px' >วันที่ : " . $today . "  "; ?><?php   
$billno =substr($shuffled, 0, 5);
echo "<br><br>";
echo "รายการ";
echo "<br>";
$n = 0;
$price_vat_total = 0;
$price_novat= 0;
$discount=0;

$discount=$_POST['discount'];

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $n++;

        $idproduct =  $row['idproduct'];
        $name =  $row['name'];
        $price =  $row['price'];
        $unit =  $row['unit'];
        $price_vat_total += $row['price_vat'];
        $n1=($rows['sumx'] - $discount);
        $n2 = $price_vat_total;
        $n3=$discount;
        $price_novat=$n1-$n2;
        $price_vat_total = $row['price_vat'];
        $n1=($rows['sumx'] - $_SESSION['discount']);
        $n8=($rows['sumx'] );
        $n2 = $price_vat_total;
        $amount =  $row['amount'];

        echo "<h5 style='font-size: 19px'>   " . $amount . " $name " . $unit . " ราคา " . $price . " บาท   </h5>";
    }
}
echo "<br> ";
$vat =$n8*(7/100);
$pricenomal= $n8;
$sumprice =  $pricenomal-$vat;

$yoddrommmm =$n1- $discountcomment;

$sumpriceformat=number_format($sumprice);
$vatformat=number_format($vat);
echo "<h5 style='font-size: 19px'>ราคาสุทธิ : " .$sumpriceformat. " บาท" . "</h5>";
echo "<h5 style='font-size: 19px''>ภาษีมูลค่าเพิ่ม 7% : " . $vatformat . " บาท" . "</h5>";
echo "<h5 style='font-size: 19px''>ส่วนลด : " . $discountcomment . " บาท" . "</h5>";
echo "<h5 style='font-size: 19px'>ยอดรวมทั้งสิ้น : " .$yoddrommmm  . " บาท" . "</h5>";
echo "<h5 style='font-size: 19px'> พนักงาน : " . $nameuser . " </h5>"; 
       

?>


<?php

$sql = "SELECT   * from comment  ";



$res=mysqli_query($conn,$sql);
$html='<table">


</tr>';
		


		$n = 0;
		while($row=mysqli_fetch_assoc($res)){$n++;
			
			$html.='<tr">
			<h5 style="font-size: 19px">หมายเหตุ : '.$row['comment_name'].' </h5>
			====================================================================
			<h5 style="font-size: 19px">ชำระเงิน  </h5>
			<h5 style="font-size: 19px">รับเงิน : '.$row['moneycus'].' บาท </h5>
			<h5 style="font-size: 19px">เงินทอน : '.$row['money_change'].' บาท </h5>
			
			
	</tr>';

				
		}
		$html.='</table>';
		
		echo $html;
		?>