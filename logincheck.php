<?php
include("connection.php");
session_start();
if(isset($_POST["log_btn"])!=null)
{
	$username=$_POST["username"];
	$pasword=$_POST["pasword"];
$result=mysql_query("select username,password from login");
while($data=mysql_fetch_array($result))
{   
$ANAME=$data["username"];
$APAS=$data["password"];
if($ANAME==$username && $APAS==$pasword)
{
		$_SESSION["user"]=$username;



$resul=mysql_query("select current_billno from billno where id=1");
while($dat=mysql_fetch_array($resul))
{   
$current_billno=$dat["current_billno"];


//mysql_query("INSERT INTO individual_cbno (user,billno)values('".$username."','".$current_billno."')")or die(mysql_error());

mysql_query("UPDATE individual_cbno SET billno='$current_billno'  WHERE user='$username'");
mysql_query("UPDATE billno SET current_billno=$current_billno+1 WHERE id=1");
}
		header("location:userhome.php");

}
}
}
?>