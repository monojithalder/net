<?php
session_start();
//echo $_SESSION['name'];
//echo "sadlaslmdl";
//echo $_GET['me'];
//$message=$_GET['me'];
//$name=$_SESSION['name'];
$con=mysql_connect("localhost","root","123");
//$fname=$_SESSION['fname'];
$uid=$_GET['uid'];
$fuid=$_GET['fuid'];
//echo $fname;
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("net",$con);
//$query="select * from chat where name='$fname'";
$view=0;
$query="select * from chat where uid='$fuid' and fuid='$uid' and view='$view' ORDER BY id DESC LIMIT 1";
$result=mysql_query($query);
$a=0;
$row=mysql_num_rows($result);
//echo $result;	
	if($row > 0)
	{
		$result2=mysql_query("select * from info where uid='$fuid'");
		$name=mysql_result($result2,0,"fname");
		$id=mysql_result($result,0,"id");
		if($_SESSION['old'] != $id)
		{
			$_SESSION['old']=$id;
			$see=mysql_result($result,0,"view");
			//$name=mysql_result($result,0,"name");
			$message=mysql_result($result,0,"message");

//echo $message;
//echo $_SESSION['old'];
		//if($see == 0)
		//{
	//$_SESSION['old']=$message;
			mysql_query("update chat set view='1' where id='$id' ");
			$query1="select * from smi";
			$result1=mysql_query($query1);
			$r=mysql_num_rows($result1);
			for($i=0;$i < $r;$i++)
			{
				$f1=mysql_result($result1,$i,"str");
				$f2=mysql_result($result1,$i,"path");
				$pos=strpos($message,$f1);
				//$message1=$message;
				//echo $pos;
				if($pos !== false)
				{
					$message1=str_replace($f1,"<img src=$f2 />",$message);
					//echo "come";
					//$pos=-1;
				}
				//echo str_replace($f1,"<img src=$f2 />",$message);
			}
			if($message1!="")
			{
				echo $name.":".$message1;
			}
			else
			{
				echo $name.":".$message;
			}
		}
		else
		{
			echo "none";
		}
	
	}
	else
	{
			echo "none";
	}
	//}
?>