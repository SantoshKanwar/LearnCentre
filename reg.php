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
 function onlychar(n,id)
{
var i,f=1;
   var na=n.toString();
        if(na.length==0)
      {
       alert("Plz Enter the value...");
       document.getElementById(""+id).value="";
	  // document.getElementById(""+id).focus();
      }
     for(i=0;i<na.length;i++)
	  {
	        if((na.charAt(i)>='A' && na.charAt(i)<='Z') || (na.charAt(i)>='a' && na.charAt(i)<='z') || (na.charAt(i)==' '))
			    f=1;
			else
			{
			    f=0;	
				break;
			}			   
	  }
	            if(f==0)
				   {
				    alert("Plz Enter the only charcter...");
                  //  document.getElementById(""+id).value="";
				    document.getElementById(""+id).focus();
				   }
  
}
function onlydigit(n,id)
{
var i,f=1;
if(n.length==6)   {
  for(i=0;i<n.length;i++)  {
     if(n.charAt(i)>='0' && n.charAt(i)<='9')
	       f=1;
	 else	    {
	       f=0;
	       break;
		}
  }
    if(f==0)   {
				    alert("Plz Enter the only digit...");
                    document.getElementById(""+id).value="";
					document.getElementById(""+id).focus();
			   }
 }
 else  {
  				    alert("Plz Enter the only six digit...");
					document.getElementById(""+id).value="";
                    document.getElementById(""+id).focus();
       }
}
function onlydigit10(n,id)
{
var i,f=1;

  for(i=0;i<n.length;i++)  {
     if(n.charAt(i)>='0' && n.charAt(i)<='9')
	       {
	            f=1;
		   }
		   else
		   {
		   f=0;
		   break;
		   }
		}
		   
		
    if(f==0)   {
				    alert("Plz Enter the only digit...");
					document.getElementById(""+id).value="";
                    document.getElementById(""+id).focus();
				   }
 if(n.length<10 || n.length>12 || n.length==11)
 {
				    alert("Plz Enter only 10 or 12 digits");
                    document.getElementById(""+id).value="";
					document.getElementById(""+id).focus(); 
 } 

}

function comboval(id,msg)
{
if(document.getElementById(id).selectedIndex==0)
   alert(""+msg);
}

function checkid(n,id)
{
  var n1=0,n2=0,n3=0;
  n1=n.indexOf('@');
  n2=n.indexOf('.');
  n3=n.lastIndexOf('.');
  var a=0,b=0;
       if(n1==0 || n2==0 || (n1==0 && n2==0))
              alert("plz Enter correct emailid...");
       else{
	          if(n2==n3)
			      {
				     a=n1+6;
				     if(a!=n2)
					     alert("plz Enter correct data Inbetween @ and .");
			                         	
                                                                    }
		      else
			      {
				     b=n2+3;
				      if(b!=n3)
					      alert("plz enter data charcter Inbetween . and .");
				  }
		   }		  	 
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
	 
        if(lo==1) document.getElementById("lab").value="VERY LOW";	 
if((up==1 && lo==1) || (up==1 && di==1))
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


function city(val){
var xmlreq;
//var x=document.getElementById("sname").value;
var x=val;
if (window.XMLHttpRequest)
  {
  xmlreq=new XMLHttpRequest();
 }
 else
    {
        xmlreq=new ActiveXObject("Microsoft.XMLHTTP");
    }

xmlreq.onreadystatechange=function()
  {
  if(xmlreq.readyState==4 && xmlreq.status==200)
    {
   	document.getElementById("C1").innerHTML=xmlreq.responseText;
    //document.getElementById("myDiv").innerHTML=xmlreq.responseText;
    }
  }
xmlreq.open("GET","City.jsp?uname="+x,true);
xmlreq.send();
}


function show(val){
var xmlreq;
var x=document.getElementById("lname").value;
//var x=val;//document.getElementById("sname").value;
if (window.XMLHttpRequest)
  {
  xmlreq=new XMLHttpRequest();
 }
 else
    {
        xmlreq=new ActiveXObject("Microsoft.XMLHTTP");
    }

xmlreq.onreadystatechange=function()
  {
  if(xmlreq.readyState==4 && xmlreq.status==200)
    {
   	document.getElementById("myDiv").innerHTML=xmlreq.responseText;
    //document.getElementById("myDiv").innerHTML=xmlreq.responseText;
    }
  }
xmlreq.open("GET","Uname.jsp?uname="+x,true);
xmlreq.send();
}
</script>
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
	 -webkit-transition:width 2s, height 2s,-webkit-trans 2s;
}
div0{}
 div0:hover
	 {	 	-o-transform: rotate(-30deg); }
	
