<?php include("header.php");?>
<br>
<br>
<br>
<br>
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
    <td colspan="15" align="center">REGISTRATION</td>
</tr>
<tr class="th1">
	<td>Id</td>
	<td>Name</td>
	<td>Address</td>
	<td>City</td>
	<td>Pincode</td>
	<td>State</td>
	<td>Country</td>
	<td>Username</td>
	<td>Password</td>
	<td>Gender</td>
	<td>Mobileno</td>
	<td>Email</td>
	<td>Dob </td>
	<td>Delete</td>
</tr>
<?php
	include("con1.php");
	$query="select*from registration";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr><td>";
		echo $row["id"];
		echo "</td><td>";
		echo $row["name"];
		echo "</td><td>";
		echo $row["address"];
		echo "</td><td>";
		echo $row["city"];
		echo "</td><td>";
		echo $row["pincode"];
		echo "</td><td>";
		echo $row["state"];
		echo "</td><td>";
		echo $row["country"];
		echo "</td><td>";
		echo $row["username"];
		echo "</td><td>";
		echo $row["password"];
		echo "</td><td>";
		echo $row["gender"];
		echo "</td><td>";
		echo $row["mobileno"];
		echo "</td><td>";
		echo $row["email"];
		echo "</td><td>";
		echo $row["dob"];
		
		echo "</td><td>";
		echo "<a
		href='registrationdelete.php?id=".$row[0]."'>Delete
		</a>";
		echo "</td></tr>";
	}
?>

</table>
<?php include("footer.php");?>	