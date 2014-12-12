 
<%@page import="java.sql.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head> 
    
     <%
   Connection con=null;
   Statement st=null;
   ResultSet rs=null;
   String uid="";
  // String uname="";
    String surname="";String name="";String lastname=""; String gender=""; String address=""; String pincode=""; String contactno=""; String state="";String city="";String emailid="";
    int ret=0;
 int loginid1=0;
 
 if(session.getAttribute("uid")==null)
       {
 RequestDispatcher rd=request.getRequestDispatcher("log.jsp");
 rd.forward(request, response);
 out.println("<script>alert('plz ! enter the correct Data...');</script>");
 }
    
    uid=session.getAttribute("uid").toString() ;
          //session.setAttribute("uid", ""+i);
      
 // uid= request.getParameter("uid");
//String uname=session.getAttribute("lname").toString() ;
  if(request.getParameter("update")!=null)
          {   

       surname=request.getParameter("surname");
       out.print(""+surname);
       name=request.getParameter("name");
       out.print(""+name);
       lastname=request.getParameter("lname");
       out.print(""+lastname);
       address=request.getParameter("add");
       out.print(""+address);
       city=request.getParameter("city");
       out.print(""+city);
       pincode= request.getParameter("pincode");
       out.print(""+pincode);
       state=request.getParameter("state");
       out.print(""+state);
      gender=request.getParameter("gender");
       out.print(""+gender);
       contactno=request.getParameter("cno");
       out.print(""+contactno);
       emailid=request.getParameter("eid");
       out.print(""+emailid);
  try { 
               Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
              con=DriverManager.getConnection("Jdbc:Odbc:LC");
          st=con.createStatement(rs.TYPE_SCROLL_SENSITIVE,rs.CONCUR_UPDATABLE);
        // ret=st.executeUpdate("update Stud_Master set Sname='rathore',Name='santosh',Lname='rekha',Address='mahaveer nager',City='sirohi',Pincode=123456,State='raj',Birthdate='03/05/2010',Gender='Female',Email_id='a@gmail.com' where Stud_id=1") ;
        
          //ret=st.executeUpdate("update Stud_Master set SName='"+surname+"',Name='"+name+"',LName='"+lastname+"',Address='"+address+"',City='"+city+"',Pincode="+pincode+",State='"+state+"',Gender='"+gender+"',ContactNo='"+contactno+"',Email_id='"+emailid+"' where Login_id="+uid+"");
          ret= st.executeUpdate("update Stud_Master set SName='"+surname+"',Name='"+name+"',LName='"+lastname+"',Address='"+address+"',City='"+city+"',Pincode="+pincode+",State='"+state+"',Gender='"+gender+"', ContactNo='"+contactno+"',Email_id='"+emailid+"' where Login_id="+uid+"");
       //  RequestDispatcher rd=request.getRequestDispatcher("welcome.jsp");
        //  rd.forward(request, response);
              } catch (Exception e) {
               
             out.print("Error in Update"+e);
            
           }  
 if(ret!=0)
            out.println("<script>alert('row is updated...');</script>");                                  
        else
            out.println("<script>alert('row is not updated...');</script>");      
        }  
     try
     {
           Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
              con=DriverManager.getConnection("Jdbc:Odbc:LC");
        st=con.createStatement(rs.TYPE_SCROLL_SENSITIVE,rs.CONCUR_UPDATABLE);
      rs=st.executeQuery("select * from Stud_Master where  Login_id="+uid+"");
      rs.first();

         //   session.setAttribute("uid", uid);      
       
       }
       
    catch(Exception e){
  out.print("Error<br>"+e);
 
              }    
      
                  
   %>
   
    
    
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
</head>

<body background="images/backg.jpg">
    <form action="Change_profile.jsp" method="get">
