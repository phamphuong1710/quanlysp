<?php 
	include "sql.php";
	$id=$_GET['id'];
	if (isset($_POST['submit'])) {
		$tensanpham=$_POST['tensanpham'];
		$giasanpham=$_POST['giasanpham'];
		$danhmuc=$_POST['danhmuc'];
		$nhacungcap=$_POST['nhacungcap'];
	}
	$update=$connect->prepare("UPDATE sanpham SET tensanpham='$tensanpham',giasanpham='$giasanpham',danhmuc='$danhmuc',nhacungcap='$nhacungcap' WHERE id=$id");
	$update->execute();
	header("location:viewer_sanpham.php");
 ?>