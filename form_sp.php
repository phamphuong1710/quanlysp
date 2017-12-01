<?php 
	include "sql.php";
	$select=$connect->prepare("SELECT * FROM danhmuc");
	$select->execute();
	$select->setFetchMode(PDO::FETCH_ASSOC);
	$result=$select->fetchAll();
	$select1=$connect->prepare("SELECT * FROM nhacungcap");
	$select1->execute();
	$select1->setFetchMode(PDO::FETCH_ASSOC);
	$result1=$select1->fetchAll();
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
		<div class="col-xs-4">
			<form action="insert_sanpham.php" method="POST" role="form">
			<legend>Form title</legend>
		
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" class="form-control" placeholder="Tên sản phẩm" name="tensanpham">
			</div>
			<div class="form-group">
				<label for="">Giá sản phẩm</label>
				<input type="text" class="form-control" placeholder="Giá sản phẩmm" name="giasanpham">
			</div>
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="danhmuc" id="">
					<?php foreach ($result as $key => $value) {?>
						<option value="<?php echo $value['id'] ?>"><?php echo $value['tendanhmuc']; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Nhà cung cấp</label>
				<select name="nhacungcap" id="">
					<?php foreach ($result1 as $key => $value) {?>
						<option value="<?php echo $value['id'] ?>"><?php echo $value['tennhacungcap']; ?></option>
					<?php } ?>
				</select>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</body>
</html>