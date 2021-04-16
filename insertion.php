<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone_number=$_POST['number'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'records');
$q="insert into worker(name,email,phoneno) values('$name','$email',$phone_number)";
mysqli_query($con,$q);
mysqli_close($con);
header('location://localhost/test/php/home.php');
?>
