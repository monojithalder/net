// JavaScript Document
//xmlhttp13 = new XMLHttpRequest();
xmlhttp14= new XMLHttpRequest();
xmlhttp15= new XMLHttpRequest();
xmlhttp16= new XMLHttpRequest();
xmlhttp17= new XMLHttpRequest();
xmlhttp18= new XMLHttpRequest();
xmlhttp19= new XMLHttpRequest();
xmlhttp20= new XMLHttpRequest();
xmlhttp21= new XMLHttpRequest();

ml =new XMLHttpRequest();
function online()
{
		//alert('sttttttttada');
		var obj2=document.getElementById('profileid');
		var obj3=document.getElementById('chatshow');
		serverpage='online.php?&uid='+obj2.value;
		ml.open('GET',serverpage,true);
		ml.onreadystatechange = function() {
			if (ml.readyState == 4 && ml.status == 200) {
					obj3.innerHTML = ml.responseText;
				}
				
			//}
		}
		ml.send(null);
		setTimeout("online()",60000);
}
function showonline()
{
		//alert('asds');
		var obj2=document.getElementById('profileid');
		var obj3=document.getElementById('prouser');
		serverpage='showonline.php?&uid='+obj2.value+'&uname='+obj3.value;
		xmlhttp14.open('GET',serverpage,true);
		xmlhttp14.onreadystatechange = function() {
			if (xmlhttp14.readyState == 4 && xmlhttp14.status == 200) {
					//obj3.innerHTML = xmlhttp14.responseText;
					//alert(xmlhttp14.responseText);
				}
				
			//}
		}
		xmlhttp14.send(null);
		setTimeout("showonline()",6000);

}
function chatwindow(th)
{
	//alert('knkj');
	//alert(document.getElementById(th.id).title);
	var temp_id=th.id;
	var div_id=temp_id.replace('a','chatwin');
	var text_id=temp_id.replace('a','chattext');
	var show=temp_id.replace('a','show');
	if(!document.getElementById(div_id))
	{
		var obj2=document.getElementById('chatspace');
		var a="<div class='chatwindow' id="+div_id+"><div class='chatheader'><lable>"+th.title+"</lable></div><div class='chatmid' onload='onsh()' id="+show+"></div><div id='clear'></div><div class='chatfoter'><input type='text' id="+text_id+" onkeydown='ins(this,event)'  /></div></div>";
		obj2.innerHTML += a;
		//just();
	}
	sh();
	//alert('a,am');
	//just();
}
function just()
{
		//alert('just');
		//alert( $(window).height());
		var h= $(window).height() - 200;
		var h1=h+"px";
		var b=0+"px";
		for(var i=0;i<document.getElementsByClassName('chatwindow').length;i++)
		{
			//alert(i);
			//document.getElementsByClassName('chatwindow')[i].style.bottom = b;
			alert(document.getElementsByClassName('chatwindow')[i].id);
		}
		//alert('just');
}
function ins(th,e)
{
	
	var fuid=th.id.replace('chattext','');
	var show=th.id.replace('chattext','show');
	
	e=(!e) ? window.event : e;
	code=(e.charcode) ? e.charcode :
	((e.keycode) ? e.keycode :
	((e.which) ? e.which : 0));
	if(code==13)
	{
		
		var myvalue=document.getElementById(th.id).value;
		serverPage = "insert.php?me="+myvalue+"&fuid="+fuid;
	//alert(serverPage);
		var obj = document.getElementById(show);
		//var t=document.getElementById('te');
		xmlhttp15.open("GET", serverPage);
		xmlhttp15.onreadystatechange = function() {
			if (xmlhttp15.readyState == 4 && xmlhttp15.status == 200) {
			//alert(xmlhttp.responseText);
			//alert(show);
		    obj.innerHTML = obj.innerHTML +"<br />"+ xmlhttp15.responseText;
			document.getElementById(th.id).value="";
		//abc();
			}
		}
		xmlhttp15.send(null);
	}
}

function sh()
{
	//var myvalue=document.getElementById('it').value;
	
	for(var i=0;i<document.getElementsByClassName('chatwindow').length;i++)
	{
		//alert('yes');
		var id=document.getElementsByClassName('chatwindow')[i].id.replace('chatwin','');
		var show=document.getElementsByClassName('chatwindow')[i].id.replace('chatwin','show')
		var obj1 = document.getElementById('profileid');
		//alert(show);
		serverPage = "show.php?&fuid="+id+"&uid="+obj1.value;
		var obj = document.getElementById(show);
		xmlhttp16.open("POST", serverPage);
		xmlhttp16.onreadystatechange = function() {
			if (xmlhttp16.readyState == 4 && xmlhttp16.status == 200) {
				//obj1.innerHTML=xmlhttp.responseText;
				//alert(xmlhttp16.responseText);
				//alert(xmlhttp16.responseText);
				if(xmlhttp16.responseText != "none")
				{
					//alert(show);
					//obj.innerHTML ="hhhhhhhhhhhhhhh";
					//alert(xmlhttp16.responseText);
					obj.innerHTML = obj.innerHTML+"<br />"+ xmlhttp16.responseText;
				}

			}
		}
	}
xmlhttp16.send(null);
setTimeout("sh()",10000);
}

