<?php 
	include "sql.php";
	if(isset($_POST['submit'])){
		$tendanhmuc=$_POST['tendanhmuc'];
		
	} 
	$insert="INSERT INTO danhmuc(tendanhmuc) VALUES('$tendanhmuc')";
	$connect->exec($insert);
	echo "Thêm thành công";
 ?>