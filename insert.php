<?php 
session_start();
//echo $_SESSION['name'];
//echo "sadlaslmdl";
//echo $_GET['me'];
$message=$_GET['me'];
$fuid=$_GET['fuid'];
$uid=$_SESSION['id'];
$con=mysql_connect("localhost","root","123");
$time=time();
$view=0;
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
//mysql_query("update chat set message='$message' where name='$name'");
mysql_query("insert into chat(uid,fuid,time,message,view) values ('$uid','$fuid','$time','$message','$view')");
echo "Me:".$message;
?>