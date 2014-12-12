<?php
	session_start();
	
	if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']))
	{
		$uid=$_SESSION['user_id'];
		$uname=$_SESSION['user_name'];
		
		echo 'WELCOME : '. $uname;
	}
	else
		header("location:login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script src="js/jquery.min.js" ></script>
<script>
	$(document).ready(function(){
		$('#add_que').hide();
	});
</script>
</head>

<body>

<form method="post">

	<?php
	
	include "connect_db.php";
	
	$db_con=new connection;
	$db_con->connect();
	
	if($result)
	{
		$i=1;
		while($row=mysql_fetch_array($result))
		{
			echo $i++ . ' : ' . $row['question'] . ' <br/>
				 <input type="radio" name="question'.$row['qid'].'" value="a">'.$row['option1'].'</input> <br/>
				 <input type="radio" name="question'.$row['qid'].'" value="b">'.$row['option2'].'</input><br/>
				 <input type="radio" name="question'.$row['qid'].'" value="c">'.$row['option3'].'</input><br/>
				 <input type="radio" name="question'.$row['qid'].'" value="d">'.$row['option4'].'</input><br/><br/>';
		}
	}
	?>
	
	<input type="submit" name="submit" value="SUBMIT"/>
</form>
<br/><br/>
<a href="javascript: void 0" onclick="$('#add_que').slideToggle('slow')">Add new question</a>
<div id="add_que">
<form id="form1" name="form1" method="post" action="">
  
Question :  <textarea name="question" cols="75" rows="3"></textarea> 
<br /><br/>
Option A :  <input name="option1" type="text" size="75" /> 
<br/>
Option B :  <input name="option2" type="text" size="75" />  
<br/>
Option C :  <input name="option3" type="text" size="75" />  
<br/>
Option D :  <input name="option4" type="text" size="75" /> 
<br/><br/>

Answer : <input name="answer" type="text" size="10" />

<br/><br/>
<input name="insert" type="submit" value="ADD" />
<input name="reset" type="reset" value="RESET" />
  
</form>
</div>
<?php
	
	if(isset($_POST['submit']))
	{
		$result=mysql_query("SELECT * FROM tb_questions;",$connection);
		
		if($result)
		{
			if(mysql_num_rows($result)>0)
			{
				$score=0;
				while($row=mysql_fetch_array($result))
				{
					if($_POST['question'.$row['qid']] == $row['answer'])	
						$score++;
				}
				echo 'score : ( '.$score.' / '.mysql_num_rows($result). ' )';
			}	
		}	
		
	}
	if(isset($_POST['insert']))
	{	
		$result=mysql_query("INSERT INTO tb_questions VALUES (NULL,'".$_POST['question']."','".$_POST['option1']."','" .$_POST['option2']."','".$_POST['option3']."','".$_POST['option4']."','".$_POST['answer']."');",$connection);
		
		if(!$result)
			die("error".mysql_query());
		
		if($result)
			echo "question added successfully";
	}
?>
</body>

</html>
