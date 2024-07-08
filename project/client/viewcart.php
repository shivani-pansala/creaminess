<?php
session_start();
if(!isset($_SESSION['username']))
	header("location:login.php");
else
{
?>
<?php
include("header.php") 
?>
<bR><br><br>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["viewcart"]["quantity"].value;
if (a==null || a=="")

{
  alert("quantity must be filled out");
  return false;
}

</script>

<!-- ##### Call To Action Start ###### -->
<br>
<br>
	<form id="form1" method="post" action="deletecart.php">
	<center>
<table>
<?php
include("con1.php");
$tot=0;
$user=$_SESSION['username'];
$query="select * from addtocart where username='$user'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<tr><td rowspan="5"><img src="<?php echo $row[4]?>" height=200 width=200></td></tr>
<tr><td><font color='#520675' size="+2"><input type="text" name="nm" value="<?php echo $row['name'];?>"></font></td></tr>
<tr><td><font size="+2"><input type="text"name="pr"id="textfield"value="<?php echo $row['price'];?>"/></td></tr>
<tr><td><font size="+2"><input type="text"name="qu"id="textfield"value="<?php echo $row['quantity'];?>"onSubmit="return validateForm()"/></td></tr>
<tr><td><font size="+2"><input type="text"name="tot"id="textfield"value="<?php echo $row['total'];?>"/></td></tr>
<tr><td>
<?php echo "<a href='deletecartitem.php?id=".$row['0']."'><h4 ><font color='#1AB088'>Delete</font></h4></a>"?>
</td></tr>
<?php
$a=$row['6'];
$tot=$tot+$a;
?><?php
}
?>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='#2A33BA' size='+3'>Total Amount=</font>
<td><font color='#2A33BA' size='+3'><?php echo $tot;?></font></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input align="middle" name="submit" value="purchase"/id="bt" type="submit"class="btn credit-btn box-shadow">
</td>
</tr>
</table>
</form>
	

<?php
include("footer.php") 
?>
<?php }?> 