<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$data="mono";
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$query="select * from info where fname like '$data%' ";
$result=mysql_query($query);
$arr;
while($obj = mysql_fetch_array($result))
{
	//$f1=mysql_result($result,$i,"name");
	//echo "{'name' : '$f1'}";
	echo $obj[0];
	$arr[]=$obj;
}
$c=count($arr);
echo "<table>";
for($i=0;$i<$c;$i++)
{
	echo "<tr><td>$arr[$i]</td></tr>";
}
echo "</table>";
?>
</body>
</html>
