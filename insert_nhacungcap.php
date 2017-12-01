<?php
	include "sql.php";
	if(isset($_POST['submit'])){
		$tennhacungcap=$_POST['tennhacungcap'];
	} 
	$insert="INSERT INTO nhacungcap(tennhacungcap) VALUES('$tennhacungcap')";
	$connect->exec($insert);
	echo "Thêm thành công"; 
 ?>