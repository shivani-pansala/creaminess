<?php
include("con1.php");
$name=$_POST["name"];
$address=$_POST["address"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];
$country=$_POST["country"];
$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$mobile_no=$_POST["mobileno"];
$e_mail=$_POST["email"];
$bod=$_POST["bod"];
$query=" insert into registration(name,address,city,pincode,state,country,username,password,gender,mobileno,email,bod)values('$name','$address','$city','$pincode','$state','$country','$username','$password','$gender','$mobileno','$email','$bod')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert("record not deleted");
window.location="registrationmaster.php";
</script>
<?php
}
else
{
	header("location:registrationmaster.php");
}

?>