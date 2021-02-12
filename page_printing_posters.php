<?php 
	// seo
	$seo_file = 'seo/poster.php';
	// vars
	$page_breadcrumbs = array(array('Digital printing','digitaal-printing-drukwerk'),array('Posters en affiches'));
	$page_titel = 'Affiches en posters';
	$menu_titel = 'Digital Printing';
	$content_file = 'content_service_posters.php';
	$menu_file = 'menu_printing.php';
	$active_submenu = 'posters';
	$active_menu = 'printing';
	$related_projects_category = 'posters';
	//
	include 'header.php';
	include 'navbar.php'; 
	include 'elements/page_header.php'; 
	include 'elements/pagina_content_section.php'; 
	include 'elements/related_projects.php'; 
	include 'elements/services_full.php'; 
	include 'elements/pagina_content_slider.php'; 
	include 'elements/contact_bar_white.php'; 
	include 'footer.php'; 
?>