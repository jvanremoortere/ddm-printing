<?php 
	// include 'credentials.php';
	// data
	$projects = array();
	// fetch acties
	if(isset($exclude_project_id)) {
		$q = "SELECT * FROM projects INNER JOIN categorie ON categorie.id = projects.categorie_id WHERE categorie.name = '" . $related_projects_category . "' AND projects.id != '" . $pid . "' ORDER BY RAND()";
	}else{
		$q = "SELECT * FROM projects INNER JOIN categorie ON categorie.id = projects.categorie_id WHERE categorie.name = '" . $related_projects_category . "' ORDER BY projects.id DESC";
	}
	$q = mysql_query($q);
	while($project = mysql_fetch_array($q)) { 
		array_push($projects, $project);
	}
?>