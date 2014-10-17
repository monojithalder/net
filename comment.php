<?php
$id=$_GET['id'];
$uid=$_GET['uid'];
$comment=$_GET['com'];
echo $id."".$uid."".$comment;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$query="select * from info where uid='$uid'";
$result=mysql_query($query);
//$row=mysql_num_rows($result);
$uname=mysql_result($result,0,"username");
$fname=mysql_result($result,0,"fname");
$lname=mysql_result($result,0,"lname");
mysql_query("insert into comment(post_id,uid,uname,fname,lname,comment) values ('$id','$uid','$uname','$fname','$lname','$comment')");
?>