<?php 
	// seo
	$seo_file = 'seo/voertuigen.php';
	// vars
	$page_breadcrumbs = array(array('Belettering','belettering-reclameborden-signalisatie'),array('Voertuigen'));
	$page_titel = 'Voertuigen';
	$menu_titel = 'Belettering';
	$content_file = 'content_service_voertuigen.php';
	$menu_file = 'menu_belettering.php';
	$active_submenu = 'voertuigen';
	$active_menu = 'belettering';
	$related_projects_category = 'voertuigen';
	$content_slider_images = array('images/content/content_pages_slider/voertuigen/1.jpg','images/content/content_pages_slider/voertuigen/4.jpg','images/content/content_pages_slider/voertuigen/3.jpg','images/content/content_pages_slider/voertuigen/2.jpg');
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