<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$con=mysql_connect("localhost","adonis_mysql","adonis123");
if(!$con)
{
	die("error".mysql_error());
}
//echo "sss";
mysql_select_db("adonis_data",$con);
$query="select * from info";
$result=mysql_query($query);
$row=mysql_num_rows($result);
echo "<table>";
for($i=0;$i<$row;$i++)
{
	//echo "aaa";
	$id=mysql_result($result,$i,"id");
	$name=mysql_result($result,$i,"im");
	$ima="ajaximage/".$name;
	echo "<tr><td><img src=$ima width=100px height=100px /></td></tr>";
}
?>
</body>
</html>
