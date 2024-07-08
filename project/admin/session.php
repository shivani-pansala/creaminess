<?php 
session_start();
if($_SESSION["firstname"]=="")
{?>
	<script>
	alert("You must have to login first");
	window.location="../client/login.php";
	</script>
<?php
 }
?>