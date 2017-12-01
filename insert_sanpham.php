<?php
	include "sql.php";
	if(isset($_POST['submit'])){
		$tensanpham=$_POST['tensanpham'];
		$giasanpham=$_POST['giasanpham'];
		$danhmuc=$_POST['danhmuc'];
		$nhacungcap=$_POST['nhacungcap'];
	} 
	$insert="INSERT INTO sanpham(tensanpham,giasanpham,danhmuc,nhacungcap) VALUES('$tensanpham','$giasanpham','$danhmuc','$nhacungcap')";
	$connect->exec($insert);
	echo "Thêm thành công";
?>