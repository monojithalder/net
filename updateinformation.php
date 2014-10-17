<?php
$uid=$_GET['uid'];
$live=$_GET['live'];
$study=$_GET['study'];
$born=$_GET['born'];
$address=$_GET['add'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("Error".mysql_error());
}
mysql_select_db("net",$con);
$check=mysql_query("update info set liveon='$live',studiesat='$study',born='$born',address='$address' where uid='$uid'");
if(!$check)
{
	echo "error";
}
else
{
	echo "update";
}

?>