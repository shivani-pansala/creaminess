<?php include("header.php");  ?>
 <form action="checklogin.php" method="post">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
	<td colspan="2" align="center" class="hed">Login Form</td>
</tr>
<tr>
	<td>Username</td>
	<td><input name="username" type="text" id="username"></td>
</tr>
<tr>
	<td>Password</td>
	<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
	<td colspan="2" align="center" class="hed">
	<input type="submit" name="submit"  value="Login" class="btn">
	</td>
</tr>

</table>
<br>
<h1 align="center"><a href="registration.php">CREATE NEW USER</a></h1>
</form>
     
                            
                            
                              	
<?php include("footer.php");?>
	