<!DOCTYPE html>
<html>
	<head>
		<title>Teacher</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	  	<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>Input Marks</h2>
			<form action="insertmarks.php" method="POST">
	  			<div class="form-group">
	    			<label for="student">Student Reg:</label>
	    			<input type="text" class="form-control" id="reg" name="reg">
	  			</div>
	 			<div class="form-group">
				    <label for="names">Student Names:</label>
				    <input type="text" class="form-control" id="names" name="names">
	 			 </div>
	 			 <div class="form-group">
				    <label for="math">MATH:</label>
				    <input type="text" class="form-control" id="math" name="math">
	 			 </div>
	 			 <div class="form-group">
				    <label for="linux">LINUX:</label>
				    <input type="text" class="form-control" id="linux" name="linux">
	 			 </div>
	 			 <div class="form-group">
				    <label for="php">PHP:</label>
				    <input type="text" class="form-control" id="php" name="php">
	 			 </div>
	 			 <div class="form-group">
				    <label for="java">JAVA:</label>
				    <input type="text" class="form-control" id="java" name="java">
	 			 </div>
	  			<button type="submit" class="btn btn-primary">ADD</button>
			</form> 
		</div>
	</body>
</html>
