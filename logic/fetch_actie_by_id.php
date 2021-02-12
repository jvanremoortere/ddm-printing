<?php 
	include 'credentials.php';
	// data
	$actiesingle = array();
	// fetch acties
	$q = "SELECT * FROM acties WHERE id = " . $id . " ORDER BY id DESC LIMIT 1";
	$q = mysql_query($q);
	//
	while($actie = mysql_fetch_array($q)) { 
		// push project in projects array
		array_push($actiesingle, $actie);
	}
?>