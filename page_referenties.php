<?php 
	include 'logic/fetch_projects_pager.php';
	// seo
	$seo_file = 'seo/drukwerk.php';
	// vars
	$page_breadcrumbs = array(array('Referenties'));
	$page_titel = 'Onze referenties';
	$menu_titel = 'Enkele referenties';
	$active_menu = 'referenties';
	//
	include 'header.php';
	include 'navbar.php'; 
	include 'elements/page_header.php'; 
	include 'content/content_referenties.php';
	include 'footer.php'; 
?>