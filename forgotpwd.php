<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--to show of 3rd cols -->
<!--menus of 4rd cols  -->
<style type="text/css">
.font1{
	font-family: Coronet;
	font-size: 35px;
	color: #8ADAF4;
 }
 
a {
	color:#00FFFF;
	outline:none;
	text-decoration: none;
}
#menu {
	}
#menu  a:hover
{color:#FFFF80}
.bb {
	background-image: url(images/footer.jpg);
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
       	
   </td></tr>
  <tr>
    <td height="52" colspan="2"><table width="100%" align="center" height="94%" border="1">
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
        </table></td>
  </tr>
  <tr>
    <td height="" colspan="2" class="a1">
	<form action="forgotpwd.php" method="post" >
	<table width="100%" height="100%" align="center">
 <tr> 
     <td width="30%" rowspan="6" height="100%"><img src="images/fpass.gif" height="100%" width="100%"></td>
            <td width="20%" colspan="2"> <div align="center"><font color="#0099CC" size="4" face="Comic Sans MS"> 
                <label><font color="#333333" size="6" face="CasperOpenFace">Are You Forgot the Password ?</font> </label>
                </font></div>
              </div></td>
       
<td width="30%" rowspan="6" height="100%"><img src="images/passchang.jpg" height="100%" width="100%"></td>
    </tr>

    <tr>	    <td width="20%" colspan="2">
                   &nbsp;&nbsp;   &nbsp;               &nbsp;</td>     </tr>
    <tr>
	<td width="20%"><div align="center"></div>        
        <div align="right"><font color="#0099CC" size="4" face="Comic Sans MS">
          <label>Name </label>
        </font></div></td>
      <td width="20%"><font size="4" face="Comic Sans MS"> 
        <input name="uname" type="text" size="20">
        </font></td>
		
	</tr>
 <tr> 
      <td height="30"> <p align="right"> <font color="#0099CC" size="4" face="Comic Sans MS"> Security Question</font></p></td>
      <td><font face="Comic Sans MS"> 
        <select name="sq">
          <option>------Seq_Que------</option>
          <option value="1">What is your native place?</option>
          <option value="2">What is favorite Book?</option>
          <option value="3">Who is your best Friend?</option>
          <option value="4">What is favorite Teacher?</option>
          <option value="5">What is favorite Food?</option>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td> <p align="right"> <font color="#0099CC" size="4" face="Comic Sans MS"> Security Answer</font></p></td>
      <td><font face="Comic Sans MS"> 
        <input name="ans" type="text" size="20">
        </font></td>
    </tr>
    <tr> 
      <td height="38" align="center"><div align="right"><font color="#0099CC" size="4" face="Comic Sans MS"> 
          <input type="submit" name="submit" value="Submit">
      </font></div></td>
      <td align="center"><div align="left"><font face="Comic Sans MS"> 
          <input type="reset" name="submit2" value="Reset">
        </font></div></td>
    </tr>
  </table> </form>	</td>
  </tr>
   <tr><td height="36" colspan="2" background="images/img01.jpg">
      <font color="#FFFFFF" face="Comic Sans MS">Welcome to our Learn Center, 
      It is free way to getting the valuable Knowledge about different areas...</font>
    </td>
  </tr>
  <tr>
          <td  width="70%">
	            <marquee behavior="scroll" direction="right" onMouseOver="this.stop()" onMouseOut="this.start()">
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

<?php
require_once('./myclass/demo.php');


if(isset($_POST["submit"]))
{
	/*echo "<script>alert('hello');</script>";*/
	 $uname=$_POST["uname"];
	 $sq=$_POST["sq"];
	 $ans=$_POST["ans"];
	// echo "$uname";
	// echo "$sq";
	 //echo "$ans";
	 $d=new Demo();
     
	 $res=$d->forpass($uname,$sq,$ans);
     // $res=$d->welcome($uname);
	 $norow=mysql_num_rows($res);
	 
	
	// $norow=mysql_num_rows($res);
     echo "$norow";

	$row=mysql_fetch_row($res);
	 if($norow>0)
	 {
		 $pass=$row[4];
		 echo "<script>alert('Your Password is=$pass plz change the password '); </script>";
	 }
	 else
	 {
	    echo "<script>alert('Unknown user'); </script>";
	 }

}
?>
