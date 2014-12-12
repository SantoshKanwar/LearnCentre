<?php
				require ("myclass/demo.php");
				$obj=new demo();
				
			?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui-1.8.5.custom.css" type="text/css" media="all">
<link rel="stylesheet" href="css/submenu.css" type="text/css">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
<style>
div1{
	font-family: Coronet;
	font-size: 65px;
	color: #990000;
	}
div2{
	font-family: Coronet;
	font-size: 60px;
	color: #75C8FF;
}
div22{
	font-family: Coronet;
	font-size: 35px;
	color: #75C8FF;
}
div10{
	font-family: "Imprint MT Shadow";
	font-size: 20px;
	color: #000000;
}
div11{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 19px;
	color: #858585;

}
#update a{padding-right:0px;display:block;color:transparent;background-image:url(update-files/btgscu7.png);width:88px;height:31px;} #update a:hover{padding-right:0px;background-position:left bottom;background-image:url(update-files/btgscu7.png);width:88px;height:31px;}a#updatea {display:none}
#remove a{width:88px;height:31px;display:block;color:transparent;background-image:url(remove-files/btgscu7.png);} #remove a:hover{width:88px;height:31px;background-position:left bottom;background-image:url(remove-files/btgscu7.png);}a#removea {display:none}
</style>
</head>

<body>
<table width="100%" height="100%">
       <tr>
	      <td height="60"  colspan="3" background="images/header-pattern.gif"  width="50%" align="center">
		            <table width="70%">
				        <tr>
						   <td align="left">
						   <img src="images/lc.jpg">
						   </td>
						  
          <td align="left">  
          </td>
						  </tr>
			    	   </table>     
		      	</td>
	   </tr>
	   
       <tr bgcolor="#FFFFFF" >
	      <td  width="50%" colspan="3">
		  <section id="content">
		<div class="top">
			  
        <div class="container"> 
          <div class="clearfix"> <section id="gallery"> 
            <div class="pics"> <img src="images/slide3.jpg" alt="" width="495" height="329"> 
              <img src="images/slide1.jpg" alt="" width="495" height="329"> <img src="images/slide2.jpg" alt="" width="495" height="329"> 
              <img src="images/slide4.jpg" alt="" width="495" height="329"> <img src="images/slide1.jpg" alt="" width="495" height="329"> 
            </div>
            <a href="#" id="prev"></a> <a href="#" id="next"></a></section> <section id="intro"> 
            <div class="inner"> <br/>
              <div align="center"> <div1> -: Latest Updates :-</div1> <br />
                <h3> <span> We Will Open the World Of Knowledge for You</span></h3>
              </div>
            </div>
            </section> </div>
        </div>
      </div></section>
		  </td>
	   </tr>
	   
       <tr>
	      <td  bgcolor="#FFFFFF" colspan="3">
				       <div class="middle">
        <div class="container"> 
          <div class="wrapper"> 
            <table width="100%" height="100%">
              <tr> 
                <td width="20%"> <div class="grid3 first"> 
                    <div id='cssmenu'> 
                      
                  <ul class="categories" >
                    <li> <a href="#">Welcome</a> </li>
                    <li class='has-sub'><a href="#">Manage Category</a> 
                      <ul>
                        <li class='has-sub'> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">Add 
                            Category</font></strong></a></div>
                        </li>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">View 
                            Category</font></strong></a></div>
                        </li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href="#">Manage Subject</a> 
                      <ul>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">Add 
                            Subject</font></strong></a></div>
                        </li>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">View 
                            Subject</font></strong></a></div>
                        </li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href="#">Manage Question</a> 
                      <ul>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">Add 
                            Question</font></strong></a></div>
                        </li>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">View 
                            Question</font></strong></a></div>
                        </li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href="#">Manage Student</a> 
                      <ul >
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">Conform 
                            Student Registration</font></strong></a></div>
                        </li>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">View 
                            Student</font></strong></a></div>
                        </li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href="#">Manage Materials</a> 
                      <ul>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">Add 
                            Materials</font></strong></a></div>
                        </li>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">View 
                            Materials</font></strong></a></div>
                        </li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href="#">Manage Reports</a> 
                      <ul>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">Generate 
                            Report</font></strong></a></div>
                        </li>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">View 
                            Report</font></strong></a></div>
                        </li>
                      </ul>
                    </li>
                    <li class='has-sub'><a href="#">Manage Package</a> 
                      <ul>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">Add 
                            Package</font></strong></a></div>
                        </li>
                        <li> 
                          <div align="left"><a href="#"><strong><font color="white" size="3" face="Imprint MT Shadow">View 
                            Package</font></strong></a></div>
                        </li>
                      </ul>
                    </li>
                    <li> <a href="#">Log Out</a> </li>
                  </ul>
                    </div>
                  </div></td>
                  <td width="90%" align="right"> <div class=""> <section class=""> 
                            <form  method="POST">
                            <table width="100%" align="right" height="70%">
                      <tr> 
                          <td colspan="12" ><div11> 
                          
                        <select onblur="sub(this.value)" name="cat">
                              <?php
						$rs1=$obj->get_rs("category_master");
						while($row=mysql_fetch_array($rs1))
						{
							echo "<option value='".$row[0]."'>".$row[1]."</option>";
						}
					?>
                    
                        </select>
                        <div11>
                                 <input name="submit" type="submit" value="Ok">
                          </div11> </td>
                      </tr>
                      <tr> 
                          <td colspan="9" align="center"> <div2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Questions are...</div2></td>
                      </tr>
                      <tr> 
                        <td colspan="2" align="center" height="1"></td>
                      </tr>
                      <tr>
                          <td width="100%">
                              <table width="100%" align="center">
                                   <tr> 
                          <td> <div10>Que No</div10></td>
                        <td> <div10>Question</div10></td>
                        <td> <div10>Ans1</div10></td>
                        <td> <div10>Ans2</div10></td>
                        <td> <div10>Ans3</div10></td>
                        <td> <div10>Ans4</div10></td>
                        <td> <div10>Correct Ans</div10></td>
                        <td> <div10>Update Que</div10></td>
                        <td> <div10>Remove Que</div10></td>
                      </tr>
					  <?php
                     if(isset($_POST['submit']))
                      {
					  	$rs=$obj->get_rs("ques_info");
						while($row=mysql_fetch_array($rs))
						{
							echo "<tr><td>".$row[0]."</td>
									  <td>".$row[1]."</td>
									  <td>".$row[2]."</td>
									  <td>".$row[3]."</td>
									  <td>".$row[4]."</td>
									  <td>".$row[5]."</td>
									  <td>".$row[6]."</td>
									  <td><a href='updateque.php?qid=".$row[0]."'> update </a></td>
									  <td><a href='deleteque.php?qid=".$row[0]."'> delete </a></td></tr>";
						}
					  }
                          
						?>
                              </table>
                          </td>
                      </tr>
                        
  
                     
                          </table>
                            </form>
                            </td>
                      </tr>
                    </table>
                    </section> </div></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
		  </td>
	 </tr>
	   
       <tr align="center">
	   <td background="images/content-pattern.gif" colspan="2" width="100%">
	               <img src="images/b1.png">
				   <img src="images/b2.png">
	    </td>
		  </tr>
	   
       <tr>
	        <td height="50" colspan="3" background="images/body-bg.gif">
			
			</td>
	   </tr>
</table>
	
</body>
</html>
