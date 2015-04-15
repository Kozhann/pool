<?php
	function enter($name,$pass){
		global $tbl_users;
		$query="SELECT*FROM $tbl_users WHERE login='$name' AND password='$pass' AND blockhunblock='unblock' LIMIT 1";

		$users=mysql_query($query);
		if(!$users){
			exit($query);
		}
		if(mysql_num_rows($users)){
			$log=mysql_fetch_array($users);
			$_SESSION['id_users_position']=$log['id'];
			$query="UPDATE $tbl_users SET lostvisit=NOW() WHERE id=".$log['id'];
			$cat=mysql_query($query);
			if(!$cat){
				exit($query);
			}
			return true;
		}
		else{
			return false;
		}
	}
?>