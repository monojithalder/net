<?php
$uid=$_GET['uid'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$view=0;
$result=mysql_query("select * from request where uid='$uid' and view='$view' ");
$noti=0;
$row=mysql_num_rows($result);
for($i=0;$i<$row;$i++)
{
	$id=mysql_result($result,$i,"uid");
	if($id==$uid)
	{
		$noti=$noti + 1;
	}
}
echo $noti;

?>