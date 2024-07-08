<?php
include("con1.php");
$id=$_POST['id'];
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

$query="update registration set name='$name',address='$address',city='$city',pincode='$pincode',state='$state',country='$country',username='$username',password='$password',gender='$gender',mobileno='$mobileno',email='$email',bod='$bod' where id=".$id;

$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>

alert("record not updated");
window.location="registrationmaster.php";

</script>
<?php
}
else
{
header("location:registrationmaster.php");
}
?>