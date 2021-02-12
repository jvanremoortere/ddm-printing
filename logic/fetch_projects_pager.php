<?php 
	include 'credentials.php';
	// data
	$project_referenties_all = array();
	$perpage = 18;
	if(!isset($_GET['page'])){
		$currentpage = 1;
	} else { $currentpage = $_GET['page']; }
	// page results
	$start = ($currentpage == 1) ? 1 : ($perpage * $currentpage) - $perpage + 1;
	$end = $start + ($perpage-1);
	// fetch acties
	//$q = "SELECT * FROM projects ORDER BY id INNER JOIN categorie ASC LIMIT 8";
	$q = "SELECT * FROM projects INNER JOIN categorie ON categorie.id = projects.categorie_id WHERE projects.in_portfolio = 1 ORDER BY projects.id DESC";
	$q = mysql_query($q);
	//
	while($p = mysql_fetch_array($q)) { 
		// push project in projects array
		array_push($project_referenties_all, $p);
	}
	// count
	$aantal = count($project_referenties_all);
	// aantal
	$project_referenties = array_splice($project_referenties_all,$start - 1,$perpage);
	// get aantal projects
	$paginas = round($aantal / $perpage);
?>