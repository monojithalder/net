<?php
$data=$_GET['s'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$query="select * from info where fname like '$data%' ";
$result=mysql_query($query);
$row=mysql_num_rows($result);
$i=0;
//echo $data;
if($data !="")
{
	echo "<table>";
	for($i=0;$i<$row;$i++)
	{
		
		$f1=mysql_result($result,$i,"fname");
		$f2=mysql_result($result,$i,"uid");
		$f3=mysql_result($result,$i,"pic");
		if($f3=="none")
		{
		echo "<tr  style='cursor:pointer' id=$f2 onclick=abc() onmouseover=ch1(this.id) onmouseout=ch2(this.id) ><td><a herf=pro.php?uid=$f2><img src=all.gif width=30px height=30px /></a></td><td><a href=pro.php?uid=$f2>$f1</a></td></tr>";
		}
		else
		{
			echo "<tr  style='cursor:pointer' id=$f2 onclick=abc() onmouseover=ch1(this.id) onmouseout=ch2(this.id) ><td><a herf=pro.php?uid=$f2><img src=$f3 width=30px height=30px /></a></td><td><a href=pro.php?uid=$f2>$f1</a></td></tr>";
		}
	}
	echo "</table>";
}
else
{
	echo "none";
}
?>