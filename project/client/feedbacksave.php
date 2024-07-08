<?php
include("con1.php");
$name=$_POST['name'];
$city=$_POST['city'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
mysql_query("INSERT INTO `feedback` (`name`, `city`, `mobileno`, `email`, `feedback`) VALUES ('$name', '$city', '$mobileno', '$email', '$feedback')");
header("location:home.php");
?>