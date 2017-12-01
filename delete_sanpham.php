<?php
	include "sql.php";
	$id=$_GET['id'];
	$del="DELETE FROM sanpham WHERE id=$id";
	$connect->exec($del);
	header("location:viewer_sanpham.php");
 ?>