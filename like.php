<?php

$id=$_GET['id'];
$uid=$_GET['uid'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$query="select * from info where uid='$uid'";
$result=mysql_query($query);
$row=mysql_num_rows($result);
$uname=mysql_result($result,0,"username");
$fname=mysql_result($result,0,"fname");
$lname=mysql_result($result,0,"lname");
mysql_query("insert into likepost(post_id,uid,uname,fname,lname) values ('$id','$uid','$uname','$fname','$lname')");
$query1="select * from likepost where post_id='$id'";
$result1=mysql_query($query1);
$row1=mysql_num_rows($result1);
echo $row1;	
?>