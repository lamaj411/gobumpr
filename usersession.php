
<script language="JavaScript"><!--
javascript:window.history.forward(0);
//--></script>
<?php
session_start();
include("connection.php");
$user=$_SESSION["user"];
if($user)
{
	$user=$_SESSION["user"];
}
else
{
	unset($_SESSION['user']);
	session_destroy();
	header("location:index.php");
}
?>

