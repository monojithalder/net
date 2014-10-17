// JavaScript Document
var count=0;
var old=6;
xmlhttp2 = new XMLHttpRequest();
xmlhttp3 = new XMLHttpRequest();
xmlhttp4 = new XMLHttpRequest();
xmlhttp5 = new XMLHttpRequest();
xmlhttp6 = new XMLHttpRequest();
xmlhttp7 = new XMLHttpRequest();
xmlhttp8 = new XMLHttpRequest();
xmlhttp9 = new XMLHttpRequest();
xmlhttp10 = new XMLHttpRequest();
xmlhttp11 = new XMLHttpRequest();
xmlhttp12 = new XMLHttpRequest();

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
function functioncall()
{
	showinfo();
	friendnoti();
	showonline();
	//alert('vhvhv');
	showchatwindow();
	online();
	wall();
}
function post()
{
	var obj=document.getElementById('com');
	var obj1=document.getElementById('post');
	var obj2=document.getElementById('profileid');
	//alert(obj2.value);
	var serverpage='post.php?s='+obj.value+'&uid='+obj2.value;
	xmlhttp3.open('GET',serverpage,true);
	xmlhttp3.onreadystatechange = function() {
			if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
				
					//obj1.innerHTML +=xmlhttp3.responseText;
					var a=obj1.innerHTML;
					obj1.innerHTML = xmlhttp3.responseText + a;
					//alert(obj1.innerHTML);
			}
		}
		xmlhttp3.send(null);	
}
function wall()
{
	//var obj=document.getElementById('com');
	//alert('come');
	
	//friendnoti();
	//showonline();
	//alert('vhvhv');
	//online();
	
	var obj1=document.getElementById('post');
	var obj2=document.getElementById('profileid');
	var obj3=document.getElementById('main');
	//alert(obj2.value);
	var serverpage='wall.php?uid='+obj2.value;
	xmlhttp4.open('GET',serverpage,true);
	xmlhttp4.onreadystatechange = function() {
			if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
				
					obj1.innerHTML =xmlhttp4.responseText;
					//obj1.style.height ="700px";
					//obj3.style.height ="950px";
					//expenddiv();
					count=0;
					//old=0;
			}
		}
		xmlhttp4.send(null);
		setTimeout("wall()",100000);
	
}
function repost()
{
	var temp =0;
	temp =count + 6;
	count = temp;
	var obj1=document.getElementById('post');
	var obj2=document.getElementById('profileid');
	//alert(obj2.value);
	var dy="<img  src=ajax-loader.gif id=ajaxloadimage />";
	obj1.innerHTML +=dy;
	var olddiv = document.getElementById('ajaxloadimage');
	//alert("old"+old+"count"+count);
	var serverpage='repost.php?uid='+obj2.value+'&count='+count+'&old='+old;
	xmlhttp5.open('GET',serverpage,true);
	xmlhttp5.onreadystatechange = function() {
			if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200) {
					//obj1.removeChild(olddiv);
				//alert(xmlhttp5.responseText);
				
					if(xmlhttp5.responseText !="")
					{
						
						obj1.removeChild(olddiv);
						var obj3=document.getElementById('post');
						var obj4=document.getElementById('main');
						var h=$("#post").height() + 700;
						var h1=$("#main").height() + 700;
						//obj3.style.height = h+"px";
						//obj4.style.height = h1+"px";
						alert(xmlhttp5.responseText);
						obj1.innerHTML +=xmlhttp5.responseText;
						obj1.removeChild(olddiv);
						//expenddiv();
						//alert(h);
						//alert(old);
					}
					else
					{
						//alert('dsfsd');
						obj1.removeChild(olddiv);
						obj1.removeChild(olddiv);
						//var temp =count - 5;
						//count = temp;
						//var temp1=old-count;
						//old=temp1;
						//alert(count);
					}
			}
		}
		xmlhttp5.send(null);
}
function expenddiv()
{
	var obj1=document.getElementById('post');
	var obj2=document.getElementById('main');
	if($("#post").height() > 700)
	{
		var diff=$("#post").height() - $("#main").height();
		//alert(diff);
		if(diff > 0)
		{
			//var re=diff+1000+"px";
		//alert(re);
			obj2.style.height = $("#main").height()+diff+300+"px";
			//alert($("#post").height());
			//alert($("#main").height());
			//alert(diff);
		}
		//obj2.style.height=diff+100+"px";
	}
}
function picup()
{
	var obj=document.getElementById('if');
	//var obj1=document.getElementById('up');
	//obj.innerHTML="<img src=ajax-loader.gif />";
	obj.style.visibility = 'visible';      
	document.forms["up"].submit();
	//alert("asdas");
}
function stopUpload(va)
{
	//alert("come");
	var obj=document.getElementById('if');
	if(va==1)
	{
		obj.innerHTML="File Uploaded";
		//var obj=document.getElementById('com');
		var obj1=document.getElementById('post');
		var obj2=document.getElementById('profileid');
	//alert(obj2.value);
		var serverpage='picpost.php?uid='+obj2.value;
		xmlhttp6.open('GET',serverpage,true);
		xmlhttp6.onreadystatechange = function() {
			if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200) {
				
					//obj1.innerHTML +=xmlhttp3.responseText;
					var b=obj1.innerHTML;
					obj1.innerHTML = xmlhttp6.responseText+ b;
					alert(xmlhttp6.responseText);
			}
		}
		xmlhttp6.send(null);
	}
	else
	{
		obj.innerHTML="Error";
	}
}
function like(li)
{
	//alert(po.parentNode.id);
	var obj2=document.getElementById('profileid');
	var chack1="like"+li.parentNode.id;
	var chack2="unlike"+li.parentNode.id;
	alert(li.parentNode.id);
	var c=li.id;
	var serverpage;
	var obj=document.getElementById(li.parentNode.id);
	//alert(chack1+li.id);
	if(c == chack1)
	{
		//alert('if');
		serverpage='like.php?id='+li.parentNode.id+'&uid='+obj2.value;
	}
	else if(c == chack2)
	{
		//alert('elseif');
		serverpage='unlike.php?id='+li.parentNode.id+'&uid='+obj2.value;
	}
	//alert('asd');
	xmlhttp7.open('GET',serverpage,true);
	xmlhttp7.onreadystatechange = function() {
		if (xmlhttp7.readyState == 4 && xmlhttp7.status == 200) {
			//alert(xmlhttp7.responseText);
			obj.innerHTML = "You Liked and other "+xmlhttp7.responseText+"liked"; 
		}
	}
	xmlhttp7.send(null);
	//alert(li.id);
}
function comment(e,th)
{
	e=(!e) ? window.event : e;
	code=(e.charcode) ? e.charcode :
	((e.keycode) ? e.keycode :
	((e.which) ? e.which : 0));
	if(code==13)
	{
		var obj2=document.getElementById('profileid');
		var r=th.id;
		var r1=r.replace('text','hidden');
		var id=document.getElementById(r1).value;
		serverpage='comment.php?id='+id+'&uid='+obj2.value+'&com='+th.value;
		xmlhttp8.open('GET',serverpage,true);
		xmlhttp8.onreadystatechange = function() {
			if (xmlhttp8.readyState == 4 && xmlhttp8.status == 200) {
			//alert(xmlhttp7.responseText);
				//obj.innerHTML = "You Liked and other "+xmlhttp7.responseText+"liked"; 
				alert(xmlhttp8.responseText);
				th.value="";
			}
		}
		xmlhttp8.send(null);
		//alert('enter');
	}
}
function request(id)
{
		var obj2=document.getElementById('profileid');
		serverpage='request.php?ruid='+id+'&uid='+obj2.value;
		xmlhttp9.open('GET',serverpage,true);
		xmlhttp9.onreadystatechange = function() {
			if (xmlhttp9.readyState == 4 && xmlhttp9.status == 200) {
			//alert(xmlhttp7.responseText);
				//obj.innerHTML = "You Liked and other "+xmlhttp7.responseText+"liked"; 
				alert(xmlhttp9.responseText);
				
			}
		}
		xmlhttp9.send(null);

}
function friendnoti()
{
		var obj2=document.getElementById('profileid');
		var obj3=document.getElementById('friendnoti');
		serverpage='friendnoti.php?&uid='+obj2.value;
		xmlhttp10.open('GET',serverpage,true);
		xmlhttp10.onreadystatechange = function() {
			if (xmlhttp10.readyState == 4 && xmlhttp10.status == 200) {
			//alert(xmlhttp7.responseText);
				//obj.innerHTML = "You Liked and other "+xmlhttp7.responseText+"liked"; 
				//alert(xmlhttp10.responseText);
				if(xmlhttp10.responseText > 0)
				{
					obj3.innerHTML = xmlhttp10.responseText;
				}
				
			}
		}
		xmlhttp10.send(null);
		setTimeout("friendnoti()",10000);
}
function light()
{
		//alert("aaa");
		var obj2=document.getElementById('profileid');
		var obj3=document.getElementById('main');
		//var bo=obj2.innerHTML;
		var obj4=document.getElementById('friendnoti');
		serverpage='pickfriendrequest.php?&uid='+obj2.value;
		xmlhttp11.open('GET',serverpage,true);
		xmlhttp11.onreadystatechange = function() {
			if (xmlhttp11.readyState == 4 && xmlhttp11.status == 200) {
			//alert(xmlhttp7.responseText);
				//obj.innerHTML = "You Liked and other "+xmlhttp7.responseText+"liked"; 
				//alert(xmlhttp11.responseText);
					//obj3.innerHTML = ;
						obj3.innerHTML +="<div id='light'><div class='header' style='vertical-align:bottom;'><label style='padding-left:170px;'>Friend Request</label><img src='close.png' width='15px' height='15px' style='padding-left:130px; cursor:pointer;' onclick='closerequestwindow()' /></div><div class='foter'>"+xmlhttp11.responseText+"</div></div>";
						obj4.innerHTML="";
				
			}
		}
		xmlhttp11.send(null);

	
	
	//alert(bo);
}
function acceptrequest(ro)
{
	//alert(ro.parentNode.childNodes[0].id);var obj=document.getElementById('main');
	var temp=ro.id;
	var temp2=temp.replace("acc","tr");
	var obj=document.getElementById(temp2);
	var obj2=document.getElementById('profileid');
	//var obj3=document.getElementById('friendnoti');
	temp3=temp.replace("acc","");
	serverpage='acceptrequest.php?&uid='+obj2.value+'&ruid='+temp3;
	xmlhttp12.open('GET',serverpage,true);
	xmlhttp12.onreadystatechange = function() {
		if (xmlhttp12.readyState == 4 && xmlhttp12.status == 200) {
			//alert(xmlhttp7.responseText);
				//obj.innerHTML = "You Liked and other "+xmlhttp7.responseText+"liked"; 
				//alert(xmlhttp10.responseText);	
				//obj.innerHTML=xmlhttp12.responseText;
				obj.innerHTML="Accepted";
			}
		}
		xmlhttp12.send(null);

	//obj.innerHTML="";
}

function closerequestwindow()
{
	var obj=document.getElementById('main');
	var olddiv=document.getElementById('light'); 
	obj.removeChild(olddiv);
	
	//alert("come");
}
