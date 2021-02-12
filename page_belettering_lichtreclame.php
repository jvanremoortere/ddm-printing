<?php 
	// seo
	$seo_file = 'seo/lichtreclame.php';
	// vars
	$page_breadcrumbs = array(array('Belettering','belettering-reclameborden-signalisatie'),array('Lichtreclame'));
	$page_titel = 'Lichtgevende reclame';
	$menu_titel = 'Belettering';
	$content_file = 'content_service_lichtreclame.php';
	$menu_file = 'menu_belettering.php';
	$active_submenu = 'lichtreclame';
	$active_menu = 'belettering';
	$related_projects_category = 'lichtreclame';
	$content_slider_images = array('images/content/content_pages_slider/lichtreclame/1.jpg');
	//
	include 'header.php';
	include 'navbar.php'; 
	include 'elements/page_header.php'; 
	include 'elements/pagina_content_section.php'; 
	include 'elements/related_projects.php'; 
	include 'elements/services_full.php'; 
	include 'elements/pagina_content_slider.php'; 
	include 'elements/contact_bar.php'; 
	include 'footer.php'; 
?>