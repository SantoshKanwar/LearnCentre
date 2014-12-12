<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Login page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--photo show of 3rd cols -->
<!--menus of 4rd cols  -->

 <?php
require_once('./myclass/demo.php');
if(isset($_POST["LOGIN"]))
{
  $uname=$_POST["uname"];
  $pass=$_POST["pass"];
  if($uname=='admin' && $pass=='admin123')
  {
     //session("uname",$uname,time()+3600);
	  header("location:admin.php");
  }
  else
  {
  $d=new Demo();
  $i=$d->loginuser($uname,$pass);
  if($i==1)
  {
  		session_start();
		$_SESSION["uname"]=$uname;
		$_SESSION["uid"]=$i;
  //    setcookie("uname",$uname,time()+3600);
	  header("location:welcome.php");
	  echo "<script>alert('login successful');</script>";
  }
    // echo "<script>alert('login successful');</script>";
  else
      echo "<script>alert('login not successful');</script>";
	 }
}
?> 

</script>
<style type="text/css">
.font1{
	font-family: Coronet;
	font-size: 35px;
	color: #8ADAF4;
 }
 
 div1{
border:5px solid red;
}
 
a {
	color:#00FFFF;
	outline:none;
	text-decoration: none;
}
#menu {
	}
#menu  a:hover
{
	color:#FFFF80;
	font-size: 40px;
}    
 
 .slideshow
        {
            height: 170px;
            width: 220px;
            margin: auto;
        }
		
</style>
</head>

<body background="images/backg.jpg">
    
<table width="80%" height="100%"  border="0" align="center"  bgcolor="#FFFFFF">
  <tr><td height="204" colspan="2" background="images/logo.jpg">
          <img src="images/logo.jpg" height="100%" width="100%">
   </td></tr>
   <tr>
      <td height="48" colspan="3"> 
	    <table width="100%" align="center" height="94%">
          <tr> 
              <td width="16.66%" height="47" align="center" background="images/MButton.jpg"><div id="menu" class="font1"><a href="home.php" >Home</a></div></td>
            <td width="16.66%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="reg.php" >Registration</a></div></td>
            <td width="16.66%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="log.php" >Log 
              In</a></div></td>
            <td width="16.66%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Package 
              Info</a></div></td>
            <td width="16.66%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Subject 
              Info</a></div></td>
            <td width="16.66%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Material 
              Info</a></div></td>
          </tr>
        </table>
	  </td>
  </tr>
 <tr>
    <td height="141" colspan="2" class="a1">
        <form action="log.php" method="post" >    
        <table width="100%" height="100%" align="center">
          <tr>
		    <td rowspan="7" width="30%">  <img src="images/aboutus_logo.jpg"></td>
            <td width="20%"><font color="#0099CC" size="4" face="Comic Sans MS">&nbsp; 
             
              </font></td>
            <td width="20%"><div align="center"><font size="4" face="Comic Sans MS"> 
                             </font></div></td>
            
			 <td rowspan="7" width="20%">  <a href="forgotpwd.php"><img src="images/forgotpass.jpg"></a></td>
          </tr>
      
	  
	          		            <tr> 
            <td width="20%" colspan="2"><div align="center"><font color="#333333" size="7" face="CasperOpenFace"> 
             Login Here
                </font></div></td>
          </tr>
           <tr>	    <td width="20%">
                   &nbsp;&nbsp;   &nbsp;               &nbsp;</td>     </tr>
          
           <tr>
		    <td width="20%"><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>Login Name </label>
              </font></td>
            <td width="20%"><div align="center"><font size="4" face="Comic Sans MS"> 
                <input name="uname" type="text" size="20" id="name" placeholder="Enter Login Name"onBlur="onlychar(this.value,this.id);">
                </font></div></td>
            
		  </tr>
		  
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label> Password</label>
              </font></td>
            <td><div align="center"><font size="4" face="Comic Sans MS"> 
                <input name="pass" type="password" size="20" id="opass" placeholder="Enter Password" >
                </font></div></td>
          </tr>
          <tr> 
            <td align="center"><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <input type="submit" name="LOGIN" value="LOGIN">
              </font></td>
            <td align="center"><font face="Comic Sans MS"> 
              <input type="reset" name="submit2" value="Reset">
              </font></td></tr>
	          <tr> 
            <td width="20%"><font color="#0099CC" size="4" face="Comic Sans MS">&nbsp; 
              </font></td>
            <td width="20%"><div align="center"><font size="4" face="Comic Sans MS"> 
             
                </font></div></td>
          </tr>
        </table>
  
</form>
  	 </td>
   </tr>
  <tr><td height="36" colspan="2" background="images/img01.jpg"><marquee behavior="scroll" onMouseOver="this.stop();" onMouseOut="this.start();">
      <font color="#FFFFFF" face="Comic Sans MS">Welcome to our Learn Center, 
      It is free way to getting the valuable Knowledge about different areas...</font></marquee> 
    </td>
  </tr>
  <tr>
    <td  width="70%"> <marquee behavior="scroll" direction="right" onMouseOver="this.stop()" onMouseOut="this.start()">
              <img src="images/images/image(110).bmp"> <img src="images/images/i1.jpg"> 
              <img src="images/images/images(254).jpg"> <img src="images/images/e2.bmp"> 
              <img src="images/images/images (16).jpg"> <img src="images/images/e1.bmp"> 
              </marquee>
	 </td>
	</tr> 
  <tr><td height="61" colspan="2" background="images/img01.jpg"></td></tr>
</table>

</body>
</html>



