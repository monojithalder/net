<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONNECTIVITY</title>
<style type="text/css">

#container
{
	width:1366px;
	height:auto;
	
}
#main
{
	width:1024px;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	background: rgba(255, 255, 255, 0.3);
}
#nav
{
	width:1024px;
	height:50px;
	background-color:#252525;
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
body
{
	padding:0px 0px 0px 0px;
	margin:0px;
	background-color:#66CBE8;
}
#clear
{
	clear:both;
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
#chatbox
{
	width:300px;
	height:400px;
	background-color:#F9F9F9;
	margin-left:20px;
	margin-top:20px;
	-webkit-border-radius:10px;
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
	/*margin-top:20px;*/
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	/*margin-bottom:10px;*/
	
}
#autocomp
{
	z-index:1;
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
#chatwindow
{
	position:fixed;
	width:80px;
	height:50px;
	border:1px solid black;
	background-color:#CCCCCC;
	z-index:2;
	top:200px;
}
textarea
{
	resize:none;
}
</style>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="java.js"></script>
<script type="text/javascript">
//var count=7;

$(document).ready(function(){
	$('.tab:gt(0)').hide();
	$('#share  li').click(show);
	//alert($(document).height());
		$(window).scroll(function () {
			if($(window).scrollTop() + $(window).height() > $(document).height() - 300)
			{
		//alert("yes");
					
		//alert($(document).height());
		//alert(h);
				//old=count;
				//alert(count);
				//var temp =count + 5;
				//count = temp;
				//repost();
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
function containsTooMuch(el) {
    el.scrollLeft = 0;
    el.scrollTop = 0;
    var hOrg = el.scrollLeft++;
    var vOrg = el.scrollTop++;
    if(el.scrollLeft-- > hOrg || el.scrollTop-- > vOrg)
        return true;
    return false;
}
function test(){
    var el = document.body.getElementsByTagName('over')[0];
    if(containsTooMuch(el)){
        //el.innerHTML = el.innerHTML.substring(0, el.innerHTML.length - 2);
        	alert("aDas");
		setTimeout(test, 5);
    }
}

function pic()
{
	var obj1=document.getElementById('over');
	obj1.innerHTML="<img src=366-13656-image-4dc7e997ab8da-bipashabasu.jpg />";
}
</script>
</head>

<body onload="test()">
<div id="over" style="height:100px; width:200px; border:1px solid black;overflow: scroll;">
<img src="366-13656-image-4dc7e997ab8da-bipashabasu.jpg"  />
</div>
<input type="button" value="add" onclick="pic()"  />
</body>
</html>
