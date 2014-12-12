<?php
	session_start();
	 $uname=$_SESSION["uname"];
	 $uid=$_SESSION["uid"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Subject Selection</title>
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

 </script>
<style type="text/css">
divexam{

}
.wel{
	font-family: Coronet;
	font-size: 100px;
	color: #666666;
    
}.font1{
	font-family: Coronet;
	font-size: 36px;
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
#menu1 a:hover
{
	
	color: #000000;

}		
</style>
</head>

<body background="images/backg.jpg">
    <form action="Selection.php" target="POST" >
<table width="80%" height="100%"  border="0" align="center"  bgcolor="#FFFFFF">
  <tr><td height="204" colspan="2" background="images/logo.jpg">
    
   </td></tr>
  <tr>
    <td height="52" colspan="2"> <table width="80%" align="center" height="9%">
     <tr> 
            <td width="20%" height="47" align="center" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Welcome</a></div></td>
            <td width="20%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Start Exam</a></div></td>
            <td width="20%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="result.php" >Check Result</a></div></td>
            <td width="20%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Log Out</a></div></td>
          </tr>
    </table></td>
  </tr>
  <tr>
      <td>
          <div align="center" id="menu1" class="font1"><a href="#">Select Subject for Practice Exam</a></div>
      </td>
  </tr> 
  <tr>
    <td height="141" colspan="2" class="a1">
        <divexam>
  <table width="50%" height="142" align="center">
        <tr> 
          <td width="10" rowspan="7"></td>
          <td width="132"><div align="center"><font color="#333333" size="6" face="Kristen ITC">SNo.</font></div></td>
          <td><div align="center"><font color="#333333" size="6" face="Kristen ITC">SName.</font></div></td>
          <td><div align="center"><font color="#333333" size="6" face="Kristen ITC">Start 
              Exam</font></div></td>
          <td width="11" rowspan="7"></td>
        </tr>
		<?php
			include "myclass/demo.php";
			$obj=new demo();
			$rs=$obj->get_rs("subjects");
			$i=1;
			while($row=mysql_fetch_array($rs))
			{
				echo '<tr align="center"><td> '.$i.' </td><td> ';
				if($row[0] == 1)	echo " General Knowledge ";
				else if($row[0] == 2) 	echo " Aptitude ";
				else if($row[0] == 3) 	echo " English ";
				echo' </td><td><a href="StartExam.php?category='.$row[0].'"> Start Exam </a></td></tr>';
				$i++;
			}
		?>
		</table>
	  </divexam>
</form>
  	 </td>
   </tr>
  <tr><td height="36" colspan="2" background="images/img01.jpg"><marquee behavior="scroll" onMouseOver="this.stop();" onMouseOut="this.start();">
      <font color="#FFFFFF" face="Comic Sans MS">Welcome to our Learn Center, 
      It is free way to getting the valuable Knowledge about different areas...</font></marquee> 
    </td>
  </tr>
  <tr>
   <td align="center"><img src="images/gifani.gif">
   </td>
   </tr>
  <tr><td height="61" colspan="2" background="images/img01.jpg"></td></tr>
</table>

<div class="bb" > 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>

