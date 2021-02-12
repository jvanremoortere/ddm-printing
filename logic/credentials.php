<?php 
	$host = "localhost";
	$db = "goeroqu269_ddm";
	$user = "goeroqu269_ddm";
	$pwd = "ZgV0WzLS5";
	// start DB connections
	$link = mysql_connect($host,$user,$pwd);
	@mysql_select_db($db) or die( "Unable to select database");
	mysql_set_charset("utf8");
?>