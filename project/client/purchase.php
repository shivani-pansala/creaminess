<?php
session_start();
if(!isset($_SESSION['username']))
header("location:login.php");
else
{
?>
<?php
include("con1.php");
$id=$_POST['id'];
$nm=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$tot= intval($price)*intval($quantity);
$a=$_SESSION['username'];
echo $tot;
$image=$_POST['image'];
$q="INSERT INTO `addtocart` (`name`, `price`, `username`, `image`, `quantity`, `total`) 
VALUES ('$nm', '$price', '$a', '$image', '$quantity', '$tot');";
mysqli_query($con,$q);
header("location:viewcart.php");
}
?>