<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.thumbnail 
{
float:left;
width:120px;
height:100px;
margin:5px;
}
ul
{
float:none;
width:70%;
padding:0;
margin:0;
list-style-type:none;
}

a
{
float:left;
width:8em;
height:3em;
text-decoration:none;
color:white;
background-color:#F3F3F3;
padding:0.2em 0.6em;
border-right:1px solid white;
background-color:#78BBE6;
font-size: 22px;
border-radius:10px;



}
a:hover {
color:#FFFFFF;
font-family:"MS Serif", "New York", serif;
text-transform:uppercase;
text-shadow:1px 1px 1px #333;
 

}
.fon1
{
	font-weight:bold;
	font-family:"Times New Roman", Times, serif;
	background-color:#78BBE6;
	color:#F3F3F3;
	font-size:20px;
	border-radius:10px;
	
border-color:#78BBE6;
	
	
}
.fon01
{
	font-weight:bold;
	font-family:"Times New Roman", Times, serif;
	color:#333;
	font-size:15px;
	background-color:;
	border-radius:5px;
	border-color:;
	
}
li
{
display:inline;
font-size: 20px; font-weight: bold;
}
#gre
{
font-size:25px;
font-family:"Mongolian Baiti";
color:#77BBEA;
font-weight:bold;
}
body {
	background-image: url(../image/bg.jpg);
}
#Layer1 {
	position:absolute;
	left:497px;
	top:836px;
	width:53px;
	height:47px;
	z-index:1;
}
.style1 {
	font-family: "Mongolian Baiti";
	font-weight: bold;
	font-size: 36px;
	color: #FFFFFF;
}
#Layer2 {
	position:absolute;
	left:212px;
	top:777px;
	width:239px;
	height:39px;
	z-index:1;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
#Layer3 {
	position:absolute;
	left:990px;
	top:9px;
	width:151px;
	height:62px;
	z-index:1;
}
.up
{
	color:#78BBE6;
	font-weight:bold;
	
}
-->
</style>
<?php
	require_once("./myclass/demo.php");
	 $uname=$_COOKIE["uname"];
	 $d=new demo();
	 $res=$d->feedback($uname);
	 $norow=mysql_num_rows($res);
	 $row=mysql_fetch_row($res);
	 
	  //echo "hello".$norow;
?>
</head>

<body>
<table width="70%" height="218%" border="0" align="center" bgcolor="#F3F3F3">
  <tr>
    <td height="206"><div align="left"><img src="../image/social_logo.jpg" width="613" height="193" /></div></td>
  </tr>
  <tr>
    <td height="299"><div align="center"><img src="../image/header_images.jpg" width="923" height="288" /></div></td>
  </tr>
  <tr>
    <td height="482"><table width="100%%" height="470" border="0">
      <tr>
        <td width="23%" height="73" align="center" ><a href="main.htm"><br />
                      <b>Home</b></a></td>
        <td width="77%" rowspan="7" ><form action="" method="post" enctype="multipart/form-data"><table width="70%" height="434" border="0" align="center">
          <tr>
            <td height="63" colspan="2" align="center"><font color="#3399FF" size="+4">Feedback</font></td>
            </tr>
          <tr>
           <b> <td>User Id:</td></b>
           <td width="71%">
            <?php
			//$name="$row[1]"." "."$row[2]"." "."$row[3]";
              echo "<input type='text' value='$row[0]'  name='uid'  />";
			  ?>
			  </td>
          </tr>
          <tr>
           <b> <td width="29%">User Name:</td></b>
            <td width="71%">
            <?php
			$name="$row[1]"." "."$row[2]"." "."$row[3]";
              echo "<input type='text' value='$name'  name='uname'  />";
			  ?>
			  </td>
          </tr>
          <tr>
            <b><td>Feedback Date:</td></b>
            <td><label for="textfield2"></label>
            <select name="date" id="date" class="fon01">
			<?php
			$date=date("d",time());
			   echo "<option>$date</option>";
			   //echo "Today is ".date("d m, Y (D)",time());
			?>
			      </select>
              <span class="style6">DD</span>              </label>
              <label>
              <select name="month" id="month" class="fon01" onBlur="castval('Please Select Month',this.id);">
			  <?php
			$date=date("m",time());
			   echo "<option>$date</option>";
			   //echo "Today is ".date("d m, Y (D)",time());
			?> 
                </select>
              <span class="style6">MM</span> </label>
              <label>
              <select name="year" id="year" class="fon01" onBlur="castval('Please Select Month',this.id);">
			  <?php
			$date=date("Y",time());
			   echo "<option>$date</option>";
			   //echo "Today is ".date("d m, Y (D)",time());
			?>
              </select>
              </label>
              <span class="style6">YYYY
              </span> </td>
          </tr>
          <tr>
            <b><td height="87">Description</td></b>
            <td><label for="textarea"></label>
              <textarea name="desc" id="textarea" cols="35" rows="5"></textarea></td>
          </tr>
          <tr>
            <td height="143" colspan="2" align="center"><input type="submit" name="submit" id="button" value="Submit" /></td>
            </tr>
        </table></form></td>
      </tr>
      <tr>
       
	  <tr>
          <td height="76" align="center"><a href="inbox.php"><br />
                      <b>Inbox</b></a></td>
        </tr>
	  <tr>
          <td height="73" align="center"><a href="metri_home.php"><br />
                      <b>Metrimonial</b></a></td>
        </tr>
	  <tr>
        <td height="71" align="center"><a href="social _update_profile.php"><br />
                      <b>Profile</b></a></td>
        </tr>
	   <tr>
          <td height="71" align="center" ><a href="social%20_changepasswd.php"><br />
                      <b>Change Password</b></a></td>
        </tr>
	   <tr>
	      <td height="76"  align="center"><a href="logout.php"><br />
                      <b>Logout</b></a></td>
        </tr>
	  

    </table></td>
  </tr>
</table>
</body>
</html>
<?php
require_once('./myclass/demo.php');


if($_POST["submit"])
{
$uname=$_POST["uname"];

$uid=$_POST["uid"];
$date=$_POST["date"];
$month=$_POST["month"];
$year=$_POST["year"];
$desc=$_POST["desc"];
$d=new demo();
$i=$d->insertfdk($uid,$uname,$date,$month,$year,$desc);
if($i==1)
    echo "<script>alert('successfully saved');</script>";
}
?>
