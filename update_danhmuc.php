<?php 
	include 'sql.php';
	$id=$_GET['id'];
	if (isset($_POST['submit'])) {
		$tendanhmuc=$_POST['tendanhmuc'];
	}
	$update=$connect->prepare("UPDATE danhmuc SET tendanhmuc='$tendanhmuc' WHERE id=$id");
	$update->execute();
	header("location:viewer_danhmuc.php");
 ?>	