<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONNECTIVITY</title>
<style type="text/css">

</style>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="java.js"></script>
<script type="text/javascript" src="java2.js"></script>
<link href="stylecon.css" rel="stylesheet" />
<script type="text/javascript">
//var count=7;

$(document).ready(function(){
	$('.tab:gt(0)').hide();
	$('#share  li').click(show);
	//alert($(document).height());
		$(window).scroll(function () {
		//just();
			if($(window).scrollTop() + $(window).height() > $(document).height() - 300)
			{
			
		//alert("yes");
					
		//alert($(document).height());
		//alert(h);
				//old=count;
				//alert(count);
				
				repost();
				//expenddiv();
		//$(document).height=1000;
		
		}
	});

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

</script>
</head>

<body onload="functioncall()">
<?php 
	//session_start();
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
    <div style="float:left"><img src="request.png" style="margin-top:13px; position:absolute; z-index:1; cursor:pointer;" width="30px" height="20px" onclick="light()"  /><label style="z-index:2; position:relative; left:20px; font-size:25px; top:2px; color:red" id="friendnoti"><b></b></label></div>
    <input type="text" name="txtser" onkeyup="searchdata(this.id)" id="txtsearch" autocomplete="off" style="width:300px; height:20px; float:left; margin-top:13px; margin-left:60px; -webkit-border-radius:20px; -moz-border-radius:20px; " placeholder="Search for Peoples,Pages,Things"   />
		<iframe src="http://free.timeanddate.com/clock/i3b8x374/n54/fn7/fs20/fcfff/tct/pct/ftb/th2" frameborder="0" width="134" height="31" allowTransparency="true" style="margin-left:200px; margin-top:5px;"></iframe> 
        <div id="autocomp" align="right"></div>
	</div> 
	
    <div id="clear"></div>
    <div id="sider">
    	<div id="info">
		<div style="border-color:#CFCECE; border-bottom-style:solid; border-bottom-width:thin; height:60px;">
    		<div style="float:left; width:60px;">
        		<img width="40px" height="40px" style="margin:10px 10px 10px 10px" src="all.gif"  />
        	</div>
        	<div style="float:left; width:180px; margin:0px 0px 0px 0px; vertical-align:top">
            <?php 
				$uid=$_SESSION['id'];
				$con=mysql_connect("localhost","root","123");
					if(!$con)
					{
						die("Error".mysql_error());
					}
					mysql_select_db("net",$con);
					$query="select * from info where uid='$uid'";
					$result=mysql_query($query);
					$fname=mysql_result($result,0,'fname');
					$lname=mysql_result($result,0,'lname');
					$liveon=mysql_result($result,0,'liveon');
					$studiesat=mysql_result($result,0,'studiesat');
					$born=mysql_result($result,0,'born');
					$address=mysql_result($result,0,'address');
			?>
        		<h4><label><?php echo strtoupper($fname); ?></label> <label><?php echo strtoupper($lname); ?></label></h4>
        	</div>
            
    	</div>
    	<div id="clear"></div>
    	<div  id="navi" style="border-bottom-color:#CFCECE; border-bottom-style:solid; border-bottom-width:thin; height:60px;">
    		<ul>
        		<li><a href="#">HOME</a></li>
            	<li><a href="pro.php?uid=<?php echo $_SESSION['id'];?>">PROFILE</a></li>
            	<li><a href="logout.php">ACCOUNT</a></li>
        	</ul>
    	</div>
    	<div id="clear"></div>
		<div style="margin-top:3px; padding-left:10px;">
    		<div class="dis"><label>Live on  :</label> <label id="liveon"></label></div>
        	<div class="dis"><label>Studies At :</label> <label id="study"></label></div>
        	<div class="dis"><label>Date Of Birth :</label> <label id="birth"> </label></div>
        	<div class="dis"><label>Address :</label> <label id="address"></label></div>
            <div><a style="color:#959493; margin-left:250px;" href="#" onclick="showeditwindow()">Edit</a></div>
    	</div>
		</div>
		<div id="chatbox">
			<div style="background-color:#252525; height:40px; -webkit-border-top-left-radius:10px; -webkit-border-top-right-radius:10px;">
            	<label style=" height:20px;color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-size:20px; margin-left:75px; margin-top:20px; ">Talk With Friends</label>
            </div>
            <div id="clear"></div>
            <div  id="chatshow" style="height:320px; overflow:auto;"></div>
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
                    <li><a href="#">Share Video/Song</a></li>
                </ul>

            </div>
            <div id="clear"></div>
            <div style="margin-left:20px; height:50px;  margin-right:20px;">
            	<div class="tab">
               <!-- 	<input type="text" name="txtstatus" style="margin-top:10px; -webkit-border-radius:5px; width:603px; height:30px;" autocomplete="off"  /> !-->
               		<textarea id="com" rows="10"  style="height:30px;margin-top:10px; -webkit-border-radius:5px; width:603px;"></textarea>
            	    <input class="s" type="button" value="Share" onclick="post()" style="height:30px; margin-left:555px; width:50px; -webkit-border-radius:2px; margin-top:5px; font-family:'Times New Roman', Times, serif;font-size:16px;" />
            	</div>
                <div class="tab">
                	<div>
                    <form method="post" id="up" name="file" enctype="multipart/form-data" action="uploadpic.php" target="ifa">
                   	<input type="hidden" name="u" id="u" value="<?php echo $_SESSION['id']; ?>"  />
                        <table>
                        	<tr>
                            	<td><textarea id="piccom" name="piccom" rows="10"  style="height:30px;margin-top:10px; -webkit-border-radius:5px; width:603px;"></textarea></td>
                            </tr>
                            <tr>
                            	<td><input type="file" name="pic" id="f" /><input type="button" value="Upload" onclick="picup()"  /></td>
                                <td></td>
                            </tr>
                            <tr>
                            	<td><iframe name="ifa" style="height:40px; width:300px;border:0px solid #fff;"></iframe></td>
                            </tr>
                        </table>
                    </form>
                   <p id="if" style="visibility:hidden"><img src="ajax-loader.gif"  /></p>
                        
                    </div>
                </div>
                <div class="tab">
                </div>
            </div>
        </div>
        <div id="clear"></div>
        <div id="post">
        </div>
    </div>
    <div id="chatspace"></div>
    <div id="clear"></div>
</div>
</body>
</html>
