<?php
$uid=$_GET['uid'];
$ruid=$_GET['ruid'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$result=mysql_query("select * from info where uid='$uid' ");
$result2=mysql_query("select * from info where uid='$ruid' ");
$username=mysql_result($result,0,"username");
$ufname=mysql_result($result,0,"fname");
$ulname=mysql_result($result,0,"lname");
$upic=mysql_result($result2,0,"pic");
$rusername=mysql_result($result2,0,"username");
$rfname=mysql_result($result2,0,"fname");
$rlname=mysql_result($result2,0,"lname");
$rpic=mysql_result($result2,0,"pic");
mysql_query("insert into friend(uid,uname,ufname,ulname,fuid,funame,ffname,flname,fpic) values ('$ruid','$rusername','$rfname','$rlname','$uid','$username','$ufname','$ulname','$upic')");

mysql_query("insert into friend(uid,uname,ufname,ulname,fuid,funame,ffname,flname,fpic) values ('$uid','$username','$ufname','$ulname','$ruid','$rusername','$rfname','$rlname','$rpic')");

mysql_query("delete from request where uid='$uid' and ruid='$ruid' ");
echo "Accepted";
?>