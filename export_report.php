<?php
require('connectcakeDB/connectcakeDB.php');



$sql = "SELECT    datetime,id,idproduct,name,unit,price,unit,employee,amount,price
FROM report  ";





$res=mysqli_query($conn,$sql);
$html='<table align=center border=1 style="width: 100%;">
<tr style="background-color:#545454 ; color:#FFFFFF ;">
		<th>วัน/เวลา</th>
        <th>เลขที่ใบเสร็จ</th>
        <th>รหัสรายการ</th>
        <th>ชื่อรายการ</th>
        <th>ชนิด</th>
        <th>พนักงาน</th>
        <th>จำนวน</th>
        <th>ราคา</th>



</tr>';

		$n = 0;
		while($row=mysqli_fetch_assoc($res)){$n++;
			$html.='<tr style="background-color:#FFFFFF ;">
							<td>'.$row['datetime'].'</td>
							<td>'.$row['id'].'</td>
							<td>'.$row['idproduct'].'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['unit'].'</td>
							<td>'.$row['employee'].'</td>
							<td>'.$row['amount'].'</td>
							<td>'.$row['price'].'</td>
					</tr>';

				
		}
		$html.='</table>';
		header('Content-Type:application/xls');
		$file = 'excel/' . time() . '.xls';
		header('Content-Disposition:attachment;filename='.$file.' ');
		echo $html;
		?>