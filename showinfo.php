<?php
$uid=$_GET['uid'];
//echo $uid;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("Error".mysql_error());
}
mysql_select_db("net",$con);
$result=mysql_query("select * from info where uid='$uid'");
$address=mysql_result($result,0,"address");
$liveon=mysql_result($result,0,"liveon");
$studiesat=mysql_result($result,0,"studiesat");
$born=mysql_result($result,0,"born");
echo "{'add' : '$address','liveon' : '$liveon','study' : '$studiesat','born' : '$born'}";
?>