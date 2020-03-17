<?php
include ("api.php");
$products = new api();
$data = ['OrderID'		=> $_GET["OrderID"],
		 'CustomerID'	=> $_GET["CustomerID"],
		 'EmployeeID'	=> $_GET["EmployeeID"],
		 'OrderDate'	=> date('Y-m-d H:i:s'),
		 'RequiredDate' => date('Y-m-d H:i:s'),
		 'products'		=> ['ProductID'=> $_GET["ProductID"], 'Quantity'=>$_GET["Quantity"]]
		];
echo $products->post("http://localhost/web_service/northwind/api/submit.php", $data);
?>