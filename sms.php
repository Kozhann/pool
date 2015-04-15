<?php 
	require_once('templates/top.php'); 
	require_once('utils/utilssms.php');
	
	echo "<h5>Чтобы связаться с нами, отправьте нам сообщение или свяжитесь с нашим администратором.</h5>";
	$name=new field_text('name','Имя',true,$_POST['name']);
	$email=new field_text_email('email','E-mail', true,$_POST['email']);
	$tema=new field_text('tema','Тема',true,$_POST['tema']);
	$sms=new field_textarea('sms','Сообщение',true,$_POST['sms']);
	$form=new form(array('name'=>$name,'email'=>$email,'tema'=>$tema,'sms'=>$sms),'Отправить сообщение','field');
	if($_POST){
		$error=$form->check();
		//запись значений в таблицу
		if(!$error){
		$query="INSERT INTO $tbl_sms VALUES(NULL,
		'{$form->fields['name']->value}',
		'{$form->fields['email']->value}',
		'{$form->fields['tema']->value}',
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