<?php
include("api.php");
$products = new api();
$data = ['OrderID'		=> $_GET["OrderID"],
		 'ProductID'	=> $_GET["ProductID"],
		 'Quantity' 	=> $_GET["Quantity"]];
echo $products->put("http://localhost/web_service/northwind/api/saveupdate.php",$data);
?>