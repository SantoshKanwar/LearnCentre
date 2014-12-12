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
div10{
	font-family: "Imprint MT Shadow";
	font-size: 20px;
	color: #000000;

}
</style>
</head>

<body>
<?php
	require("myclass/demo.php");
	$obj= new demo();
	
	if(isset($_GET['cid']))
	{
	$rs=$obj->get_rs("cat_info");
	$row=mysql_fetch_array($rs);
	}
?>
    <form  action="updateCat.php" method="post">
<table width="100%" height="100%">
       <tr>
	      <td height="60"  colspan="3" background="images/header-pattern.gif"  width="50%" align="center">
		            <table width="70%">
				        <tr>
						   <td align="left">
						   <img src="images/lc.jpg">
						  
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
            <div class="grid3 first"> 
              <div id='cssmenu'> 
                
          <ul class="categories">
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
            <li> <a href="#">Log Out</a> </li>
          </ul>
              </div>
            </div>
            <div class="grid9"> <section class="images"> 
                    
              <table width="80%" align="right" height="50%">
                <tr> 
                  <td colspan="2" align="center" height="50"></td>
                </tr>
                <tr> 
                  <td colspan="2"> <div2>Update Category</div2></td>
                </tr>
                <tr> 
                  <td colspan="2" align="center" height="10"></td>
                </tr>
                <tr> 
                  <td> <div10>Category ID </div10></td>
                  <td><div10> 
				  <?php
                             echo "<input type='text' value='";
							 if(isset($row[0]))
							 	echo $row[0];
							 echo "' name='cid'>";
                            ?>          
                    </div10></td>
                </tr>
                <tr> <div10> 
                  <td> <div10>Category Name </div10></td>
                  <td><div10> 
                       <?php
                    
                echo "<input type='text' name='uname' class='fon01' value='";
				if(isset($row[1]))
							 	echo $row[1];
				echo "'>";
                        ?>
                    
                    </div10></td>
                </tr>
                
               
                   
                <tr> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td align="center"><div10> 
                    <input name="submit" type="submit" value="Update">
                    </div10></td>
                  <td><div10> 
                    <input name="reset" type="reset" value="reset">
                    </div10></td>
                </tr>
                </form>
              </table>
              </section> </div>
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
<?php
if(isset($_POST['submit']))
{
$cid=$_POST['cid'];
$cname=$_POST['uname'];
$sql="update category_master set cname='$cname' where cid=$cid";
mysql_query($sql);
echo "update successfully";

}

?>
