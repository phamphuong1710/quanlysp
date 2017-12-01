<?php 
	include 'sql.php';
	$id=$_GET['id'];
	if (isset($_POST['submit'])) {
		$tennhacungcap=$_POST['tennhacungcap'];
	}
	$update=$connect->prepare("UPDATE nhacungcap SET tennhacungcap='$tennhacungcap' WHERE id=$id");
	$update->execute();
	header("location:viewer_nhacungcap.php");
 ?>	