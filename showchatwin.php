<?php
$uid=$_GET['uid'];
$time=time()-120;
$view=0;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$result=mysql_query("select * from chat where fuid='$uid' and time >='$time' and view='$view'");
$row=mysql_num_rows($result);
for($i=0;$i<$row;$i++)
{
	$id=mysql_result($result,$i,"id");
	$fuid=mysql_result($result,$i,"uid");
	$result2=mysql_query("select * from info where uid='$fuid'");
	$name=mysql_result($result2,0,"fname");
	$message=mysql_result($result,$i,"message");
	echo "{'id' : '$id','message' : '$message','fuid' : '$fuid','name' : '$name'}";
}
?>