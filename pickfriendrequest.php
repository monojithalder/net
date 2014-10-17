<?php
$uid=$_GET['uid'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$result=mysql_query("select * from request where uid='$uid' ");
$row=mysql_num_rows($result);
$view=1;
echo "<table>";
for($i=0;$i<$row;$i++)
{
	$ruid=mysql_result($result,$i,"ruid");
	$rfname=mysql_result($result,$i,"rfname");
	$rlname=mysql_result($result,$i,"rlname");
	$rpic=mysql_result($result,$i,"rpic");
	echo "<tr id='tr$ruid'><td><img src='$rpic' width='48' height='48'</td><td>$rfname  $rlname</td><td><input type='button' id='acc$ruid' value='Accept' onclick='acceptrequest(this)' /></td><td><input type='button' id='re$ruid' value='Cancel' onclick='cancelrequest(this)' /></td></tr>";
	mysql_query("update request set view='$view' where uid='$uid' and ruid='$ruid' ");
}
echo "</table>";
?>