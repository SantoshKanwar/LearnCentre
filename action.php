<?php
		
	if($_POST['submit_quiz'])
	{
		while(list($index,$val)= each($_POST['que']))
		{
			$ar[]= $_POST['que'][$index];
		}
		$que=implode(',',$ar);
		for($i=0;$i<10;$i++)
		{
			if(isset($_POST['question'.$ar[$i]]))
				$user_ans[]=$_POST['question'.$ar[$i]];
			else
				$user_ans[]="no" ;
	 	}
		$ans=implode(',',$user_ans);
		
		include "myclass/demo.php";
		$obj=new demo();
		
		session_start();
		$uid=$_SESSION["uid"];
		$result=$obj->update_exam_info($uid,$que,$ans);		
		
		
		echo $que."<br>".$ans;
		
		header("location:Selection.php");
	}
	//$obj->close_connect();
?>