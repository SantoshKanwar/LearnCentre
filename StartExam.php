<?php
	session_start();
	 $uname=$_SESSION["uname"];
	 $uid=$_SESSION["uid"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Exam is Going on</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--photo show of 3rd cols -->
<!--menus of 4rd cols  -->
<script language="JavaScript" >
       function hello()
		{
			$ans=confirm("Do you want to start the quiz?");
			if($ans == true)
			{
					m=9;
					s=59;
					setTimeout("timer()",1000);
			}
			else
			{
				window.location="Selection.php";
			}
		}
		function timer()
	{
		document.getElementById("time").innerHTML='TIME LEFT : '+m + ' : '+ s;
		if(s>0){
			s=s-1;
			setTimeout("timer()",1000);
		}
		else if(s==0)
		{
			if(s==0 && m==0)
			{		
				alert("Sorry! your time is up...");
				window.location="Selection.php";
			}
			else
			{
				s=59;m=m-1;
				setTimeout("timer()",1000);
			}
		}
	}
</script>
<style type="text/css">
    .aa{
	font-family: Coronet;
	font-size: 45px;
	color: #1C7495;
	border: 0px;
	text-align: center;
        
    }
.wel{
	font-family: Coronet;
	font-size: 100px;
	color: #666666;
    
}.font1{
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
</style>
</head>

<body background="images/backg.jpg" onload="hello()">
  
<table width="80%" height="100%"  border="0" align="center"  bgcolor="#FFFFFF">
  <tr><td height="204" colspan="2" background="images/logo.jpg">
       	
   </td></tr>
  <tr>
    <td height="52" colspan="2"> <table width="80%" align="center" height="9%">
     <tr> 
                  <td width="16%" height="47" align="center" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Welcome</a></div></td>
         <td width="16%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Start Exam</a></div></td>
         <td width="16%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Check Result</a></div></td>
         <td width="16%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Set Goal</a></div></td>
            <td width="16%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Log Out</a></div></td>
          </tr>
    </table></td>
  </tr>

      
  <tr>
    <td  colspan="2" class="a1">
                   <table align="center">
                 <tr>
                     
            <td width="32%" align="center"> <font color="#1C7495" size="45px" face="Coronet">here 
              for show time</font></td>
                  <td align="center" width="36%"><img src="images/good.jpg" align="middle"></td>
                  <td width="32%"> <font color="#1C7495" size="5" face="Coronet">
                          <span id="time"> TIME LEFT : 10 : 00 </span>
                             
                         </font></td>
                 </tr>
             </table>
  			
			<?php
				if(isset($_GET['category']))
				{
					include "myclass/demo.php";
					$obj=new demo();
					$result=$obj->get_rs("questions");
					$i=1;
					$total=mysql_num_rows($result);
					$num=range(0,$total-1);
					shuffle($num);
					$que=array_slice($num,0,10);
			?>
					<form id="form1" name="form1" method="post" action="action.php">			
			<?php
					for($i=0;$i<10;$i++)
					{
						mysql_data_seek($result,$que[$i]);
						if($row=mysql_fetch_array($result))
				{
					echo ($i+1). '. '.$row['question'].'<br>
						 <input type="radio" name="question'.$row['que_id'].'" value="A"> A. '.htmlspecialchars($row['option1']).'<br> 	 
						 <input type="radio" name="question'.$row['que_id'].'" value="B"> B. '.htmlspecialchars($row['option2']).'<br>	 
						 <input type="radio" name="question'.$row['que_id'].'" value="C"> C. '.htmlspecialchars($row['option3']).'<br>	 
						 <input type="radio" name="question'.$row['que_id'].'" value="D"> D. '.htmlspecialchars($row['option4']).'<br><br>
						 <input type="hidden" name="que[]" value="'.$row['que_id'].'">';
					}
				}	
				echo '<input type="hidden" name="cat" value="'.$_GET['category'].'">
				<input type="submit" name="submit_quiz" value=" SUBMIT " onclick="return confirm(\' Are you sure you want to submit?\')">';
				}
			?>
           </form>
  
  <tr><td height="61" colspan="2" background="images/img01.jpg"></td></tr>
</table>

<div class="bb" > 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>


         
     }

