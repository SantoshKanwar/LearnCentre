<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--photo show of 3rd cols -->
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine2/style.css" />
	<script type="text/javascript" src="engine2/jquery.js"></script>
<!--menus of 4rd cols  -->
<script language="JavaScript" >

</script>
<style type="text/css">
#web-buttons-idfmfir a{display:block;color:transparent;} #web-buttons-idfmfir a:hover{background-position:left bottom;}a#web-buttons-idfmfira {display:none}
#web-buttons-idfmfir1 a{display:block;color:transparent;} #web-buttons-idfmfir1 a:hover{background-position:left bottom;}a#web-buttons-idfmfira1 {display:none}
#web-buttons-idfmfir2 a{display:block;color:transparent;} #web-buttons-idfmfir2 a:hover{background-position:left bottom;}a#web-buttons-idfmfira2 {display:none}
#cp{display:block;color:transparent;} #cp a:hover{background-position:left bottom;}a#cp {display:none}
#chp a{display:block;color:transparent;} #chp a:hover{background-position:left bottom;}a#chp {display:none}
#givef a{display:block;color:transparent;} #givef a:hover{background-position:left bottom;}a#givef {display:none}

.wel{
	font-family: Coronet;
	font-size: 100px;
	color: #666666;
    
}
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
divp{
}		
</style>
<?php
	require_once("./myclass/demo.php");
	session_start();
	 $uname=$_SESSION["uname"];
	 $uid=$_SESSION["uid"];
	 
	 $d=new demo();
	 $res=$d->welcome($uname);
	 $norow=mysql_num_rows($res);
	 $row=mysql_fetch_row($res);
	 
	  //echo "hello".$norow;
?>
</head>

<body background="images/backg.jpg">
    <form action="welcome.php" method="post" enctype="multipart/form-data">
	
<table width="80%" height="100%"  border="0" align="center"  bgcolor="#FFFFFF">
  <tr><td colspan="2" background="images/backg.jpg">
       
	      <table width="100%" border="0">
              <tr>
			       <td height="204" colspan="3" background="images/logo.jpg">
                     <img src="images/logo.jpg" width="100%" height="100%">	
                     
                   </td>
              </tr>
          </table> 	
   </td></tr>
  <tr>
    <td height="35" colspan="2"> <table width="100%" align="center" height="9%" >
     <tr>
         <td width="25%" height="47" align="center" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Welcome</a></div></td>
         <td width="25%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="Selection.php" >Start Exam</a></div></td>
         <td width="25%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Check Result</a></div></td>
          <td width="25%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="logout.php" >Log Out</a></div></td>
          </tr>
    </table></td>
  </tr>
 
  <tr>
      <td height="170" colspan="2" class="a1">
       <table width="100%" border="0" height="100%">
           <tr>
               <td height="100%" width="20%">
           <divp>
             <?php  echo "<img src='./uimage/$row[5]' width='100%'  />"; ?>         
            </divp>
                </td>
	
            <td height="25%" width="28%" class="wel">&nbsp;&nbsp;Welcome,</td>
                  
           <td height="25%" width="40%" class="wel">&nbsp;<?php echo "$row[2]";?> </td>
                  
          </tr>
          <tr>
              <td colspan="3"> 
			  <input type="file" name="pho" id="fileField"/>
            <input type="submit" name="Upload" value="Upload"/></td>
          </tr>
          
          </table>
    </td>
   </tr>
  <tr><td height="36" colspan="2" background="images/img01.jpg"><marquee behavior="scroll" onMouseOver="this.stop();" onMouseOut="this.start();">
      <font color="#FFFFFF" face="Comic Sans MS">Welcome to our Learn Center, 
      It is free way to getting the valuable Knowledge about different areas...</font></marquee> 
    </td>
  </tr>
  <tr>
    <td  width="20%">
	   <table border="0">
	   <tr><td>&nbsp;</td></tr>
	   <tr><td>&nbsp;</td></tr>
	      <tr>
           <td>
		       <table id="web-buttons-idfmfir1" width=0 cellpadding=0 cellspacing=0 border=0><tr>
<td style="padding-right:0px" title ="Download Materials">
<a href="#" title="Download Materials" style="background-image:url(dm-files/btfmfir.png);width:290px;height:41px;display:block;"><br/></a></td>
</tr></table>
		   </td>
		  </tr>
		  <tr>
		           <td>
				    <table id="web-buttons-idfmfir" width=0 cellpadding=0 cellspacing=0 border=0><tr>
<td style="padding-right:0px" title ="Compare Result With Goal">
<a href="#" title="Compare Result With Goal" style="background-image:url(crwg-files/btfmfir.png);width:290px;height:41px;display:block;"><br/></a></td>
</tr></table>
	   </td>
    	  </tr>
		      <tr><td>
                              <a href="ChangePassWord.jsp">	   <table id="cp" width=0 cellpadding=0 cellspacing=0 border=0><tr>
                         <td style="padding-right:0px" title ="Change Password">
                             <a href="Changepwd.php" title="Change Password" style="background-image:url(cp-files/btfmfir.png);width:290px;height:41px;display:block;"><br/></a></td>
                            </tr></table></a>
			  </td></tr>		  
		     <tr><td><table id="chp" width=0 cellpadding=0 cellspacing=0 border=0><tr>
