<?php
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("test",$con);
$query="select * from info";
$result=mysql_query($query);
$row=mysql_num_rows($result);
for($i=1;$i<$row;$i++)
{
	$pic=mysql_result($result,$i,"pic");
	echo "<img src=$pic width=20px height=20px />&nbsp;";
}
?>