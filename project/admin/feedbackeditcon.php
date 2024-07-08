<?php
include("con1.php");
$id=$_POST['id'];
$name=$_POST["name"];
$city=$_POST["city"];
$mobile_no=$_POST["mobileno"];
$e_mail=$_POST["email"];
$feedback=$_POST["feedback"];

$query="update feedback set name='$name',city='$city' ,mobileno='$mobileno' ,email='$email',feedback='$feedback' where id=".$id;
$result=mysqli_query($con,$query);
if($result==Null)
{?>
<script>
alert("Record Not Updated");
window.location="feedbackmaster.php";
</script>
<?php
}
else
{
	header("location:feedbackmaster.php");
}
?>