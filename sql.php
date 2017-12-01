<?php
	try{
		$host="localhost";
		$username="root";
		$password="";
		$dbname="quanlysp";
		$connect=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
		$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} 
	catch(Exception $e){
		echo "Xảy ra lỗi".$e->getMessage();
	}
 ?>