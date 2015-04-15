<?php 
	require_once('templates/top.php'); 
	require_once('utils/utilsotz.php');
	
	echo "<h5>Оставьте пожалуйста свой отзыв.</h5>";
	$name=new field_text('name','Имя',true,$_POST['name']);
	$email=new field_text_email('email','E-mail', true,$_POST['email']);
	$sms=new field_textarea('sms','отзыв',true,$_POST['sms']);
	$form=new form(array('name'=>$name,'sms'=>$sms),'Отправить отзыв','field');
	if($_POST){
		$error=$form->check();
		//запись значений в таблицу
		if(!$error){
		$query="INSERT INTO $tbl_sms VALUES(NULL,
		'{$form->fields['name']->value}',
		'{$form->fields['email']->value}',
		'{$form->fields['sms']->value}',
		NOW(),
		'unblock')";
		$cat=mysql_query($query);
		if(!$cat){
			exit($query);
		}
		
		?>
		 <script>
		  document.location.href='index.php?url=thankyoupage'
		 </script>
		<?php
		
			}	
		if($error){
		foreach($error as $err){
			echo "<span style='color:red'>";
			echo $err;
			echo "</span><br/>";
		}
	}
	}
	$form->print_form();
		require_once('templates/bottom.php');
?>