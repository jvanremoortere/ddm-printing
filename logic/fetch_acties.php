<?php 
	include 'credentials.php';
	// data
	$acties = array();
	// fetch acties
	$q = "SELECT * FROM acties ORDER BY id DESC";
	$q = mysql_query($q);
	//
	while($actie = mysql_fetch_array($q)) { 
		// push project in projects array
		array_push($acties, $actie);
	}
?>