<?php 
include("header.php");
?>

<?php
$id=$_GET['id'];
include("con1.php");
$query="select*from feedback where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form action="feedbackeditcon.php" method="post">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">

<tr>
  <td colspan="5" align="center" class="hed">Feedback Form</td>
</tr>
<input name="id" type="hidden" value="<?php echo$_GET['id'];?>"/>
  
<tr>
<td>Name</td>
<td><input name="name" type="text" id="name" value="<?php echo $row["name"]?>" />
</td>
</tr>

<tr>
<td>City</td>
<td><input name="city" type="text" id="city" value="<?php echo $row["city"]?>" />
</td>
</tr>

<tr>
<td>Mobile_no</td>
<td><input name="mobileno" type="bigint" id="mobileno" value="<?php echo $row["mobileno"]?>" />
</td>
</tr>


<tr>
<td>Email</td>
<td><input name="email" type="text" id="email" value="<?php echo $row["email"]?>" />
</td>
</tr>

<tr>
<td>Feedback</td>
<td><input name="feedback" type="text" id="feedback" value="<?php echo $row["feedback"]?>" />
</td>
</tr>

<tr>
<td colspan="5" align="center" class="hed">
<input type="submit" name="submit" value="feedback" class="btn">
</td>
</tr>
</table>
</form>
<?php 
}
?>
<?php include("footer.php");?>