function showchatwindow()
{		
		
		
			
			var obj1 = document.getElementById('profileid');
			serverPage = "showchatwin.php?&uid="+obj1.value;
			var obj = document.getElementById('chatspace');
			xmlhttp17.open("POST", serverPage);
			xmlhttp17.onreadystatechange = function() {
				if (xmlhttp17.readyState == 4 && xmlhttp17.status == 200) {
					
					var con=eval("(" + xmlhttp17.responseText + ")");
					if(con)
					{
						var text_id="chattext"+con.fuid;
						var div_id="chatwin"+con.fuid;
						var show="show"+con.fuid;
						if(!document.getElementById(div_id))
						{
							//salert(div_id);
							var name=con.name+":";
					var a="<div class='chatwindow' id="+div_id+"><div class='chatheader'><lable>"+con.name+"</lable></div><div class='chatmid' onload='onsh()' id="+show+">"+name+con.message+"</div><div id='clear'></div><div class='chatfoter'><input type='text' id="+text_id+" onkeydown='ins(this,event)'  /></div></div>";
						obj.innerHTML += a;
						updateview(con.id);
						}
						else
						{
							//alert('ajsnba');
							sh();
						}
					}
				}
			}
		
xmlhttp17.send(null);
setTimeout("showchatwindow()",1000);
}
function updateview(chatid)
{
		//var obj2=document.getElementById('profileid');
		//var obj3=document.getElementById('prouser');
		serverpage='updateview.php?&chatid='+chatid;
		xmlhttp18.open('GET',serverpage,true);
		xmlhttp18.onreadystatechange = function() {
			if (xmlhttp18.readyState == 4 && xmlhttp18.status == 200) {
					
				}
				
			//}
		}
		xmlhttp18.send(null);
}

function showinfo()
{
		var uid = document.getElementById('profileid');
		var obj = document.getElementById('liveon');
		var obj2 = document.getElementById('study');
		var obj3 = document.getElementById('birth');
		var obj4 = document.getElementById('address');
		serverpage='showinfo.php?&uid='+uid.value;
		xmlhttp19.open('GET',serverpage,true);
		xmlhttp19.onreadystatechange = function() {
			if (xmlhttp19.readyState == 4 && xmlhttp19.status == 200) {
					var con=eval("(" + xmlhttp19.responseText + ")");
					if(con)
					{
						
						obj.innerHTML=con.liveon;
						obj2.innerHTML=con.study;
						obj4.innerHTML=con.add;
						obj3.innerHTML=con.born;
						
					}
				}
		}
		xmlhttp19.send(null);
	
}
function showeditwindow()
{
		var obj2=document.getElementById('profileid');
		var obj3=document.getElementById('main');
		//var bo=obj2.innerHTML;
		
		serverpage='showinfo.php?&uid='+obj2.value;
		xmlhttp20.open('GET',serverpage,true);
		xmlhttp20.onreadystatechange = function() {
			if (xmlhttp20.readyState == 4 && xmlhttp20.status == 200) {
				var con=eval("(" + xmlhttp19.responseText + ")");
					if(con)
					{
						var live=con.liveon;
						var study=con.study;
						var add=con.add;
						var born=con.born;
					}
					var tab="<table><tr><td>Live On</td><td><input type='text' id='txtliveon' value='"+live+"' /></td></tr><tr><td>Studies At</td><td><input type='text' id='txtstudyat' value='"+study+"' /></td></tr><tr><td>Date Of Birth</td><td><input type='text' id='txtbirth' value='"+born+"' /></td></tr><tr><td>Address</td><td><input type='text' id='txtaddress' value='"+add+"' /></td></tr><tr><td><input type='button' value='Update Information' onclick='updateinformation()'  /></td></tr></table>";
						obj3.innerHTML +="<div id='infowindow'><div class='header' style='vertical-align:bottom;'><label style='padding-left:170px;'>Edit Informatiom</label><img src='close.png' width='15px' height='15px' style='padding-left:120px; cursor:pointer;' onclick='closeinformationwindow()' /></div><div class='foter'>"+tab+"</div></div>";
				
			}
		}
		xmlhttp20.send(null);
}
function updateinformation()
{
		var obj2=document.getElementById('profileid');
		var live=document.getElementById('txtliveon').value;
		var stydy=document.getElementById('txtstudyat').value;
		var born=document.getElementById('txtbirth').value;
		var address=document.getElementById('txtaddress').value;
		serverpage='updateinformation.php?&uid='+obj2.value+"&live="+live+"&study="+stydy+"&born="+born+"&add="+address;
		xmlhttp21.open('GET',serverpage,true);
		xmlhttp21.onreadystatechange = function() {
			if (xmlhttp21.readyState == 4 && xmlhttp21.status == 200) {
				
				if(xmlhttp21.responseText == "update")
				{
					alert('Information Updated');
					showinfo();
				}
				else
				{
					//alert();
					alert('Error Occour');
				}
			}
		}
		xmlhttp21.send(null);
}
function closeinformationwindow()
{
	var obj=document.getElementById('main');
	var olddiv=document.getElementById('infowindow'); 
	obj.removeChild(olddiv);
}

function dislike(disli)
{
	
}
