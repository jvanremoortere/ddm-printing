<?php 
	// seo
	$seo_file = 'seo/etalages.php';
	// vars
	$page_breadcrumbs = array(array('Belettering','belettering-reclameborden-signalisatie'),array('Etalages'));
	$page_titel = 'Etalage bestickering';
	$menu_titel = 'Belettering';
	$content_file = 'content_service_etalages.php';
	$menu_file = 'menu_belettering.php';
	$active_submenu = 'etalages';
	$active_menu = 'belettering';
	$related_projects_category = 'etalages';
	$content_slider_images = array('images/content/content_pages_slider/etalages/1.jpg','images/content/content_pages_slider/etalages/3.jpg','images/content/content_pages_slider/etalages/2.jpg');
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