<?php
include("con1.php");
$name=$_POST["name"];
$city=$_POST["city"];
$mobile_no=$_POST["mobileno"];
$e_mail=$_POST["email"];
$feedback=$_POST["feedback"];
$query=" insert into feedback(name,city,mobileno,email,feedback)values('$name','$city','$mobileno','$email','$feedback')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert("record not deleted");
window.location="feedbackmaster.php";
</script>
<?php
}
else
{
	header("location:feedbackmaster.php");
}

?>