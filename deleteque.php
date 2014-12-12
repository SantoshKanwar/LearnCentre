<?php
	//$_GET['qid'];

	require ("myclass/demo.php");
	$obj=new demo();
	$obj->get_rs("delete_qid");
	header("location:viewque.php");
?>