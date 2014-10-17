<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONNECTIVITY</title>
<script type="text/javascript"></script>
<style type="text/css">
body
{
	padding:0px 0px 0px 0px;
	margin:0px;
	background-color:#66CBE8;
}
#main
{
	width:1024px;
	height:1200px;
	margin:auto;
	background: rgba(255, 255, 255, 0.3);
}
#nav
{
	width:1024px;
	height:50px;
	background-color:#252525;
}
#clear
{
	clear:both;
}
#autocomp
{
	z-index:2;
	width:300px;
	height:auto;
	/*background-color:#FFFFFF;*/
	background: none repeat scroll 0 0 #F5F5F5;
	border:thin solid #000000;
	position:relative;
	visibility:hidden;
	top:5px;
	margin-left:355px;
	overflow:visible;
	text-align:left;
	border-radius:10px;
	border-top-style:none;
}
#cover
{
	height:200px;
	padding-top:5px;
}
#sider
{
	width:350px;
	float:left;	
}
#midile
{
	width:650px;
	float:left;
	height:auto;
}
#chatbox
{
	width:300px;
	height:400px;
	background-color:#F9F9F9;
	margin-left:20px;
	margin-top:20px;
	-webkit-border-radius:10px;
}
#info
{
	width:300px;
	height:230px;
	background-color:#F9F9F9;
	margin-left:20px;
	margin-top:20px;
	
	-webkit-border-radius:10px;
}
#navi ul
{
	width:300px;
	height:50px;
	padding: 0;
	margin: 0;
}
#navi ul li
{
	display:inline;
	list-style-type:none;
	text-decoration:none;
	
}
#navi ul li a
{
	text-decoration:none;
	float:left;
	text-align:center;
	border-color:#CFCECE;
	border-left-width:thin;
	border-left-style:solid;
	line-height:50px;
	font-size:16px;
	padding-right:10px;
	line-height:60px;
	color:#999999;
}
.dis
{
	font-family:"Times New Roman", Times, serif;
	color:#959493;
	
}
#share
{
	height:130px;
	background-color:#F9F9F9;
	margin-top:20px;
	-webkit-border-radius:10px;
}
#share ul
{
	padding:0;
	margin:0;
	
}
#share ul li
{
	display:inline;
	list-style-type:none;
	
}
#share ul li a
{
	float:left;
	font-family:"Times New Roman", Times, serif;
	color:#959493;
	padding-left:10px;
	padding-top:10px;
	text-decoration:none;
	font-size:20px;
	
	
}
.s
{
	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1) inset;
    background-color: #019AD2;
    background-image: -moz-linear-gradient(#33BCEF, #019AD2);
    background-repeat: repeat-x;
    border-color: #057ED0;
    color: #FFFFFF;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
#post
{
	height:auto;
	background-color:#F9F9F9;
	margin-top:20px;
	-webkit-border-radius:10px;
}
textarea
{
	resize:none;
}
</style>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="java.js"></script>
<script type="text/javascript" src="java2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.tab:gt(0)').hide();
	$('#share  li').click(show);
});
function show()
{
	var alli=$('#share  li');
	//alert(alli);
	//alert(a.index(this));
	//$(this).addClass('active');
	var index=alli.index(this);
	//alert(index);
	$('.tab:visible').hide();
	$('.tab:eq('+index+')').show();
}
xmlhttp2 = new XMLHttpRequest();

</script>
</head>

<body onload="functioncall()">
<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		echo "<script>window.location='index.php';</script>";
	}
