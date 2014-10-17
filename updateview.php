<?php
$chatid=$_GET['chatid'];
$view=1;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
mysql_query("update chat set view='$view' where id='$chatid'");
?>