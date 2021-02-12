<?php 
	include 'credentials.php';
	//
	$q = "INSERT INTO projects (categorie_id, titel, description, thumb, images) 
	VALUES ('" . 
		$_POST['categorie_id'] . "', '" . 
		$_POST['titel'] . "', '" . 
		$_POST['description'] . "', '" . 
		$_POST['thumb'] . "', '" . 
		$_POST['img'] . "');";
	//
	//
	var_dump(mysql_query($q));
	// 
	/*
		INSERT INTO `ddm`.`projects` (`id`, `categorie_id`, `titel`, `description`, `thumb`, `images`, `date`, `client`, `in_portfolio`) VALUES (NULL, '19', 'Tessa & Inge gevel vlaggen', 'Tessa & Inge gevel vlaggen', 'vlaggen/1/thumb.jpg', 'vlaggen/1/1.jpg', CURRENT_TIMESTAMP, NULL, '1');
	*/
?>