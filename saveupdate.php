<?php
include("api.php");
$products = new api();
$data = json_decode (file_get_contents('php://input'),true);
try{
	//simpan ke tabel order detail
	$sql = "UPDATE order_details SET ProductID ='".$data["ProductID"]."', Quantity ='".$data["Quantity"]."' WHERE OrderID ='".$data["OrderID"]."' ";
	$products->conn->query($sql);
	echo "Successfully. Query :".$sql;
}catch(PDOException $e) {
	echo "Failed saving to database : ".$e->getMessage();	
}
?>