<?php 
	include 'credentials.php';
	// data
	$cat = array();
	// fetch acties
	$q = "SELECT * FROM categorie WHERE id = '" . $cid . "' LIMIT 1";
	$q = mysql_query($q);
	//
	while($c = mysql_fetch_array($q)) { 
		// push project in projects array
		array_push($cat, $c);
	}
?>