<?php
$uid=$_GET['uid'];
$user=$_GET['uname'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$query="select * from info where uid='$uid' ";
$result=mysql_query($query);
//echo $uid."jjjjjjjjjjj";
$f1=mysql_result($result,0,"username");
if($f1 == $user)
{
	$f2=mysql_result($result,0,"pic");
	//echo "aaaa";
	echo "{'pic' : '$f2'}";
}
?>