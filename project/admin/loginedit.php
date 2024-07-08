<?php include("header.php");?>
<?php
$id=$_GET['id'];
include("con1.php");
$query="select*from login where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))

{
?>
<form action="logineditcon.php" method="post">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
<td colspan="2" align="center" class="hed">Login Form</td>
</tr>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>"/>
<tr>
<td>Username</td>
<td>
<input name="Username" type="text" id="Username" value="<?php echo $row["Username"]?>" />
</td>
</tr>
<tr>
  <td>Password</td>
  <td>
  <input name="Password" type="Password" id="Password" value="<?php echo $row["Password"]?>"/>
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center" class="hed">
 <input type="Submit" name="Submit" value="Login" class="btn">
 </td>
 </tr>
 </table>
 </form>
 <?php
 }
 ?>
 <?php include("footer.php");?>