#menu {	}
#menu  a:hover
{
	color:#FFFF80;
	font-size: 40px;
	
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
  
<table width="80%" height="100%"  border="0" align="center"  bgcolor="#FFFFFF">
  <tr>
    <td height="204" colspan="2" background="images/logo.jpg"> </td>
  </tr>
  <tr> 
    <td height="52" colspan="2"> <table width="100%" align="center" height="9%" border="1">
        <tr> 
            <td width="16.66%" height="47" align="center" background="images/MButton.jpg"><div id="menu" class="font1"><a href="home.php" >Home</a></div></td>
          <td width="16.66%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="log.php" >Registration</a></div></td>
          <td width="16.66%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Log 
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
      <td align="center"> <div align="center"><font color="#333333" size="15" face="CasperOpenFace">Register 
      Here...</font> </div></td>
  </tr>
  <tr> 
    <td height="141" colspan="2" class="a1"> 
        <form action="reg.php" method="post" enctype="multipart/form-data">
        <table align="center" width="50%" height="50%">
          <tr> 
            
            <td width="124"><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>SurName </label>
              </font></td>
            <td width="219"><font size="4" face="Comic Sans MS"> 
              <input name="srname" type="text" size="20" id="surname" onBlur="onlychar(this.value,this.id);">
              </font></td>
          </tr>
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>User Name </label>
              </font></td>
            <td><font size="4" face="Comic Sans MS"> 
              <input name="uname" type="text" size="20" id="name" onBlur="onlychar(this.value,this.id);">
              </font></td>
          </tr>
		  <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>Email ID </label>
              </font></td>
            <td><font size="4" face="Comic Sans MS"> 
              <input name="eid" type="text" size="20" id="eid" onBlur="checkid(this.value,this.id);">
              </font></td>
          </tr>
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>PassWord </label>
              </font></td>
            <td><font size="4" face="Comic Sans MS"> 
              <input name="passwd" type="password" size="20"  id="pass" onblur="passval(this.value,this.id)"></td>
           <td>   <input name="lab" id="lab" readonly></td>
              </font></td>
          </tr>
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>Conform PassWord </label>
              </font></td>
            <td><font size="4" face="Comic Sans MS"> 
              <input name="cpasswd" type="password" size="20" id="cpass" onblur="cpassval(this.value,this.id)">
              </font></td>
          </tr>
           <tr>
            <td><font color="#0099CC" size="4" face="Comic Sans MS">
			<label>Photo</label>
			</td>
			
            <td><input type="file" name="pho"/></font></td>
          </tr>
            
          <tr> 
            <td> <p> <font color="#0099CC" size="4" face="Comic Sans MS"> Security 
                Question</font></p></td>
            <td><font face="Comic Sans MS"> 
              <select name="que">
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
            <td> <p> <font color="#0099CC" size="4" face="Comic Sans MS"> Security 
                Answer</font></p></td>
            <td><font face="Comic Sans MS"> 
              <input name="ans" type="text" size="20">
              </font></td>
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
      </form></td>
  </tr>
  <tr>
    <td height="61" colspan="2" background="images/img01.jpg"></td>
  </tr>
</table>

</body>
</html>

<?php
require_once('./myclass/demo.php');
if(isset($_POST["Submit"]))
{
$surname=$_POST["srname"];
$uname=$_POST["uname"];
$eid=$_POST["eid"];
$passwd=$_POST["passwd"];
$filename1=$_FILES["pho"]['name'];
$queid=$_POST["que"];
$ans=$_POST["ans"];
$cpasswd=$_POST["cpasswd"];
$d=new Demo();
$a=$d->insertval($surname,$uname,$eid,$passwd,$filename1,$queid,$ans,$cpasswd);

   echo "<script>alert('Registration Successful!!..');</script>";
  
}
?>