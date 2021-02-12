<?php 
	// seo
	$seo_file = 'seo/textielbedrukking.php';
	// vars
	$page_breadcrumbs = array(array('Kleding','kleding-en-textiel-bedrukking-op-maat'),array('Textielbedrukking'));
	$page_titel = 'Textielbedrukking';
	$menu_titel = 'Kleding';
	$content_file = 'content_service_textielbedrukking.php';
	$menu_file = 'menu_textiel.php';
	$active_submenu = 'textielbedrukking';
	$active_menu = 'kleding';
	$related_projects_category = 'textielbedrukking';
	$content_slider_images = array('images/content/content_pages_slider/textielbedrukking/1.jpg','images/content/content_pages_slider/textielbedrukking/2.jpg');
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