<?php
	function enter($name,$email,$sms){
		global $tbl_otz;
		$query="SELECT*FROM $tbl_otz WHERE name='$name' AND email='$email' AND sms='$sms' AND blockunblock='unblock' LIMIT 1";

		$sms=mysql_query($query);
		if(!$sms){
			exit($query);
		}
		if(mysql_num_rows($sms)){
			$log=mysql_fetch_array($sms);
			$_SESSION['id_sms_position']=$log['id'];
			$query="UPDATE $tbl_otz SET dateotz=NOW() WHERE id=".$log['id'];
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