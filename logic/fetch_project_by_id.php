<?php 
	include 'credentials.php';
	// data
	$project = array();
	// fetch acties
	$q = "SELECT * FROM projects WHERE id = '" . $pid . "' LIMIT 1";
	$q = mysql_query($q);
	//
	while($p = mysql_fetch_array($q)) { 
		// push project in projects array
		array_push($project, $p);
	}
?>