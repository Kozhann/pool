<?php
	$dblocation='localhost';
	$dbname='pool';
	$dbuser='root';
	$dbpassword='';
	//таблицы 
	$tbl_maintext='maintexts';
	$tbl_catalog='catalogs';
	$tbl_users='users';
	$tbl_sms='sms';
	$tbl_tovar='tovars';
	$tbl_accounts='system_accounts';
	$dbcnx=mysql_connect($dblocation,$dbuser,$dbpassword,$sms);
	if(!$dbcnx){
		exit('no connect to server mysql');
	}
	$dbuse=mysql_select_db($dbname,$dbcnx);
	if(!$dbuse){
		exit('oshibka podklucheniya bazy dannyh');
	}
	@mysql_query('SET NAMES UTF-8');