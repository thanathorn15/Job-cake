

    


<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=cakedb", "root", "");
$connect->exec("set names utf8");

$column = array('datetime','id','idproduct','name',  'unit', 'employee', 'amount','price');



$query = 'SELECT * FROM report 
		WHERE name LIKE "%'.$_POST["search"]["value"].'%" 
		OR datetime LIKE "%'.$_POST["search"]["value"].'%" 
		OR id LIKE "%'.$_POST["search"]["value"].'%" 
		OR idproduct LIKE "%'.$_POST["search"]["value"].'%" 
		OR unit LIKE "%'.$_POST["search"]["value"].'%" 
		OR amount LIKE "%'.$_POST["search"]["value"].'%" 
		OR price LIKE "%'.$_POST["search"]["value"].'%" 
		OR employee LIKE "%'.$_POST["search"]["value"].'%" 
		
	

';

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$total_price = 0;
$total_amount = 0;

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["datetime"];
 $sub_array[] = $row["id"];
 $sub_array[] = $row["idproduct"];
 $sub_array[] = $row["name"];
 $sub_array[] = $row["unit"];
 $sub_array[] = $row["employee"];
 $sub_array[] = $row["amount"];
 $sub_array[] = $row["price"];

 $total_price = $total_price + floatval($row["price"]);
 $total_amount = $total_amount + floatval($row["amount"]);
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM report";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST["draw"]),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data,
 'total'    => number_format($total_price,2),
 'total2'    => number_format( $total_amount)
 
 
 
 
);


   

echo json_encode($output);



?>
