<?php
 session_start();
 if(!isset($_SESSION['username']))
 {
 ?>
 <script type="text/javascript">
 alert("you must login first");
 window.location.href="login.php";
 </script>
 <?php
 }
 else 
 
    session_destroy();
?>
   

<img src="img/con2.gif">
	<script type="text/javascript">
	
	window.location.href="login.php";
	</script>

	