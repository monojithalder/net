<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css"  />
<script type="text/javascript">
xmlhttp = new XMLHttpRequest();
xmlhttp1 = new XMLHttpRequest();
xmlhttp2 = new XMLHttpRequest();
function showpic()
{
	var obj=document.getElementById('profileid');
	var obj1=document.getElementById('prouser');
	//alert(obj.value);
	var obj2=document.getElementById('accountpic');
	var serverpage='showaccountpic.php?uid='+ obj.value + '&uname=' + obj1.value;
	xmlhttp.open('GET',serverpage,true);
	xmlhttp.onreadystatechange = function() {
	//alert('sad');
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//alert(xmlhttp.responseText);
			var ab = eval(" (" + xmlhttp.responseText + ") ");
			//alert("ASDAS");
			if(ab)
			{
				if(ab.pic=="none")
				{
					obj2.src='all.gif';
				}
				else
				{
					obj2.src=ab.pic;
				}
			
			}	
				
			
			//alert(xmlhttp.responseText);
				//obj.innerHTML +=html;
			
			}
		}
		xmlhttp.send(null);
		online();
}
function online()
{
	 var obj=document.getElementById('online');
	 var obj1=document.getElementById('profileid');
	 var obj2=document.getElementById('prouser');
	 var servarpage='online.php?uid='+ obj1.value + '&uname='+ obj2.value;
	 xmlhttp1.open('GET',servarpage,true);
	 
	 xmlhttp1.onreadystatechange = function() {
			if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
			
				obj.innerHTML += xmlhttp1.responseText;
				//alert('asdsa');
			}
		}
	 	xmlhttp1.send(null);
}
function searchdata(id)
{
	var obj=document.getElementById(id);
	var obj1=document.getElementById('autocomp');
	var serverpage='search.php?s='+obj.value;
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				
				//alert(obj.value);
				if(xmlhttp2.responseText != "none")
				{
					obj1.style.visibility='visible';
					obj1.innerHTML=xmlhttp2.responseText;
				}
				else
				{
					obj1.innerHTML="";
					obj1.style.visibility='hidden';
				}
			}
		}
		xmlhttp2.send(null);
}
function ch1(id)
{
	//alert('aaa');
	//var obj=document.getElementById(id);
	var obj=document.getElementById(id);
	//alert(id);
	obj.style.background='#009999';
}
function ch2(id)
{
	//alert('jbjbj');
}
function abc()
{
	//alert('jgjugj');
}
</script>
</head>

<body onload="showpic()">
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
        <div id="pic"> <img src="bak.jpg" width="130px" height="150px" id="accountpic" name="accountpic"    /> </div>
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
