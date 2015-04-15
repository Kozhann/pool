<?php 
	if($_GET['url']){
		$file=$_GET['url'];
	}
	else {
		$file='index';
	}
	require_once('templates/top.php'); 
	$query="SELECT*FROM $tbl_maintext WHERE url='$file'";
	$cat=mysql_query($query);
	if(!$cat){
		exit($query);
	}
	$tbl_text=mysql_fetch_array($cat);
	echo "<h2>".$tbl_text['name']."</h2>";
	echo $tbl_text['body'];
	require_once('templates/bottom.php');
 ?>

