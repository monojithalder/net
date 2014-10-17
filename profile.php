<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="java.js" ></script>
<script type="text/javascript" src="java2.js"></script>
<script type="text/javascript" src="js.js"></script>
<link href="stylecon.css" rel="stylesheet"  />
<style type="text/css">

</style>
</head>

<body>
<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		echo "<script>window.location='index.php';</script>";
	}
?>
<div id="main">
	<div id="nav"></div>
    <div id="cover">
	  <div >
        	<img src="294546_457967234224843_1003768370_n.jpg" id="coverimage" />
            <div id="coverrequest"><input type="button" value="Sent Request"  /></div>
      </div>
        <div><img src="all.gif" id="coverprofilepic" /></div>    
    </div>
    <div id="sider">
    	<div id="info">
        	<div id="navi">
            	<ul>
        			<li><a href="#">HOME</a></li>
            		<li><a href="#">PROFILE</a></li>
            		<li><a href="#">ACCOUNT</a></li>
        		</ul>
            </div>
            <div style="margin-top:10px; padding-left:15px;">
    			<div  style="border:1px solid blue;float:left; width:70px;"><img src="To-the-Friend-unknown.png" width="70px" height="70px"  /></div>
        		<div style="border:1px solid blue;float:left; width:70px; margin-left:15px;"><img src="message.png" width="70px" height="70px"  /></div>
        		<div style="border:1px solid blue;float:left; width:70px; margin-left:15px;"><img src="photo.png" width="70px" height="70px"  /> </div>
        		<div></div>
            	<div><a style="color:#959493; margin-left:250px;" href="#">Edit</a></div>
    		</div>
        </div>
         <div id="chatbox">
        	<div id="chatboxheader"><label id="chatboxheaderlable">Talk With Friend</label></div>
            <div id="chatshow"></div>
            <div id="chatboxbuttom"><input type="text" autocomplete="off" name="txtserch" placeholder="Search Friend" /></div>
        </div>
    </div>
    <div id="midile">
    </div>
    
</div>
</body>
</html>
