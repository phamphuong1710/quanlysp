<?php
	include "sql.php";
	$select=$connect->prepare("SELECT * FROM sanpham");
	$select->execute();
	$select->setFetchMode(PDO::FETCH_ASSOC);
	$result = $select->fetchAll(); 
	// echo "<pre>";
	// var_dump($result);
	function danhmuc($id)
	{
		include "sql.php";
		$select1=$connect->prepare("SELECT * FROM danhmuc WHERE id=$id");
		$select1->execute();
		$select1->setFetchMode(PDO::FETCH_ASSOC);
		$result1 = $select1->fetch(); 
		return $result1['tendanhmuc'];
	}
	function nhacungcap($id)
	{
		include "sql.php";
		$select2=$connect->prepare("SELECT * FROM nhacungcap WHERE id=$id");
		$select2->execute();
		$select2->setFetchMode(PDO::FETCH_ASSOC);
		$result2 = $select2->fetch(); 
		return $result2['tennhacungcap'];
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th>Tên sản phẩm</th>
 					<th>Tên sản phẩm</th>
 					<th>Danh mục</th>
 					<th>Nhà cung cấp</th>
 					<th>Sửa</th>
 					<th>Xóa</th>
 				</tr>
 			</thead>
 			<tbody>
 				
 				<?php foreach ($result as $key => $value) { ?>
 					<tr>
 						<td><?php echo $value['tensanpham'] ?></td>
 						<td><?php echo $value['giasanpham'] ?></td>
 						<td><?php echo danhmuc($value['danhmuc']) ?></td>
 						<td><?php echo nhacungcap($value['nhacungcap']) ?></td>
 						<td><a href="edit_sanpham.php?id=<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
 						<td><a href="delete_sanpham.php?id=<?php echo $value['id'] ?>"> <span class="glyphicon glyphicon-remove"></span></a></td>
 					</tr>
 				<?php } ?>

 				
 			</tbody>
 		</table>
 		<a href="form_sp.php">Thêm sản phẩm</a>
 	</div>
 </body>
 </html>