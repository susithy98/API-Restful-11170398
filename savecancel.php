<?php
include("api.php");
$products = new api();
$data = json_decode(file_get_contents('php://input'), true);
try{
	//delete ke tabel order_details
	$sql = "DELETE FROM order_details WHERE ProductID = '".$data["ProductID"]."' AND OrderID = '".$data["OrderID"]."' ";
	$products->conn->query($sql);
	
	echo "Successfully. Query : ".$sql;
}catch(PDOException $e){
	echo "Failed saving to database :".$e->getMessage();
}
?>