<table width="80%" height="307%"  border="0" align="center"  bgcolor="#FFFFFF">
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
    <td height="35" colspan="2"> <table width="80%" align="center" height="9%" >
     <tr> 
            <td width="16%" height="47" align="center" background="images/MButton.jpg"><div id="menu" class="font1"><a href="#" >Welcome</a></div></td>
            <td width="16%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="Subselection.jsp" >Start Exam</a></div></td>
            <td width="16%" height="47" align="center"  background="images/MButton.jpg"><div id="menu" class="font1"><a href="log.jsp" >Check Result</a></div></td>
            <td width="16%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="setgoal.jsp" >Set Goal</a></div></td>
            <td width="16%" align="center" height="47" background="images/MButton.jpg"><div id="menu" class="font1"><a href="logout.jsp" >Log Out</a></div></td>
          </tr>
    </table></td>
  </tr>
 
  <tr>
      <td height="170" colspan="2" class="a1">
       <table width="99%" border="0" height="71%">
           <tr>
               <td height="100%" width="20%">
           <divp>
                                   </divp>
                </td>
	
            <td height="25%" width="28%" class="wel">&nbsp;&nbsp;Welcome,</td>
                  
            <td height="25%" width="40%" class="wel"> &nbsp;   &nbsp; &nbsp; bjbjb 
                
            </td>
                  
          </tr>
          <tr>
              <td colspan="3">&nbsp;</td>
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
    <td  width="20%" height="737">
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
                             <a href="ChangePassWord.jsp" title="Change Password" style="background-image:url(cp-files/btfmfir.png);width:290px;height:41px;display:block;"><br/></a></td>
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
    <table width="98%" height="663" align="center">
      <tr>
        <th height="657" scope="row" align="center">
  <font color="#000099" size="+3" face="Comic Sans MS">UPDATE PROFILE </font>
          
        
        <table width="80%" height="650" border="1">
            
          <tr>
            
            
             <td width="88"><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>SurName </label>
              </font></td>
            <td width="224" align="left"><font size="4" face="Comic Sans MS"> 
                    <%
               out.print( "<input name='surname' type='text' value='"+rs.getString(4)+"'>");
               
                    %>&nbsp;
              </font></td>
    </tr>
         
            <tr> 
            <td> <font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>User Name </label>
              </font></td>
            <td width="224" align="left"><font size="4" face="Comic Sans MS"> 
               <%
         out.print(" <input type='text' name='name' value='"+rs.getString(5)+"'>");
             
                 %>&nbsp;
              </font></td>
            </tr>
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>Last Name </label>
              </font></td>
            <td width="224" align="left"><font size="4" face="Comic Sans MS"> 
             
                    <% 
                    out.print(" <input name='lname' type='text' value='"+rs.getString(6)+"'>");
                    %>&nbsp;
              </font> </td>
           </tr>
          
          
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>Address </label>
              </font></td>
            <td  width="224"align="left"><font size="4" face="Comic Sans MS">
                    <textarea name="add">
                    <%
               out.print(""+rs.getString(7));
               
                    %> 
                    </textarea> &nbsp;
              
              </font></td>
          </tr>
                    <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>City </label>
              </font></td>
                 <td width="222" align="left"><font size="4" face="Comic Sans MS"> 
                <select name="city">
                  <option>-Select City-</option>
                  <option>Jodhpur</option>
                  <option>Ahmedabad</option>
                </select>
              </div>
              </font></td>
          </tr>

            
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>PinCode </label>
              </font></td>
            <td width="224"align="left"><font size="4" face="Comic Sans MS"> 
                    <%  out.print("<input type='text' name='pincode' value="+rs.getString(9)+">");
            
                  %>
             </font></td>
          </tr>
                          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>State </label>
              </font></td>
                 <td  width="222" align="left"><font size="4" face="Comic Sans MS"> 
                  <select name="state">
                  <option>-Select State-</option>
                  <option>Rajasthan</option>
                  <option>Gujarat</option>
                </select>
              </div>
              </font></td>
          </tr>
          
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>Gender</label>
              </font></td>
            <td width="224"align="left"><p> <font size="4" face="Comic Sans MS"> 
                <%
         if(rs.getString(10).equals("Male"))
                         {
         out.print("<input type='radio' name='gender'checked  value='Male' />Male<input type='radio' value='Female' name='gender' />Female&nbsp;</td>");
         }else
                         {
         out.print("<input type='radio' name='gender' value='Male' />Male<input type='radio' value='Female' checked name='gender' />Female&nbsp;</td>");
         }
             
         %>
        &nbsp; &nbsp; &nbsp; &nbsp;
                <br>
                </font></p></td>
          </tr>
          
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>Contact No</label>
              </font></td>
            <td width="224"align="left"><font size="4" face="Comic Sans MS"> 
                    
                    <%  out.print("<input type='text' name='cno' value="+rs.getString(13)+">");
            
                  %>
             
              </font></td>
          </tr>
          <tr> 
            <td><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <label>Email ID </label>
              </font></td>
            <td width="224"align="left"><font size="4" face="Comic Sans MS"> 
                    <%  out.print("<input type='text' name='eid' value="+rs.getString(14)+">");
            
                  %>
              
              </font></td>
          </tr>
                 
          
          
          <tr> 
            <td align="right"><font color="#0099CC" size="4" face="Comic Sans MS"> 
              <input type="submit" name="update" value="Update">
              </font></td>
            <td align="left"><font face="Comic Sans MS"> 
              <input type="reset" name="submit2" value="Reset" >
              </font></td>
          </tr>
            
          </tr>
        </table>
      </tr>
    </table>
    &nbsp;</td></tr>
  <tr><td height="61" colspan="2" background="images/img01.jpg"></td></tr>
</table>
    
<div class="bb" > 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
                  </form>
</body>
</html>