<td style="padding-right:0px" title ="Change Profile">
<a href="#" title="Change Profile" style="background-image:url(chp-files/btfmfir.png);width:290px;height:41px;display:block;"><br/></a></td>
</tr></table></td></tr>
                     
		  <tr>
		            <td>
					        <table id="web-buttons-idfmfir" width=0 cellpadding=0 cellspacing=0 border=0><tr>
<td style="padding-right:0px" title ="Give Feedback">
<a href="#" title="Give Feedback" style="background-image:url(gf-files/btfmfir.png);width:290px;height:41px;display:block;"><br/></a></td>
</tr></table>
					</td>
		  </tr>
<tr><td>&nbsp;</td></tr>
	   <tr><td>&nbsp;</td></tr>
	   </table>
	</td>
        
      <td width="70%">
	     
		 <!-- Start WOWSlider.com BODY section -->
	    <div id="wowslider-container1"> 
          <div class="ws_images"> 
            <ul>
              <li><img src="data2/images/appdevlopementgeneric.jpg" alt="app-devlopement-generic" title="app-devlopement-generic" id="wows1_0"/></li>
              <li><img src="data2/images/banner_free_apptitude_test.jpg" alt="banner_free_apptitude_test" title="banner_free_apptitude_test" id="wows1_1"/></li>
              <li><img src="data2/images/banner_masthead_disclaimer.jpg" alt="banner_masthead_disclaimer" title="banner_masthead_disclaimer" id="wows1_2"/></li>
              <li><img src="data2/images/banner_masthead_faqs.jpg" alt="banner_masthead_faqs" title="banner_masthead_faqs" id="wows1_3"/></li>
              <li><img src="data2/images/banner_masthead_privacypolicy.jpg" alt="banner_masthead_privacypolicy" title="banner_masthead_privacypolicy" id="wows1_4"/></li>
              <li><img src="data2/images/banner_masthead_search.jpg" alt="banner_masthead_search" title="banner_masthead_search" id="wows1_5"/></li>
              <li><img src="data2/images/banner1.jpg" alt="banner1" title="banner1" id="wows1_6"/></li>
              <li><img src="data2/images/banner2.jpg" alt="banner2" title="banner2" id="wows1_7"/></li>
              <li><img src="data2/images/banner3.jpg" alt="banner3" title="banner3" id="wows1_8"/></li>
              <li><img src="data2/images/getuniversitydegreeinbca.jpg" alt="get-university-degree-in-bca" title="get-university-degree-in-bca" id="wows1_9"/></li>
              <li><img src="data2/images/sitemapbanner.jpg" alt="site-map-banner" title="site-map-banner" id="wows1_10"/></li>
              <li><img src="data2/images/spokenenglishinner.jpg" alt="spoken-english-inner" title="spoken-english-inner" id="wows1_11"/></li>
            </ul>
          </div>
          <div class="ws_bullets"> 
            <div> <a href="#" title="app-devlopement-generic"><img src="data2/tooltips/appdevlopementgeneric.jpg" alt="app-devlopement-generic"/>1</a> 
              <a href="#" title="banner_free_apptitude_test"><img src="data2/tooltips/banner_free_apptitude_test.jpg" alt="banner_free_apptitude_test"/>2</a> 
              <a href="#" title="banner_masthead_disclaimer"><img src="data2/tooltips/banner_masthead_disclaimer.jpg" alt="banner_masthead_disclaimer"/>3</a> 
              <a href="#" title="banner_masthead_faqs"><img src="data2/tooltips/banner_masthead_faqs.jpg" alt="banner_masthead_faqs"/>4</a> 
              <a href="#" title="banner_masthead_privacypolicy"><img src="data2/tooltips/banner_masthead_privacypolicy.jpg" alt="banner_masthead_privacypolicy"/>5</a> 
              <a href="#" title="banner_masthead_search"><img src="data2/tooltips/banner_masthead_search.jpg" alt="banner_masthead_search"/>6</a> 
              <a href="#" title="banner1"><img src="data2/tooltips/banner1.jpg" alt="banner1"/>7</a> 
              <a href="#" title="banner2"><img src="data2/tooltips/banner2.jpg" alt="banner2"/>8</a> 
              <a href="#" title="banner3"><img src="data2/tooltips/banner3.jpg" alt="banner3"/>9</a> 
              <a href="#" title="get-university-degree-in-bca"><img src="data2/tooltips/getuniversitydegreeinbca.jpg" alt="get-university-degree-in-bca"/>10</a> 
              <a href="#" title="site-map-banner"><img src="data2/tooltips/sitemapbanner.jpg" alt="site-map-banner"/>11</a> 
              <a href="#" title="spoken-english-inner"><img src="data2/tooltips/spokenenglishinner.jpg" alt="spoken-english-inner"/>12</a> 
            </div>
          </div>
          <div class="ws_shadow"></div>
        </div>

	<script type="text/javascript" src="engine2/wowslider.js"></script>
	<script type="text/javascript" src="engine2/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
   
	 </td></tr>
  <tr><td height="61" colspan="2" background="images/img01.jpg"></td></tr>
</table>
	<?php
require_once('./myclass/demo.php');
if(isset($_POST["Upload"]))
{
	$pho=$_POST['pho'];
	$d=new demo();
$i=$d->updatepho($uname,$pho);
//echo "hello=$i";
if($i==1)
    echo "<script>alert('successfully Upload');</script>";

}
?>
    </form>
<div class="bb" > 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>

	
	
                        
			
       
       
