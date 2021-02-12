<?php 
	// seo
	$seo_file = 'seo/zandstraalfolie.php';
	// vars
	$page_breadcrumbs = array(array('Belettering','belettering-reclameborden-signalisatie'),array('Zandstraalfolie'));
	$page_titel = 'Zandstraalfolie';
	$menu_titel = 'Belettering';
	$content_file = 'content_service_zandstraalfolie.php';
	$menu_file = 'menu_belettering.php';
	$active_submenu = 'zandstraalfolie';
	$active_menu = 'belettering';
	$related_projects_category = 'zandstraalfolie';
	$content_slider_images = array('images/content/content_pages_slider/zandstraalfolie/1.jpg');
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