<?php 
@session_start();
require_once('config/config.php');
require_once('config/class.config.php');
 ?>

<!Doctype html>
<html>
	<head>
		<meta charset ="utf-8">
		<title> pool</title>
		<meta name='discription ' content='/a'>
		<meta name= 'Keywords' content='...'>
		<link type='text/css' rel ='stylesheet' href='media/bootstrap/css/bootstrap.min.css'>
		<link type='text/css' rel ='stylesheet' href='media/css/style.css'>
	</head>
	<body>
	<?if($_GET['url']){
	$class=$_GET['url'];
	}else{
	$class='def';
	}?>
	<div id='header' class=<?=$class?>>
	<div id='logo'>
		<img src='media/img/2.jpg'/>
	</div>
			<div id='headlinks'>
				<?php
				if($_SESSION['id_users_position']){
					?>
						<a href='logout.php'>выход</a>
						<a href='cabinet.php'>кабинет</a>	
				
				<?php	
				}
				else{
				?>
						<a href='login.php'>вход</a>
						<a href='reg.php'>регистрация</a>
				<?php
				}
				?>
			</div>
		</div>
		<div class='topmenu'>
			<a href ='index.php?url=index'>Главная</a>
			<a href ='index.php?url=pop'>Популярные книги</a>
			<a href ='index.php?url=top'>Топ 50 книг</a>
			<a href ='index.php?url=zakaz'>Доставка книг</a>
			<a href ='index.php?url=forum'>Форум</a>
			<a href ='index.php?url=otz'>Отзывы</a>
			<a href ='sms.php'>Обратная связь</a>
			
		</div>
		<div class='col-md-2'>
			Жанры
			<div class='menu'>
            <?php 
				$query="SELECT * FROM $tbl_catalog WHERE showhide='show'";
				$cat=mysql_query($query);
				if(!$cat){
					exit($query);
				}
				if($_SESSION['id_users_position']){
				while($category=mysql_fetch_array($cat)){
					echo "<a href='cat.php?id=".$category['id']
					."'class='".$category['class']."'>"
					.$category['name']."</a>";
				}
				}
            ?>
			</div>
		</div>
		
	</div>
		<div class='col-md-8'>
<script src='/media/js/jquery.min.js'>
</script>
<script>
$(function(){
	$('.topmenu a:eq(2)').bind('mouseover',function(){
	$('#header').css({'background':'url(media/img/4.jpg)'});
	});
	$('.topmenu a:eq(1)').bind('mouseover',function(){
	$('#header').css({'background':'url(media/img/4.jpg)'});
	});
	$('.topmenu a:eq(3)').bind('mouseover',function(){
	$('#header').css({'background':'url(media/img/4.jpg)'});
	});
	$('.topmenu').bind('mouseout',function(){
	$('#header').css({'background':'url(media/img/11.jpg)'});
	});
	
	
});
</script>