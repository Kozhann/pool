<?php 
	require_once('templates/top.php'); 
	$query="SELECT*FROM $tbl_catalog WHERE id=".$_GET['id'];
	$cat=mysql_query($query);
	if(!$cat){
		exit($query);
	}
	$category=mysql_fetch_array($cat);
	echo "<h2>".$category['name']."</h2>";
	$query="SELECT*FROM $tbl_tovar WHERE cat_id=".$_GET['id'];
	$tov=mysql_query($query);
	if(!$tov){
		exit($query);
	}
	while($tovar=mysql_fetch_array($tov)){
		if($tovar['pictiresmall']){
			$picture="<a href='#' data=".$tovar['id']." class='picture'>
			<img src='media/images/".$tovar['pictiresmall']."'/></a>";
		}
		else{
			$picture="-";
		}
		
		
		echo"<div class='tovar'>";
		echo $picture;
		echo "<div class='tovar_name'>".$tovar['name']."</div>";
		echo "<div class='tovar_price'>".$tovar['price']."</div>";
		echo"</div>";
	
		
		
	}
	require_once('templates/bottom.php');
 ?>