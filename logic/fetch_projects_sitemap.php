<?php 
	include 'credentials.php';
	// data
	$sitemapprojects = array();
	$q = "SELECT * FROM projects ORDER BY projects.id DESC";
	$q = mysql_query($q);
	//
	while($p = mysql_fetch_array($q)) { 
		// push project in projects array
		array_push($sitemapprojects, $p);
	}
?>