<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connectivity</title>
<link rel="stylesheet" href="style.css"  />
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript">
/*$(document).ready(function(){
  $(user).change(function(){
  	//alert('sadasdasdas');
     var data = 'page=' + $(user).val();
    $.ajax({
        url: "username.php",  
        type: "GET",        
        data: data,     
        cache: false,
        success: function (html) {  
            $(er).html(html);
        }       
    });
  });
});*/
xmlhttp = new XMLHttpRequest();
function user1(id)
{
	//alert(id);
	var obj=document.getElementById(id);
	var obj1=document.getElementById('er');
	//alert(obj.value);
	var serverpage='username.php?page='+document.getElementById(id).value;
	var html="";
	
	//alert('sad');
	xmlhttp.open('GET',serverpage,true);
	//alert('sad');
	xmlhttp.onreadystatechange = function() {
	//alert('sad');
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var ab = eval(" (" + xmlhttp.responseText + ") ");
			if(ab)
			{
				if(ab.us=="username not available")
				{
					obj1.style.color="#FF0000";
					html +=ab.us;
					obj1.innerHTML=html;
				}
				else if(ab.us=="username is available")
				{
					obj1.style.color="#00CC00";
					html +=ab.us;
					obj1.innerHTML=html;
				}
				else
				{
				}
			
			}	
				
			
			//alert(xmlhttp.responseText);
				//obj.innerHTML +=html;
			
			}
		}
		xmlhttp.send(null);
}
function validate()
{
	var email=document.forms["sign"]["emaill"].value;
	//alert(email);
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	 if(document.forms["sign"]["fname"].value=="")
	 {
	 	alert('Please enter your first name');
	 }
	 else if(document.forms["sign"]["lname"].value=="")
	 {
	 	alert('Please enter your last name');
	 }
	 else if(document.forms["sign"]["user"].value=="")
	 {
	 	alert('Please enter your username');
	 }
	 else if(document.forms["sign"]["pass"].value=="")
	 {
	 	alert('Please enter your password');
	 }
	 else if(document.forms["sign"]["pass"].value.length < 6)
	 {
	 	alert('Please enter password grater than 6');
	 }
	 else if(document.forms["sign"]["emaill"].value=="")
	 {
	 	alert('please enter your email address');
	 }
	 else if(reg.test(email) == false) {
 
      alert('Please enter correct email address');
	  }
	  else if(document.forms["sign"]["phone"].value=="")
	  {
	  	alert('please enter your phone number');
	  }
	  else
	  {
	     var data = 'fname=' + $(fname).val()+ '&lname=' + $(lname).val() + '&user=' + $(user).val() + '&pass=' + $(pass).val() + '&emaill=' + email + '&address=' +$(address).val() + '&sex=' + $(sex).val() + '&phone=' +$(phone).val();
		// alert($(emaill).val());
		// alert("aaa");
   		 $.ajax({
        url: "vari.php",  
        type: "GET",        
        data: data,     
        cache: false,
        success: function (html) {  
           //$(s).html(html);
		//var u=eval(" (" + html + ") ");  
		//var a=u.d;
		alert(html);
		if(html=="inserted")
		{
			alert(html);
			window.location='index.php';
		}
		else
		{
			alert(html);
		}
		   
		   //alert($.html(html));
        }       
    });
	  }
}

</script>
<style>
	label.error { width: 250px; display: inline; color: red; color:#00CC00}
	</style>
</head>

<body>
<?php
	session_start();
	if(isset($_SESSION['name']))
	{
		echo "<script>window.location='myaccount.php';</script>";
	}
?>
<div id="container">
	<div id="top">
    	<div id="menu">
        <form name="login" method="post" action="" id="login">
       		<table>
            	<tr>
                	<td style="padding-left:5px;"><label for="username" class="baklable">Username</label></td>
                
                
                	<td style="padding-left:5px;"><input type="text" name="txtuser" id="txtuser" class="baltext"  /></td>
                
                	<td style="padding-left:5px;"><label for="passsword" class="baklable">Password</label></td>
               
                	<td style="padding-left:5px;"><input type="password" name="txtpass" id="txtpass"  class="baltext" /></td>
                
                	<td style="padding-left:5px;"> <b><input type="submit" value="Log in" id="sub" name="sub" class="bak"  /></b></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
    <div id="midile">
    	<div id="m1">
        	<img src="social-networking.jpg" width="380" height="254"  />
        </div>
        <div id="m2">
        <b>
        <form name="sign in" method="post" id="sign">
        	<table style="padding-left:500px; padding-top:100px;">
            	<tr>
                	<td><label>First Name</label></td>
                    <td><input type="text" name="txtfname" class="text" id="fname" /></td>
                </tr>
                <tr>
                	<td><label>Last Name</label></td>
                    <td><input type="text" name="txtlname" class="text" id="lname"  /></td>
                </tr>
                <tr>
                	<td><label>Username</label></td>
                    <td><input type="text" name="txtusername" id="user"  class="text" onkeyup="user1(this.id)"  /></td>
                </tr>
                <tr>
                	<td></td>
                   	<td>
                    <div id="er"></div>
                    </td>
                    
                </tr>
                <tr>
                	<td><label>Password</label></td>
                    <td><input type="password" name="txtpassword" class="text" id="pass"  /></td>
                </tr>
                <tr>
                	<td><label>Email</label></td>
                    <td><input type="text" name="txtemail" class="text" id="emaill"  /></td>
                </tr>
                <tr>
                	<td><label>Address</label></td>
                    <td><input type="text" name="txtaddress" class="text" id="address" /></td>
                </tr>
                <tr>
                	<td><label>Sex</label></td>
                    <td><select name="sex" id="sex">
                    	<option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    </td>
                </tr>
                <tr>
                	<td><label>Phone Number</label></td>
                    <td><input type="text" name="txtphone" class="text" id="phone"  /></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="button" name="but" id="but" value="Sign Up" onclick="validate()"  /></td>
                </tr>
                <tr>
                	<td></td>
                    <td><div id="s"></div></td>
                </tr>
            </table>
            </form>
         </b>
        </div>
    </div>
    <div id="last">
    	<div id="error">
        <?php
			if(isset($_POST['sub']))
			{
				$username=$_POST['txtuser'];
				$password=$_POST['txtpass'];
				if($password=="")
				{
					echo "<script>alert('Please enter username');</script>";
				}
				else if($password=="")
				{
					echo "<script>alert('Please enter password');</script>";
				}
				else
				{
					$con=mysql_connect("localhost","root","123");
					if(!$con)
					{
						die("Error".mysql_error());
					}
					mysql_select_db("net",$con);
					$query="select * from info";
					$result=mysql_query($query);
					$row=mysql_num_rows($result);
					for($i=0;$i<$row;$i++)
					{
						$f1=mysql_result($result,$i,"uid");
						$f2=mysql_result($result,$i,"username");
						$f3=mysql_result($result,$i,"password");
						$f4=mysql_result($result,$i,"fname");
						$f5=mysql_result($result,$i,"lname");
						if($username==$f2)
						{
							if($password==$f3)
							{
								$_SESSION['name']=$f2;
								$_SESSION['id']=$f1;
								$_SESSION['fname']=$f4;
								$_SESSION['lanme']=$f5;
								echo "<script>window.location='myaccount.php';</script>";
							}
							//else
							//{
								//echo "<script>alert('wrong password')";
							//}
							
						}
						//else
						//{
							//echo "<script>alert('wrong username');";
						//}
					}
				}
			}
		?>
        </div>
    </div>
</div>
</body>
</html>
