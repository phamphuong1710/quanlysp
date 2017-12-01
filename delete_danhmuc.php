<?php
	include 'sql.php';
	$id=$_GET['id'];
	$del="DELETE FROM danhmuc WHERE id=$id";
	$connect->exec($del);
	header("location:viewer_danhmuc.php"); 
 ?>