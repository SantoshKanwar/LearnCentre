<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php
	include "myclass/demo.php";
	$obj=new demo();
	$rs1=$obj->get_rs("exam_info");
	
	$row=mysql_fetch_array($rs1);
	
	$que_list=$row["que_list"];
	$ans_list=$row["ans_list"];
	$date_time=$row["date_time"];
	
	$que=explode(",",$que_list);
	$ans=explode(",",$ans_list);
	
	//echo $que_list.'<br>'.$ans_list;

	//foreach($que as $q){	echo $q.'<br> ' ;}
	
	$rs2=$obj->get_rs("result");
	$j=0;
	$score=0;
	foreach($que as $i)
	{
			mysql_data_seek($rs2,($i-1));
			if($row=mysql_fetch_array($rs2))
			{
					if($row[7] == 1)		$tb_name="General Knowledge";
					else if($row[7] == 2)	$tb_name="Aptitude";
					else if($row[7] == 3)	$tb_name="English";
					$output[]= ($j+1). '. '.$row['question'].'<br>
						  A. '.htmlspecialchars($row['option1']).'<br> 	 
						  B. '.htmlspecialchars($row['option2']).'<br>	 
						  C. '.htmlspecialchars($row['option3']).'<br>	 
						  D. '.htmlspecialchars($row['option4']).'<br><br>';
					$output[]="Correct Answer : ". $row[6]."<br>";
					$output[]="Your Answer : ". $ans[$j]."<br><br>";
					
					$ou[]=	($j+1). '. '.$row['question'];
					$ou[]=  ' A. '.htmlspecialchars($row['option1']); 	 
					$ou[]=  ' B. '.htmlspecialchars($row['option2']);	 
					$ou[]=	' C. '.htmlspecialchars($row['option3']);	 
					$ou[]=	' D. '.htmlspecialchars($row['option4']);
					$ou[]="Correct Answer : ". $row[6];
					$ou[]="Your Answer : ". $ans[$j];
						  			  
					if($row[6] == $ans[$j])
						$score++;
			}
			$j++;
	}		
	echo "<h2> Exam Result : ".$tb_name."</h2>";
	echo "<h3> Marks : ". $score." / 10 </h3>";
	$top1[]=" Exam Result : ".$tb_name;
	$top1[]=" Marks : ". $score." / 10 ";
	foreach($output as $o)
	{
		echo $o;
	}
	session_start();
	$_SESSION["top"]=$top1;
	$_SESSION["outp"]=$ou;			
?>

<h4>Download the result in pdf format ...</h4>
<form method="post" action="pdf_report.php">
	<input type="submit" name="pdffile" value="Pdf">
</form>
</body>
</html>
