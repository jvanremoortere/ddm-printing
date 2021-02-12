<?php 
	// seo
	$seo_file = 'seo/gevels.php';
	// vars
	$page_breadcrumbs = array(array('Belettering','belettering-reclameborden-signalisatie'),array('Gevels'));
	$page_titel = 'Gevel reclame';
	$menu_titel = 'Belettering';
	$content_file = 'content_service_gevels.php';
	$menu_file = 'menu_belettering.php';
	$active_submenu = 'gevels';
	$active_menu = 'belettering';
	$related_projects_category = 'gevels';
	$content_slider_images = array('images/content/content_pages_slider/gevels/1.jpg','images/content/content_pages_slider/gevels/2.jpg','images/content/content_pages_slider/gevels/3.jpg','images/content/content_pages_slider/gevels/4.jpg');
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