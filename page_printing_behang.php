<?php 
	// seo
	$seo_file = 'seo/behang.php';
	// vars
	$page_breadcrumbs = array(array('Digital printing','digitaal-printing-drukwerk'),array('Behang'));
	$page_titel = 'Gepersonaliseerd behangpapier';
	$menu_titel = 'Digital Printing';
	$content_file = 'content_service_behang.php';
	$menu_file = 'menu_printing.php';
	$active_submenu = 'behang';
	$active_menu = 'printing';
	$related_projects_category = 'behang';
	$content_slider_images = array('images/content/content_pages_slider/behang/1.jpg','images/content/content_pages_slider/behang/2.jpg');
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