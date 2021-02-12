<?php 
	// include 'credentials.php';
	// data
	$projects_random = array();
	// fetch acties
	$q = "SELECT * FROM projects ORDER BY RAND() LIMIT 10";
	$q = mysql_query($q);
	while($project = mysql_fetch_array($q)) { 
		array_push($projects_random, $project);
	}
?>