<?php
	include 'sql.php';
	$id=$_GET['id'];
	$del="DELETE FROM nhacungcap WHERE id=$id";
	$connect->exec($del);
	header("location:viewer_nhacungcap.php"); 
 ?>