<?php
$student_reg = $_POST['reg'];
$student_names = $_POST['names'];
$math = $_POST['math'];
$linux = $_POST['linux'];
$php = $_POST['php'];
$java = $_POST['java'];
$total = $math+$linux+$php+$java;
$percentage = $total/4;
if($percentage >= 80){
	$decision="First Class";
} else if($percentage>=70){
	$decision="Second Class Upper Division";
} else if($percentage>=60){
	$decision="Second Class Lower Division";
} else if($percentage>=50){
	$decision="Pass";
} else if($percentage<=49){
	$decision="Repeat year";
}
$con=mysqli_connect('localhost','root','','16rp01194');
$sql = "INSERT INTO sendarasi_titien (student_reg,student_names,math,linux,php,java,total,percentage,decision) VALUES('$student_reg','$student_names','$math','$linux','$php','$java','$total','$percentage','$decision')";
$res = mysqli_query($con,$sql);
if (!$res) {
	echo"<script>window.alert('error for add marks!')</script>";
			header("location:index.php");
} else {
	echo"<script>window.alert('add marks successfull')</script>";
			header("location:view.php");
}
?>
