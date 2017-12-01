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
 		<form action="insert_danhmuc.php" method="POST" role="form">
 			<legend>Form title</legend>
 		
 			<div class="form-group">
 				<label for="">Tên danh mục</label>
 				<input type="text" name="tendanhmuc" class="form-control" id="" placeholder="Tên danh mục" value="">
 			</div>
 		
 			
 		
 			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
 		</form>
 	</div>
 </body>
 </html>