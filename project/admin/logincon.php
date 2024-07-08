<?php
include("con1.php");
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$query=" insert into login(Username,Password)values('$Username','$Password')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>

<script>
alert("record not deleted");
window.location="loginmaster.php";
</script>
<?php
}
else
{
	header("location:loginmaster.php");
}

?>