?>
<div id="main">
<input type="hidden" name="profileid" id="profileid" value="<?php echo $_SESSION['id']; ?>"  />
<input type="hidden" name="prouser" id="prouser" value="<?php echo $_SESSION['name']; ?>"  />
	<div id="nav">
    	  <img src="connectivity.png" style="float:left"  />
    <input type="text" name="txtser" onkeyup="searchdata(this.id)" id="txtsearch" autocomplete="off" style="width:300px; height:20px; float:left; margin-top:13px; margin-left:95px; -webkit-border-radius:20px; -moz-border-radius:20px; " placeholder="Search for Peoples,Pages,Things"   />
		<iframe src="http://free.timeanddate.com/clock/i3b8x374/n54/fn7/fs20/fcfff/tct/pct/ftb/th2" frameborder="0" width="134" height="31" allowTransparency="true" style="margin-left:225px; margin-top:5px;"></iframe> 
        <div id="autocomp" align="right"></div>
    </div>
    <div id="clear"></div>
    <div id="cover">
        <div>
      		<img src="294546_457967234224843_1003768370_n.jpg" height="200px" width="1024px" style="position:absolute; z-index:1;" />
            <div id="request" style="position:relative; top:0px; left:900px; height:30px; width:50px;z-index:2;">
            	<?php
					$ruid=$_GET['uid'];
					$uid=$_SESSION['id'];
					$con=mysql_connect("localhost","root","123");
					if(!$con)
					{
						die("error".mysql_error());
					}
					mysql_select_db("net",$con);
					$query="select * from friend where fuid='$ruid' and uid='$uid'";
					$query2="select * from request where uid='$ruid' and uid='$uid'";
					$result=mysql_query($query);
					$result2=mysql_query($query2);
					$result3=mysql_query("select * from friend where fuid='$uid' and uid='$ruid'");
					$result4=mysql_query("select * from request where uid='$uid' and uid='$ruid'");
					$row=mysql_num_rows($result);
					$row2=mysql_num_rows($result2);
					$row3=mysql_num_rows($result3);
					$row4=mysql_num_rows($result4);
					if($_SESSION['id'] == $ruid)
					{
						echo "mmmm";
					}
					else if($row > 0)
					{
						echo "aaaa";
					}
					else if($row2 >0)
					{
						echo "bbbbb";
					}
					else if($row3 >0)
					{
						echo "bb333bbb";
					}
					else if($row4 >0)
					{
						echo "bb444bbb";
					}
					else
					{
						echo "<input type='button' value='Sent Request' onclick='request(this.id)' id='$ruid' />";
					}
				?>
            </div>
            <img src="all.gif" width="100px" height="100px" style="position:relative; z-index:3; top:70px; left:30px;"   />
            <div id="change" Style=" width:100px; height:30px; position:relative; z-index:4; top:0px; left:30px;" >change pic</div>
        </div>
    </div>
    <div id="sider">
    	<div id="info">
    		<div id="clear"></div>
    		<div  id="navi" style="border-bottom-color:#CFCECE; border-bottom-style:solid; border-bottom-width:thin; height:60px;">
    			<ul>
        			<li><a href="#">HOME</a></li>
            		<li><a href="#">PROFILE</a></li>
            		<li><a href="#">ACCOUNT</a></li>
        		</ul>
    		</div>
    		<div id="clear"></div>
			<div style="margin-top:10px; padding-left:15px;">
    			<div  style="border:1px solid blue;float:left; width:70px;"><img src="To-the-Friend-unknown.png" width="70px" height="70px"  /></div>
        		<div style="border:1px solid blue;float:left; width:70px; margin-left:15px;"><img src="message.png" width="70px" height="70px"  /></div>
        		<div style="border:1px solid blue;float:left; width:70px; margin-left:15px;"><img src="photo.png" width="70px" height="70px"  /> </div>
        		<div></div>
            	<div><a style="color:#959493; margin-left:250px;" href="#">Edit</a></div>
    	</div>
		</div>
		<div id="chatbox">
			<div style="background-color:#252525; height:40px; -webkit-border-top-left-radius:10px; -webkit-border-top-right-radius:10px;">
            	<label style=" height:20px;color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-size:20px; margin-left:75px; margin-top:20px; ">Talk With Friend</label>
            </div>
            <div id="clear"></div>
            <div id="chatshow" style="height:320px; overflow:auto;"></div>
            <div style=" height:40px; background-color:#252525; -webkit-border-bottom-left-radius:10px; -webkit-border-bottom-right-radius:10px; -moz-border-radius:10px;">
            	<input type="text" autocomplete="off" name="txtserch" placeholder="Search Friend" style="-webkit-border-radius:5px; width:295px; height:20px; margin-top:7px;  "  />	
            </div>
		</div>
    </div>
    <div id="midile">
    	<div id="share">
        	<div style="margin-left:20px; height:35px; padding-left:150px; margin-right:20px; border-bottom-style:solid; border-bottom-width:thin; border-bottom-color:#959493">
            	<ul>
                	<li><a href="#">Update Status</a></li>
                    <li ><a href="#">Share Photo</a></li>
                    <li><a href="#">Ask Qustion</a></li>
                </ul>

            </div>
            <div id="clear"></div>
            <div style="margin-left:20px; height:50px;  margin-right:20px;">
            	<div class="tab">
               <!-- 	<input type="text" name="txtstatus" style="margin-top:10px; -webkit-border-radius:5px; width:603px; height:30px;" autocomplete="off"  /> !-->
               		<textarea  style="height:30px;margin-top:10px; -webkit-border-radius:5px; width:603px;"></textarea>
                   	<input class="s" type="button" value="Share" style="height:30px; margin-left:555px; width:50px; -webkit-border-radius:2px; margin-top:5px; font-family:'Times New Roman', Times, serif;font-size:16px;" />
                </div>
                <div class="tab">
                	<input type="file" value="Share"   />
                </div>
                <div class="tab">
                	<label>Ask Question </label>
                </div>
            </div>
        </div>
        <div id="clear"></div>
        <div id="post"></div>
    </div>
 </div>
</body>
</html>
