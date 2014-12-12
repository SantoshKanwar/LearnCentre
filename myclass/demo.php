<?php
	
class demo
{
     
     public function __construct()
	 {
	 
	 $con=mysql_connect("localhost","root","");
	if(!$con)
		echo "Not Connected";
mysql_select_db("lc");
	 }
	 function getname($uname)
	{
		$res=mysql_query("select * from user_detail where Login_Name='$uname'");
    
return $res;
	}
	
	 function welcome($uname)
	{
	$res=mysql_query("select * from user_detail where User_Name='$uname'");
	return $res;
	}
	 function feedback($uname)
	{
	$res=mysql_query("select * from user_detail where Login_Name='$uname'");
	return $res;
	}
	 function forpass($uname,$sq,$ans)
	{
	$res=mysql_query("select * from user_detail where User_Name='$uname' and Security_Qid=$sq and Security_Ans='$ans'");
	/*$res=mysql_query("select * from user_detail where Login_Name='$uname' and Security_Ans='$ans'");*/
	
	return $res;
	}
	
    function loginuser($uname,$pass)
	{
	
	  $res=mysql_query("select user_id,User_Name and Password from user_detail where User_Name='$uname' and Password='$pass'");
	  $norow=mysql_num_rows($res);
	  if($norow>=1)
	  {
	   	$row=mysql_fetch_array($res);
	     return $row[0];
	  }
	  else
	     return 0;
	}
	
  

	function insertfdk($uid,$uname,$date,$month,$year,$desc)
	{
		$fid=0;
    $res=mysql_query("select Fdk_Id from feedback_info_detail order by Fdk_Id desc");
    $norow=mysql_num_rows($res);
    if($norow<1)
	   $fid=1;
   else
   {
       $row=mysql_fetch_row($res);
      $fid=$row[0];
      $fid=$fid+1;
   }
	//echo "user id==$uid";
    
	
		$fdate=$year."-".$month."-".$date;
		//echo "   bdate==$bdate";
		//echo "eid==$eid";
		$sql="insert into feedback_info_detail values($fid,$uid,'$uname','$fdate','$desc');";
mysql_query($sql);
     return 1;
	}
	function addCategory($cid,$cname)
	{
	
	$cid=0;
    $res=mysql_query("select cid from category_master order by cid desc");
    $norow=mysql_num_rows($res);
    if($norow<1)
	   $cid=1;
   else
   {
       $row=mysql_fetch_row($res);
      $cid=$row[0];
      $cid=$cid+1;
   }
	
		$sql="insert into category_master values($cid,'$cname');";
mysql_query($sql);
     return 1;
	}
	function updatepho($uname,$pho)
	{
		$res=mysql_query("select user_id from user_detail where User_Name='$uname'");
		$norow=mysql_num_rows($res);
		$row=mysql_fetch_row($res);
		$uid=$row[0];
		
		$arc="./uimage/$uid.jpg";
		$filename=$_FILES['pho']['name'];
		$filetmp=$_FILES['pho']['tmp_name'];
		$pho=$uid.".jpg";

if(!@move_uploaded_file($filetmp,$arc))
     die("not moved");
	return 1;
	}
	
	function insertval($surname,$uname,$eid,$passwd,$filename1,$queid,$ans,$cpasswd)
	{
	$uid=0;
    $res=mysql_query("select user_id from user_detail order by user_id desc");
    $norow=mysql_num_rows($res);
    if($norow<1)
	   $uid=1;
   else
   {
       $row=mysql_fetch_row($res);
      $uid=$row[0];
      $uid=$uid+1;
   }
	echo "user id==$uid";
    
	$arc="./uimage/$uid.jpg";
$filename=$_FILES['pho']['name'];
$filetmp=$_FILES['pho']['tmp_name'];
$pho=$uid.".jpg";

if(!@move_uploaded_file($filetmp,$arc))
     die("not moved");
		//$bdate=$year."-".$month."-".$date;
		//echo "   bdate==$bdate";
		//echo "eid==$eid";*/
		$sql="insert into user_detail values($uid,'$surname','$uname','$eid','$passwd','$pho','$queid','$ans','$cpasswd');";
mysql_query($sql);
     return 1;
	}
	
	
	function changepasswd($uname,$lname,$oldpasswd,$newpasswd,$cpasswd)
	{
		echo "$uname";
		
    $res=mysql_query("select * from user_detail where User_Name='$uname';");
    $norow=mysql_num_rows($res);
	$row=mysql_fetch_row($res);
	
	$password=$row[4];
	if($password==$oldpasswd)
	{
			$sql="update user_detail set Password='$newpasswd',CPassword='$cpasswd' where User_Name='$uname';";
			mysql_query($sql);
			
	}
	else
	{
		echo "<script> alert('Password Changed');</script>";
	}
	
	}
	function get_rs($tb)
	{
		if($tb == "subjects")
			$str="select distinct(category) from question_info";
		else if($tb == "questions")
			$str="select * from question_info where category=".$_GET["category"];
		else if($tb == "exam_info")
			$str="select * from exam_info ORDER BY date_time DESC";
		else if($tb== "result")
			$str="select * from question_info";
		else if($tb == "cat")
			$str="select cid from category_master ORDER BY cid DESC";
		else if($tb == "cat_info")
			$str="select * from category_master WHERE cid=".$_GET['cid'];
		else if($tb == "category_master")
			$str="select * from category_master";
		else if($tb == "ques_info")
			$str="select * from question_info where category=".$_POST["cat"];
		else if($tb == "qid_info")
			$str="select * from question_info where que_id=".$_GET["qid"];
		else if($tb == "qid_info2")
			$str="select * from question_info where que_id=".$_POST["qid"];
		else if($tb == "delete_qid")
			$str="delete from question_info where que_id=".$_GET["qid"];
		$result=mysql_query($str);
		return $result;
	}
	function update_exam_info($uid,$que,$ans)
	{
		$dt=date("y-m-d h:i:s");
		//echo $dt."<br>";
		$result=mysql_query("INSERT INTO exam_info VALUES (null,".$uid.",'".$que."','".$ans."','".$dt."','')");
		
		if($result)
			echo "done";
		else
			die("error : ".mysql_error());
	}
	function add_que()
	{
		$result=mysql_query("INSERT INTO question_info VALUES (null,'".$_POST['que']."','".$_POST['ans1']."','".$_POST['ans2']."','".$_POST['ans3']."','".$_POST['ans4']."','".$_POST['cans']."',".$_POST['category'].",0)");
		
		if($result)
			echo "Question added successfully";
		else
			die("error : ".mysql_error());
	}
	function update_qid($qid)
	{
		$result=mysql_query("update question_info set question='".$_POST['que']."',option1='".$_POST['ans1']."',option2='".$_POST['ans2']."',option3='".$_POST['ans3']."',option4='".$_POST['ans4']."',answer='".$_POST['cans']."',category=".$_POST['category']." WHERE que_id=".$qid.";");
		
		if($result)
			echo "Question updated successfully";
		else
			die("error : ".mysql_error());
	}
}
?>