<?php
include("con1.php");
$id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];
$image=$_FILES[["image"]["name"];Move_upload_file($_FILES['image']['tmp_name'],"img/".$image);
$company=$_POST["company"];
$flavour=$_POST["flavour"];
$description=$_POST["description"];
$sugar=$_POST["sugar"];

$query=" insert into product(id,name,price,image,company,flavour,description,sugar)values('$id','$name','$price','$image','$company','$flavour,'$description','$sugar')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>

<script>
alert("record not deleted");
window.location="productmaster.php";
</script>
<?php
}
else
{
	header("location:productmaster.php");
}

?>