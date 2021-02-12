<?php 
	// seo
	$seo_file = 'seo/borduren.php';
	// vars
	$page_breadcrumbs = array(array('Kleding','kleding-en-textiel-bedrukking-op-maat'),array('Borduren'));
	$page_titel = 'Borduren van textiel';
	$menu_titel = 'borduren';
	$content_file = 'content_service_borduren.php';
	$menu_file = 'menu_textiel.php';
	$active_submenu = 'borduren';
	$active_menu = 'kleding';
	$related_projects_category = 'textielbedrukking';
	$content_slider_images = array('images/content/content_pages_slider/borduren/1.jpg','images/content/content_pages_slider/borduren/2.jpg');
	//
	include 'header.php';
	include 'navbar.php'; 
	include 'elements/page_header.php'; 
	include 'elements/pagina_content_section_textiel.php'; 
	include 'elements/related_projects.php'; 
	include 'elements/services_full.php'; 
	include 'elements/pagina_content_slider.php'; 
	include 'elements/contact_bar.php'; 
	include 'footer.php'; 
?>