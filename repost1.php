<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$uid=$_GET['uid'];
$count=$_GET['count'];
$old=$_GET['old'];
//echo $uid;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("Error".mysql_error());
}
mysql_select_db("net",$con);
$query="select * from wall where uid='$uid' ORDER BY id DESC LIMIT ".$old.",".$count;
$result=mysql_query($query);
$row=mysql_num_rows($result);
//echo $row;
for($i=0;$i<$row;$i++)
{
	$uname=mysql_result($result,$i,'uname');	
	$fname=mysql_result($result,$i,'fname');
	$lname=mysql_result($result,$i,'lname');
	$pic=mysql_result($result,$i,'upic');
	$word=mysql_result($result,$i,'word');
	$full=strtoupper($fname)." ".strtoupper($lname);
	echo "<table style=padding-left:40px;padding-top:40px><tr valign=top><td rowspan=2><img width=50px height=50px src=$pic /></td><td>$full</td></tr><tr><td>$word</td></tr>
	</table>";
}
?>
</body>
</html>
