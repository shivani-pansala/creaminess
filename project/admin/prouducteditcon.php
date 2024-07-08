<?php
include("con1.php");
$id=$_POST['id'];
$name=$_POST["name"];
$price=$_POST["price"];
$image=$_POST["image"];
$company=$_POST["company"];
$flavour=$_POST["flavour"];
$decription=$_POST["decription"];
$sugar=$_POST["post"];

$query="update product set name='$name',price='$price' ,image='$image' ,company='$company,flavour='$flavour',decription='$decription',sugar='$sugar' where id=".$id;
$result=mysqli_query($con,$query);
if($result==Null)
{?>
<script>
alert("Record Not Updated");
window.location="productmaster.php";
</script>
<?php
}
else
{
	header("location:productmaster.php");
}
?>