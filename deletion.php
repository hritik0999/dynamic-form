<?php
$phone=$_POST['phone'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'records');
$q="delete from worker where phoneno=$phone";
mysqli_query($con,$q);
mysqli_close($con);
header('location://localhost/test/php/home.php');
?>