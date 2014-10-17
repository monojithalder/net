<?php
$user=$_GET['page'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
$query="select * from info";
$result=mysql_query($query);
$row=mysql_num_rows($result);
$flag=0;
$flag1=0;
//echo $user;
for($i=0;$i<$row;$i++)
{
	$f1=mysql_result($result,$i,"username");
	//echo $user.":".$f1;
	//echo $f1;
	//echo "asdasdas";
	if($user==$f1)
	{
		//$flag =$flag-1;
		//$flag1 +=1;
		//if($flag1 >= $row)
		$flag +=1;
		//echo $flag;
		//if($flag==)
		//{
			//echo "username not available";
			echo "{'us' : 'username not available'}";
			//echo $flag;
			//$flag=0;
		//}
		//{
			
		//}
	}
	else
	{
		$flag1 +=1;
		if($flag1 >= $row)
		{
			if($user != "")
			{
				//echo "Username Is available";
				echo "{'us' : 'username is available'}";
				$flag1=0;
			}
			else
			{
				echo "Please Enter a username";
			}
		}
	}
}
mysql_close($con);
?>