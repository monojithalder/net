<?php
$uid=$_GET['uid'];
$uname=$_GET['uname'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("Error".mysql_error());
}
mysql_select_db("net",$con);
$time=time();
$result=mysql_query("select * from online where uid='$uid' ");
$row=mysql_num_rows($result);
if($row ===0)
{
	echo $time;
	$result2=mysql_query("select * from info where uid='$uid' ");
	$fname=mysql_result($result2,0,"fname");
	$lname=mysql_result($result2,0,"lname");
	$pic=mysql_result($result2,0,"pic");
	mysql_query("insert into online(uid,uname,fname,lname,pic,time) values ('$uid','$uname','$fname','$lname','$pic','$time')");
}
else
{
	echo "u".$time;
	mysql_query("update online set time='$time' where uid='$uid' ");
}
?>