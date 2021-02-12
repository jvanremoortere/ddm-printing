<?php 
	// seo
	$seo_file = 'seo/banners.php';
	// vars
	$page_breadcrumbs = array(array('Digital printing','digitaal-printing-drukwerk'),array('Banners'));
	$page_titel = 'Banners & Promotiemateriaal';
	$menu_titel = 'Digital Printing';
	$content_file = 'content_service_banners.php';
	$menu_file = 'menu_beurs_banners.php';
	$active_submenu = 'banners';
	$active_menu = 'beurs';
	$related_projects_category = 'banners';
	$content_slider_images = array('images/content/content_pages_slider/banners/1.jpg','images/content/content_pages_slider/banners/2.jpg','images/content/content_pages_slider/banners/3.jpg');
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