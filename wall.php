<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
$uid=$_GET['uid'];
///echo $uid;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("Error".mysql_error());
}
mysql_select_db("net",$con);
$fri=mysql_query("select * from friend where uid='$uid' ");
$row6=mysql_num_rows($fri);
//echo $row2;
$se=$uid;
for($k=0;$k<$row6;$k++)
{
	$fuid=mysql_result($fri,$k,"fuid");
	//if($fuid === 0)
	//{
		$se =$se." or uid=".$fuid;
		//echo "aaaaa";
	//}
}
//echo $se;
$query="select * from wall where uid=$se ORDER BY id DESC LIMIT 0,6 ";
//echo $query;
$result=mysql_query($query);
$row=mysql_num_rows($result);
//echo $row;
for($i=0;$i<$row;$i++)
{
	$id=mysql_result($result,$i,'id');
	$uname=mysql_result($result,$i,'uname');	
	$fname=mysql_result($result,$i,'fname');
	$lname=mysql_result($result,$i,'lname');
	$pic=mysql_result($result,$i,'upic');
	$word=mysql_result($result,$i,'word');
	$compic=mysql_result($result,$i,'compic');
	$textid=$id+10;
	$full=strtoupper($fname)." ".strtoupper($lname);
	$query1="select * from likepost where post_id='$id' and uid='$uid'";
	$result1=mysql_query($query1);
	$row1=mysql_num_rows($result1);
	$query2="select * from likepost where post_id='$id'";
	$result2=mysql_query($query2);
	$row2=mysql_num_rows($result2);
	//echo $id;
	$query3="select * from comment where post_id='$id'";
	//echo $query3;
	$result3=mysql_query($query3);
	$row3=mysql_num_rows($result3);
	if($row1 === 0)
	{
		if($compic != "" && $word == "")
		{
			echo "<table style=padding-left:40px;padding-top:40px><tr valign=top><td rowspan=4><input type=hidden id='hidden $id'  value=$id  /><img width=50px height=50px src=$pic /></td><td>$full</td></tr><tr><td><div id=$id><img src=$compic width=300px height=400px /></td></tr><tr><td><div id=$id><table><tr><td><img src=like.png id=like$id onclick=like(this) style=cursor:pointer  />Other $row2 Liked</td></tr><tr><td><img src=dislike.png id=dislike$id onclick=like(this) style=cursor:pointer  /><td></tr></table></div></td></tr><tr><td><input type=text id='text $id'  autocomplete=off placeholder=Write Something about it.... style=width:300px onkeydown='comment(event,this)'  /></td></tr></table><table style=padding-left:95px;>";
			for($j=0;$j<$row3;$j++)
			{
				$cfname=mysql_result($result3,$j,"fname");
				$clname=mysql_result($result3,$j,"lname");
				$comment=mysql_result($result3,$j,"comment");
				echo "<tr><td>$cfname $clname<td><td>$comment</td></tr>";
			}
			echo "</table>";
			
			
		}
		else if($compic == "" && $word !="")
		{
			echo "<table style=padding-left:40px;padding-top:40px><tr valign=top><td rowspan=4><input type=hidden id='hidden $id'  value=$id  /><img width=50px height=50px src=$pic /></td><td>$full</td></tr><tr><td>$word</td></tr><tr><td><div id=$id><img src=like.png id=like$id onclick=like(this) style=cursor:pointer  />Other $row2 Liked</div></td></tr><tr><td><input type=text id='text $id'  autocomplete=off placeholder=Write Something about it.... style=width:300px onkeydown='comment(event,this)'  /></td></tr></table><table style=padding-left:95px;>";
				for($j=0;$j<$row3;$j++)
			{
				$cfname=mysql_result($result3,$j,"fname");
				$clname=mysql_result($result3,$j,"lname");
				$comment=mysql_result($result3,$j,"comment");
				echo "<tr><td>$cfname $clname<td><td>$comment</td></tr>";
			}
			echo "</table>";
		}
		else if($compic != "" && $word != "")
		{
			echo "<table style=padding-left:40px;padding-top:40px><tr valign=top><td rowspan=5><input type=hidden id='hidden $id'  value=$id  /><img width=50px height=50px src=$pic /></td><td>$full</td></tr><tr><td>$word</td></tr><tr><td><img src=$compic width=300px height=400px /></td></tr><tr><td><div id=$id><img src=like.png id=like$id onclick=like(this) style=cursor:pointer  />Other $row2 Liked</div></td></tr><tr><td><input type=text id='text $id'  autocomplete=off placeholder='Write Something about it....' style=width:300px onkeydown='comment(event,this)' /></td></tr></table><table style=padding-left:95px;>";
		
			for($j=0;$j<$row3;$j++)
			{
				$cfname=mysql_result($result3,$j,"fname");
				$clname=mysql_result($result3,$j,"lname");
				$comment=mysql_result($result3,$j,"comment");
				echo "<tr><td>$cfname $clname<td><td>$comment</td>/tr>";
			}
			echo "</table>";
		}
	}
	else
	{
		if($compic != "" && $word == "")
		{
			echo "<table style=padding-left:40px;padding-top:40px><tr valign=top><td rowspan=4><input type=hidden id='hidden $id'  value=$id  /><img width=50px height=50px src=$pic /></td><td>$full</td></tr><tr><td><div id=$id><img src=$compic width=300px height=400px /></td></tr><tr><td><div id=$id>You Liked and other $row2 Liked</div></td></tr><tr><td><input type=text id='text $id'  autocomplete=off placeholder=Write Something about it.... style=width:300px onkeydown='comment(event,this)' /></td></tr></table><table style=padding-left:95px;>";
				for($j=0;$j<$row3;$j++)
			{
				$cfname=mysql_result($result3,$j,"fname");
				$clname=mysql_result($result3,$j,"lname");
				$comment=mysql_result($result3,$j,"comment");
				echo "<tr><td>$cfname $clname<td><td>$comment</td></tr>";
			}
			echo "</table>";
		}
		else if($compic == "" && $word !="")
		{
			echo "<table style=padding-left:40px;padding-top:40px><tr valign=top><td rowspan=4><input type=hidden id='hidden $id'  value=$id  /><img width=50px height=50px src=$pic /></td><td>$full</td></tr><tr><td>$word</td></tr><tr><td><div id=$id>You Liked and other $row2 Liked</div></td></tr><tr><td><input type=text id='text $id'  autocomplete=off placeholder=Write Something about it.... style=width:300px onkeydown='comment(event,this)' /></td></tr></table><table style=padding-left:95px;>";
				for($j=0;$j<$row3;$j++)
			{
				$cfname=mysql_result($result3,$j,"fname");
				$clname=mysql_result($result3,$j,"lname");
				$comment=mysql_result($result3,$j,"comment");
				echo "<tr><td>$cfname $clname<td><td>$comment</td></tr>";
			}
			echo "</table>";
		}
		else if($compic != "" && $word != "")
		{
			echo "<table style=padding-left:40px;padding-top:40px><tr valign=top><td rowspan=5><input type=hidden id='hidden $id'  value=$id  /><img width=50px height=50px src=$pic /></td><td>$full</td></tr><tr><td>$word</td></tr><tr><td><img src=$compic width=300px height=400px /></td></tr><tr><td><div id=$id>You Liked and other $row2 Liked</div></td></tr><tr><td><input type=text id='text $id'  autocomplete=off placeholder='Write Something about it....' style=width:300px onkeydown='comment(event,this)' /></td></tr></table><table style=padding-left:95px;>";
				for($j=0;$j<$row3;$j++)
			{
				$cfname=mysql_result($result3,$j,"fname");
				$clname=mysql_result($result3,$j,"lname");
				$comment=mysql_result($result3,$j,"comment");
				echo "<tr style='95px;background-color:green'><td>$cfname $clname<td><td>$comment</td></tr>";
			}
			echo "</table>";
		}
		
	}
}
?>

</body>
</html>
