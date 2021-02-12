<?php 
	// seo
	$seo_file = 'seo/reclameborden.php';
	// vars
	$page_breadcrumbs = array(array('Belettering','belettering-reclameborden-signalisatie'),array('Behang'));
	$page_titel = 'Reclameborden';
	$menu_titel = 'Belettering';
	$content_file = 'content_service_reclameborden.php';
	$menu_file = 'menu_belettering.php';
	$active_submenu = 'reclameborden';
	$active_menu = 'belettering';
	$related_projects_category = 'reclameborden';
	$content_slider_images = array('images/content/content_pages_slider/reclameborden/1.jpg','images/content/content_pages_slider/reclameborden/2.jpg','images/content/content_pages_slider/reclameborden/3.jpg','images/content/content_pages_slider/reclameborden/4.jpg');
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