<?php 
	// seo
	$seo_file = 'seo/borduren.php';
	// vars
	$page_breadcrumbs = array(array('Kleding','kleding-en-textiel-bedrukking-op-maat'),array('Sublimatie & Flex'));
	$page_titel = 'Sublimatie van textiel en kleding';
	$menu_titel = 'borduren';
	$content_file = 'content_service_sublimatie.php';
	$menu_file = 'menu_textiel.php';
	$active_submenu = 'sublimatie';
	$active_menu = 'kleding';
	$related_projects_category = 'textielbedrukking';
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