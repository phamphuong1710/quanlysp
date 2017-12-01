<?php 
	include 'sql.php';
	$select=$connect->prepare("SELECT * FROM nhacungcap");
	$select->execute();
	$select->setFetchMode(PDO::FETCH_ASSOC);
	$result=$select->fetchAll(); 
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
 		<table class="table table-striped table-hover">
	 		<thead>
	 			<tr>
	 				<th>Tên danh mục</th>
	 				<th>Sửa</th>
	 				<th>Xóa</th>
	 			</tr>
	 		</thead>
	 		<tbody>
				<?php foreach ($result as $key => $value) {?>
					<tr>
		 				<td><?php echo $value['tennhacungcap']; ?></td>
						<td><a href="edit_nhacungcap.php?id=<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
						<td><a href="delete_nhacungcap.php?id=<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
		 			</tr>
				<?php } ?>
	 		</tbody>
 		</table>
 		<a href="form_ncc.php">Thêm nhà cung cấp</a>
 	</div>
 </body>
 </html>