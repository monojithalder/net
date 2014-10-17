<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <style type="text/css">
    #container
   {
       width:100%;
       margin:1;
       padding-left:2px;
       padding-right:2px;
       border:none;
       height:50px;
       text-align:center;
   }
   #nav
   {
       width:100px;
       height:30px;
   }
   #nav ul
   {
       width:350px;
       height:10px;
       top:0px;
       float:left;
       
       
       
   }
   #nav ul li
   {
       
       list-style-type:none;
       display:inline;
       padding-left:20px;
       font-size:19px;
       color:White;
       width:300px;
   }
   #nav ul li a
   {
       text-decoration:none;
       background:url("tableft.gif") no-repeat left top;
       font-size:19px;
       color:White;
   }
       
   #nav ul li a:hover
   {
             
   }
   #main
   {
        border:thick;
	border-left-style:solid;   
   }
    
   #main ul
   {
       width:10px;
       height:100px;
       padding-right:200px;
   }
   #main ul li
   {
       list-style-type:none;
       padding-bottom:4px;
       background:url("line.png") repeat-x Left bottom;
       background-color:#498CE8;
       
       display:block;
       width:130px;
      
   }

   #main ul li a
   {
       background-color:#498CE8;
       text-decoration:none;
       font-size:20px; 
       color:White;
       display:block;
       width:130px;
   }
  
   #main ul li a:hover
   {
       
       background-color:Black;
       color:White;
   }
   .all
   {
       margin:2px 5px 2px 5px;
   } 
    </style>
</head>

<body>
         <table id="container">
         <asp:ToolkitScriptManager ID="ToolkitScriptManager1" runat="server">
         </asp:ToolkitScriptManager>
        
    <tr style="background-color:Blue; margin-top:40px;">
    
        <td>
            <table id="nav">
            <tr valign="top">
                <td style=" padding-left:750px;"></td>
                <td valign="top">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Account</a></li>
                    </ul>
                </td>
            </tr>
            </table>
        </td>
    </tr>
    <tr>
     <td>
        <table width="100%">
        <tr>
            <td></td>
            <td style=" padding-top:30px;">
                <table id="main">
                <tr>
                <td>
                   <img src="" width="130px" height="150px"  />
                </td>
                </tr>
                <tr>
                <td >
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Request</a></li>
                    <li><a href="#">Message</a></li>
                </ul>
                </td>
            </tr>
                </table>
            </td>
            <td ></td>
            <td valign="top" style=" padding-top:50px;">
                <table style=" border:1px solid black">
                <tr>
                    <td>
                        <table>
                        <tr> 
                            <td>
                               </td>
                        </tr>
                        <tr>
                            <td>
                               </td>
                            <td>
                                </td>
                            <td>
							</td>
                            <td>
								</td>
                        </tr>
                        <tr>
                        <td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                            
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left">
                                
                            </td>
                            <td colspan="2" align="right">
                                
                            </td>
                        </tr>
                        </table>
                    </td>
                </tr>
                </table>
            </td>
            <td></td>
            <td valign="top" style=" padding-top:30px">
                <table style=" border:1px solid black;">
            <tr>
                <td valign="top" style=" padding:5px 5px 5px 5px">
                    </td>
                <td>
                    </td>
            </tr>
            <tr>
                <td colspan="2">
                
                  
                </td>
            </tr>
        </table>

            </td>
            <td style=" padding-right:30px;"></td>
        </tr>
        </table>
     </td>
    </tr>
    <tr>
        <td>
        <table width="100%">
            <tr>
            <td>
                
            </td>
            <td>
                
            </td>
            <td>
             
            </td>
            </tr>
        </table>
        </td>
    </tr>
    </table>
    
</body>
</html>
