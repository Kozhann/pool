<?php 
	require_once('templates/top.php'); 
	require_once('utils/utils.php');
	$name=new field_text('name','Логин',true,$_POST['name']);
	$pass=new field_password('pass','Пороль',true,$_POST['pass']);
	$form=new form(array('name'=>$name,'pass'=>$pass),'Вход','field');
	$form->print_form();
	if($_POST){
		$error=$form->check();
		if(!$error){
			enter($form->fields['name']->value,
			$form->fields['pass']->value);
?>
<script>
document.location.href='index.php';
</script>
<?php 
		}
	}
		require_once('templates/bottom.php');
?>
