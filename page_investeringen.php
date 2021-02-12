<?php 
	// seo
	$seo_file = 'seo/vlaggen.php';
	// vars
	$page_breadcrumbs = array(array('Investeringen'));
	$page_titel = 'Innovatie in technologie';
	$menu_titel = 'Extra informatie';
	$content_file = 'content_investeringen.php';
	$menu_file = 'menu_info.php';
	$active_submenu = 'investeringen';
	$active_menu = 'info';
	$related_projects_category = 'Acties';
	$content_slider_images = array('images/content/content_pages_slider/drukwerk/3.jpg','images/content/content_pages_slider/drukwerk/2.jpg','images/content/content_pages_slider/drukwerk/1.jpg');
	//
	include 'header.php';
	include 'navbar.php'; 
	include 'elements/page_header.php'; 
	include 'elements/pagina_content_section_info.php'; 
	include 'elements/services_full.php'; 
	include 'elements/pagina_content_slider.php'; 
	include 'elements/contact_bar.php'; 
	include 'footer.php'; 
?>