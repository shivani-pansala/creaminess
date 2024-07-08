<?php include("header.php");?>

<?php
$id=$_GET['id'];
include("con1.php");
$query="select*from registration where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))

{
?>
<form action="registrationeditcon.php" method="post">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
<td colspan="12" align="center" class="hed">REGISTRATION FORM</td>
</tr>
<input name="id" type="hidden" value="<?php echo $_GET['id'];?>"/>
<tr>
<td>Name</td>
<td>
<input name="name" type="text" id="name" value="<?php echo $row["name"]?>" />
</td>
</tr>
<tr>
  <td>Address</td>
  <td>
  <textarea name="address" rows="4" cols="4" value="<?php echo $row["address"]?>"/>
  </textarea>
 </td>
 </tr>
 <tr>
  <td>City</td>
  <td>
  <input name="city" type="text" id="city" value="<?php echo $row["city"]?>"/>
 </td>
 </tr>
 <tr>
  <td>Pincode</td>
  <td>
  <input name="pincode" type="text" id="pincode" value="<?php echo $row["pincode"]?>"/>
 </td>
 </tr>
 <tr>
  <td>State</td>
  <td>
  <input name="state" type="text" id="state" value="<?php echo $row["state"]?>"/>
 </td>
 </tr>
 <tr>
  <td>Country</td>
  <td>
  <input name="country" type="text" id="country" value="<?php echo $row["country"]?>"/>
 </td>
 </tr>
 <tr>
  <td>Username</td>
  <td>
  <input name="username" type="text" id="username" value="<?php echo $row["username"]?>"/>
 </td>
 </tr>
 <tr>
  <td>Password</td>
  <td>
  <input name="password" type="password" id="password" value="<?php echo $row["password"]?>"/>
 </td>
 </tr>
 <tr>
  <td>Gender</td>
  <td>
  <input name="gender" type="radio" id="gender" class="btn" value="<?php echo $row["gender"]?>" />Male
	<input name="gender" type="radio" id="gender" class="btn" value="<?php echo $row["gender"]?>" checked/>Female 
 </td>
 </tr>
 <tr>
  <td>Mobile_no</td>
  <td>
  <input name="mobileno" type="bigint" id="mobileno" value="<?php echo $row["mobileno"]?>"/>
 </td>
 </tr>
 <tr>
  <td>E_mail</td>
  <td>
  <input name="email" type="text" id="email" value="<?php echo $row["email"]?>"/>
 </td>
 </tr>
 <tr>
  <td>Bod</td>
  <td>
  <input name="bod" type="date" id="bod" value="<?php echo $row["bod"]?>"/>
 </td>
 </tr>
 <tr>
 <td colspan="12" align="center" class="hed">
 <input type="submit" name="submit" value="Registration" class="btn">
 </td>
 </tr>
 </table>
 </form>
 <?php
 }
 ?>
 <?php include("footer.php");?>