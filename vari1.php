<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$user=$_GET['user'];
$pass=$_GET['pass'];
$email=$_GET['email'];
$address=$_GET['address'];
$sex=$_GET['sex'];
$phone=$_GET['phone'];
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
for($i=0;$i<=$row;$i++)
{
	$fl=mysql_result($result,$i,"username");
	if($user==$$f1)
	{
		$flag=1;
		echo "Username not available";
	}
}
mysql_query("insert into info(username,fname,lname,password,email,address,sex,phone) values ('$user','$fname','$lname','$pass','$email','$a','$sex','$phone')",$con);
echo "inserted";
?>
</body>
</html>
