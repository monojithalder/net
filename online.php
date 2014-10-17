<?php
$uid=$_GET['uid'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("Error".mysql_error());
}
mysql_select_db("net",$con);
$result=mysql_query("select * from friend where uid='$uid' ");
$row=mysql_num_rows($result);
$arr;
$count=0;
$j=0;
$time=time()-120;
for($i=0;$i<$row;$i++)
{
	$fuid=mysql_result($result,$i,"fuid");
	//$ffname=mysql_result($result,$i,"ffname");
	//$flname=mysql_result($result,$i,"flname");
	//$fpic=mysql_result($result,$i,"fpic");
	$result2=mysql_query("select * from online where uid='$fuid' ");
	$count=mysql_num_rows($result2);
	if($count === 0)
	{
		
	}
	else
	{
		//echo $count;
		$entrytime=mysql_result($result2,0,"time");
		//echo $entrytime."  ".$time;
		if($entrytime < $time)
		{
			
		}
		else
		{
			$arr[$j]=$fuid;
			$j++;
		}
		$count=0;
	}
	
}
$temp_id;
echo "<table>";
for($k=0;$k<$j;$k++)
{
	$temp_id=$arr[$k];
	$result3=mysql_query("select * from info where uid='$temp_id' ");
	$ffname=mysql_result($result3,0,"fname");
	$flname=mysql_result($result3,0,"lname");
	$fpic=mysql_result($result3,0,"pic");
	echo "<tr><td><a href='#' id='a$temp_id' onclick='chatwindow(this)' title='$ffname $flname' ><img src='$fpic' width='40px' height='40px' /></a></td><td>$ffname  $flname</td></tr>";
	
}
echo "</table>";
?>