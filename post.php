<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$value=$_GET['s'];
$uid=$_GET['uid'];
//echo $uid;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("Error".mysql_error());
}
mysql_select_db("net",$con);
$query="select * from info where uid='$uid'";
$result=mysql_query($query);
$uname=mysql_result($result,0,'username');
$fname=mysql_result($result,0,'fname');
$lname=mysql_result($result,0,'lname');
$pic=mysql_result($result,0,'pic');
$full=strtoupper($fname)." ".strtoupper($lname);
mysql_query("insert into wall(uid,uname,fname,lname,upic,word) values ('$uid','$uname','$fname','$lname','$pic','$value')");
echo "<table style=padding-left:40px;padding-top:40px><tr valign=top><td rowspan=2><img width=50px height=50px src=$pic /></td><td>$full</td></tr><tr><td>$value</td></tr></table>";
?>
</body>
</html>
