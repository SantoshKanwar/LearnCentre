<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?php
session_start();
$uname=$_SESSION["uname"];
?>
<title>Change the password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--photo show of 3rd cols -->
<!--menus of 4rd cols  -->
 <script language="JavaScript" >
 function notnull(name,id)
{
var na=name.toString();
if(na.length==0)
  {
  alert("Plz Enter the value...");
  document.getElementById(""+id).value="";
  document.getElementById(""+id).focus();
  }
} 
function comboval(id,msg)
{
if(document.getElementById(id).selectedIndex==0)
   alert(""+msg);
}
function passval(pass,id)
{
var p=pass.length;
 if(p<=6 || p>=20)
  		 {
alert("please enter in Between six to twenty Character");
document.getElementById(""+id).value="";
document.getElementById(""+id).focus();
		}
var c=pass.toString();
var up=0,lo=0,sp=0,di=0,i=0;
for(i=0;i<c.length;i++)
{
		if(c.charAt(i)>='0' && c.charAt(i)<='9')
		  {
		    di=1;
		  }
		
		
		  if(c.charAt(i)>='A' && c.charAt(i)<='Z')
		  {
		   up=1;
		  }
		
		
		  if(c.charAt(i)>='a' && c.charAt(i)<='z')
		  {
		    lo=1;
		  }
		
		  if((!(c.charAt(i)>='0' && c.charAt(i)<='9')) && (!(c.charAt(i)>='A' && c.charAt(i)<='Z')) && (!(c.charAt(i)>='a' && c.charAt(i)<='z')) )
		  {
		  sp=1;
		  }
	 }
	 
	 
if(up==1 && lo==1)
	    document.getElementById("lab").value="LOW";
if(up==1 && lo==1 && di==1)
		document.getElementById("lab").value="MEDIUM";
if(up==1 && lo==1 && di==1 && sp==1)
		document.getElementById("lab").value="STRONG";
		
  }
function cpassval(pass,id)
{
   var pa=document.getElementById("pass").value.toString();
   var cpa=pass.toString();
  if(pa!=cpa)
  {
    alert("Password not Matched");
	document.getElementById("pass").value="";
   document.getElementById("cpass").value="";
   document.getElementById("pass").focus();
  }
  
}
</script>
<style type="text/css">
    .font1{
	font-family: Coronet;
	font-size: 30px;
	color: #8ADAF4;
 }
 a {
   color:#00FFFF;
	outline:none;
	text-decoration: none;
	 
}
div0{}
 div0:hover
	 {	 	-o-transform: rotate(-30deg); }
#menu {	}
#menu  a:hover
{
	color:#FFFF80;
	font-size: 35px;
}
div2{}
div2:hover{
-o-transform: rotate(30deg);
}
div1{
}
 div1:hover{
	-o-transform: rotate(30deg);
}
</style>
</head>

<body background="images/backg.jpg">
    <form action="Changepwd.php" method="post">
<table width="80%" height="100%"  border="0" align="center"  bgcolor="#FFFFFF">
  <tr><td height="204" colspan="2" background="images/logo.jpg">
       	
   </td></tr>
  <tr>
    <td height="52" colspan="2"> <table width="100%" align="center" height="9%" >
     <tr> 
         <td width="25%" height="47" align="center" background="images/MButton.jpg"><div id="menu" class="font1"><a href="home.php" >Welcome</a></div></td>
            <td width="25%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="#">Start Exam</a></div></td>
            <td width="25%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="#">Check Result</a></div></td>
             <td width="25%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="logout.php" >Log Out</a></div></td>
          </tr>
    </table></td>
  </tr>
 
  <tr>
    <td height="141" colspan="2" class="a1">
       <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
	            <img src="images/cp/download (7).jpg">
				<img src="images/cp/download (12).jpg">
				<img src="images/cp/download (13).jpg">
		
	   </marquee> 
  	 </td>
   </tr>
  <tr><td height="36" colspan="2" background="images/img01.jpg"><marquee behavior="scroll" onMouseOver="this.stop();" onMouseOut="this.start();">
      <font color="#FFFFFF" face="Comic Sans MS">Welcome to our Learn Center, 
      It is free way to getting the valuable Knowledge about different areas...</font></marquee> 
    </td>
  </tr>
  <tr>
  <td width="40%" align="right">
       <img src="images/cp/profile_change_password.jpg">
  </td>
    <td  width="60%"> 
  <table width="60%" height="142" align="left">
    <tr> 
	   <td rowspan="5">		</td>
      <td width="88"><font color="#0099CC" size="4" face="Comic Sans MS"> 
        <label>User Name </label>
        </font></td>
      <td width="224"><div align="center"><font size="4" face="Comic Sans MS"> 
            <?php echo "<input type='text' name='lname' class='fon01' value='$uname' readonly='readonly'/>";?>

          </font></div></td>
		  <td rowspan="5"></td>
    </tr>
    <tr> 
      <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
        <label>Old Password</label>
        </font></td>
      <td><div align="center"><font size="4" face="Comic Sans MS"> 
          <input  name="oldpasswd"  type="password" size="20" id="opass" onBlur="notnull(this.value,this.id);">
          </font></div></td>
    </tr>
    <tr> 
      <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
        <label>New PassWord </label>
        </font></td>
      <td><div align="center"><font size="4" face="Comic Sans MS"> 
          <input  name="newpasswd" type="password" size="20"  id="npass" onblur="passval(this.value,this.id)">
          </font></div></td>
    </tr>
    <tr> 
      <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
        <label>Conform PassWord </label>
        </font></td>
      <td><div align="center"><font size="4" face="Comic Sans MS"> 
          <input name="cpasswd" type="password" size="20" id="cpass" onblur="cpassval(this.value,this.id)">
          </font></div></td>
    </tr>
    <tr> 
      <td align="center"><font color="#0099CC" size="4" face="Comic Sans MS"> 
        <input type="submit" name="Submit" value="Submit">
        </font></td>
      <td align="center"><font face="Comic Sans MS"> 
        <input type="reset" name="submit2" value="Reset">
        </font></td>
    </tr>
  </table>
</td>
     <tr><td height="61" colspan="2" background="images/img01.jpg"></td></tr>
</table>
</form>
</body>
</html>

<?php
//echo "$uname";
$user=$uname;
require_once('./myclass/demo.php');
	if(isset($_POST["Submit"]))
	{
		$lname=$_POST["lname"];
		$oldpasswd=$_POST["oldpasswd"];
		$newpasswd=$_POST["newpasswd"];
		$cpasswd=$_POST["cpasswd"];
		$cp=new demo();
		$cp->changepasswd($uname,$lname,$oldpasswd,$newpasswd,$cpasswd);
	}
?>   

