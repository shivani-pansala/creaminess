<?php
include("con1.php");
$id=$_POST['id'];
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$query="update login set Username='$Username',Password='$Password' where id=".$id;
$result=mysqli_query($con,$query);
if($result==Null)
{?>
<script>
alert("Record Not Updated");
window.location="loginmaster.php";
</script>
<?php
}
else
{
	header("location:loginmaster.php");
}
?>