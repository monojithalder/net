<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
if(!isset($_SESSION['name']))
{
	
	echo "<script>window.location='index.php';</script>";
}
?>
<div id="container">
<input type="hidden" name="profileid" id="profileid" value="<?php echo $_SESSION['id']; ?>"  />
<input type="hidden" name="prouser" id="prouser" value="<?php echo $_SESSION['name']; ?>"  />
	<div id="top">
    	<div id="search">
        	
        		<input type="text" name="txtsearch" id="txtsearch" class="txts" autocomplete="off" onkeyup="searchdata(this.id)"    />
                <div id="autocomp"></div>
         
      </div>
        <div id="menu">
        	<ul>
            	<li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div id="main">
    	<div id="side">
        	<div id="pic">
            	<img src="bak.jpg" width="130px" height="150px" id="accountpic" name="accountpic"    />            </div>
            <div id="sidermenu">
            	<ul>
                	<li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Photo</a></li>
                    <li><a href="#">Message</a></li>
                </ul> 
            </div>
            <div id="online"></div>
    	</div>
      <div id="mid">
        <p>&nbsp;</p>
      </div>
        <div id="side2">
          <p>&nbsp;</p>
      </div>
    </div>
</div>
</body>
</html>
