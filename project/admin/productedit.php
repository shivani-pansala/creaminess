<?php 
include("header.php");
?>
<?php
$id=$_GET['id'];
include("con1.php");
$query="select*from product where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form action="producteditcon.php" method="post">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">

<tr>
  <td colspan="8" align="center" class="hed">productform</td>
</tr>
<input name="id" type="hidden" value="<?php echo$_GET['id'];?>"/>
  
<tr>
<td>Id</td>
<td><input name="id" type="int" id="id" value="<?php echo $row["id"]?>" />
</td>
</tr>

<tr>
<td>Name</td>
<td><input name="name" type="text" id="name" value="<?php echo $row["name"]?>" />
</td>
</tr>

<tr>
<td>Price</td>
<td><input name="price" type="int" id="price" value="<?php echo $row["price"]?>" />
</td>
</tr>

<tr>
<td>Image</td>
<td><input name="image" type="text" id="image" value="<?php echo $row["image"]?>" />
</td>
</tr>

<tr>
<td>Company</td>
<td><input name="Company" type="text" id="Company" value="<?php echo $row["company"]?>" />
</td>
</tr>

<tr>
<td>Flavour</td>
<td><input name="flavour" type="text" id="flavour" value="<?php echo $row["flavour"]?>" />
</td>
</tr>

<tr>
<td>Description</td>
<td><input name="description" type="text" id="description" value="<?php echo $row["description"]?>" />
</td>
</tr>

<tr>
<td>Sugar</td>
<td><input name="sugar" type="text" id="sugar" value="<?php echo $row["sugar"]?>" />
</td>
</tr>

<tr>
<td colspan="8" align="center" class="hed">
<input type="submit" name="submit" value="product" class="btn">
</td>
</tr>
</table>
</form>
<?php 
}
?>
<?php include("footer.php");?>