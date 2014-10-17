<?php
//$v=$_GET['s'];
//echo $v;
session_start();
$word=$_POST['piccom'];
$targer="/";
$targer=$target.basename($_FILES['pic']['name']);
$type=$_FILES['pic']['name'];
//echo $type."ss";
$result=0;
//echo $_FILES['f']['type'];
	//echo "image";
	if(move_uploaded_file($_FILES['pic']['tmp_name'],$targer))
	{
		//echo "Uploaded";
		$uid=$_POST['u'];
		echo $uid;
		$con=mysql_connect("localhost","root","123");
		if(!$con)
		{
			die("error".mysql_error());
		}
		mysql_select_db("net",$con);
		$query="select * from info where uid='$uid'";
		$result=mysql_query($query);
		$uname=mysql_result($result,0,'username');
		$fname=mysql_result($result,0,'fname');
		$lname=mysql_result($result,0,'lname');
		$pic=mysql_result($result,0,'pic');
		if($word != "")
		{
			mysql_query("insert into wall(uid,uname,fname,lname,upic,word,compic) values ('$uid','$uname','$fname','$lname','$pic','$word','$type')");
			$result=1;
		}
		else
		{
			mysql_query("insert into wall(uid,uname,fname,lname,upic,compic) values ('$uid','$uname','$fname','$lname','$pic','$type')");
			$result=1;
		}
	}
	else
	{
		$result=0;
		//echo "Error";
	}
	//sleep(1);
?>
<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>   