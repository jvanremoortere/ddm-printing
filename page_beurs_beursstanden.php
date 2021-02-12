<?php 
	// seo
	$seo_file = 'seo/beursstanden.php';
	// vars
	$page_breadcrumbs = array(array('Beurs & Banners','modulaire-beursstanden-regio-waasland'),array('Modulaire Beursstanden'));
	$page_titel = 'Modulaire Beursstanden';
	$menu_titel = 'beursstanden';
	$content_file = 'content_service_beursstanden.php';
	$menu_file = 'menu_beurs_banners.php';
	$active_submenu = 'beursstanden';
	$active_menu = 'beurs';
	$related_projects_category = 'beursstanden';
	$content_slider_images = array('images/content/content_pages_slider/beursstanden/1.jpg','images/content/content_pages_slider/beursstanden/2.jpg','images/content/content_pages_slider/beursstanden/3.jpg','images/content/content_pages_slider/beursstanden/4.jpg');
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