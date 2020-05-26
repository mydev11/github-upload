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
			<h2>VIEW Marks</h2>
			<a class="btn btn-primary" href="marks.php">Add marks</a>
			<?php
				$con=mysqli_connect('localhost','root','','16rp01194');
				$query=("SELECT * FROM sendarasi_titien");
				$sql=mysqli_query($con,$query);
			?>      
			<table class="table table-dark table-hover">
				<thead>
			   		<tr>
			   			<th>ID</th>
			        	<th>STUDENT REG</th>
			        	<th>STUDENT NAMES</th>
			        	<th>MATH</th>
			        	<th>LINUX</th>
			        	<th>PHP</th>
			        	<th>JAVA</th>
			        	<th>TOTAL</th>
			        	<th>%</th>
			        	<th>DECISION</th>
			      	</tr>
			    </thead>
			    <tbody>
			    	<?php
							while($rows=mysqli_fetch_array($sql)) {
						?>
			    	<tr>
			    		<td><?php echo $rows["id"];?></td>
						<td><?php echo $rows["student_reg"];?></td>
						<td><?php echo $rows["student_names"];?></td>
						<td>
							<?php 
								if($rows['math']<=49){
									echo "<div style='color:red;'>".$rows["math"]."<div>";
								} else{
									echo "<div style='color:white;'>".$rows["math"]."<div>";
								}
							?>
								
						</td>
						<td>
							<?php 
							if($rows['linux']<=49){
									echo "<div style='color:red;'>".$rows["linux"]."<div>";
								} else{
									echo "<div style='color:white;'>".$rows["linux"]."<div>";
								}
							?>
						</td>
						<td>
							<?php 
								if($rows['php']<=49){
									echo "<div style='color:red;'>".$rows["php"]."<div>";
								} else{
									echo "<div style='color:white;'>".$rows["php"]."<div>";
								}
							?>
						</td>
						<td>
							<?php 
								if($rows['java']<=49){
									echo "<div style='color:red;'>".$rows["java"]."<div>";
								} else{
									echo "<div style='color:white;'>".$rows["java"]."<div>";
								}
							?>
						</td>
						<td>
							<?php 
								if($rows['total']<=200){
									echo "<div style='color:red;'>".$rows["total"]."<div>";
								} else{
									echo "<div style='color:white;'>".$rows["total"]."<div>";
								}
							?>
								
						</td>
						<td>
							<?php 
								if($rows['total']<=200){
									echo "<div style='color:red;'>".$rows["percentage"]."<div>";
								} else{
									echo "<div style='color:white;'>".$rows["percentage"]."<div>";
								}
							?>
								
						</td>
						<td>
							<?php 
								if($rows['percentage']<=49){
									echo "<div style='color:red;'>".$rows["decision"]."<div>";
								} else{
									echo "<div style='color:white;'>".$rows["decision"]."<div>";
								}
							?>
						</td>
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>