<?php
	require_once('templates/top.php');

	if($_SESSION ['id_users_position']){
		$query="SELECT * FROM $tbl_users WHERE id=".$_SESSION['id_users_position'];
		$cat=mysql_query($query);
	if(!$cat){
		exit($query);
	}
	$tbl_text=mysql_fetch_array($cat);
		echo "<h4>Ваш логин: ".$tbl_text['login']."</h4>";
		echo "<h4>Ваш E-mail: ".$tbl_text['email']."</h4>";
?>
	<div class='cabinet'>
		<a href ='index.php?url=korzina'>Корзина</a>
		<a href ='index.php?url=netzakaz'>Мои заказы</a>
	</div>
<?php
	}
	else{
		echo 'Ошибка входа!';
	}
?>

 

 

