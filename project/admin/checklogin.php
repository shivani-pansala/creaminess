<?php
include("con1.php");
$username=$_POST["username"];
$password=$_POST["password"];

if($username=="" || $password == "")
{
	header("location:home.php");

}
else
{
$query="select * from login where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);
if($count==0)
{

?>
<script>
alert("no");
window.location="index.php";
</script>
<?php
}
else
{
	session_start();
	$_SESSION['admin']=$username;

?>
<script>
alert("Login successfully");
window.location="home.php";
</script>
<?php
}
}
?>