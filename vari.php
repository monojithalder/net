<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$user=$_GET['user'];
$pass=$_GET['pass'];
$email=$_GET['emaill'];
$address=$_GET['address'];
$sex=$_GET['sex'];
$phone=$_GET['phone'];
$pic="all.gif";
if($address=="")
{
	$a="none";
}
else
{
	$a=$address;
}
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
//echo $user;
for($i=1;$i<$row;$i++)
{
	//$fl=mysql_result($result,$i,"username");
	$f1=mysql_result($result,$i,"username");
	//echo $f1;
	if($user==$f1)
	{
		$flag +=1;
		//if($flag==$row)
		//{
			//echo "Username not available";
			//$flag=0;
		//}
	}
}
if($flag >= 1)
{
	echo "Username is not available";
	//echo "{'us' : 'username not available'}";
}
else
{
	$check=mysql_query("insert into info(username,fname,lname,password,email,address,sex,phone,pic) values ('$user','$fname','$lname','$pass','$email','$a','$sex','$phone','$pic')",$con);
	if(!$check)
	{
		echo "error";
	}
	else
	{
		echo "inserted";
	}
}
?>