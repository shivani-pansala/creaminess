<?php include("header.php"); ?>
<?php
session_start();
if(!isset($_SESSION['username']))
{
?>
<script type="text/javascript">
alert("YOU MUST LOGIN FIRST");
window.location.href="login.php";
</script>
<?php
}
else
{
session_destroy();
?>
<script type="text/javascript">
window.location.href="login.php";
</script>
<?php
}
?>
</form>
</table><?php include("footer.php"); ?>

