<?php 
	// seo	
	$seo_file = 'seo/immowerfborden.php';
	// vars
	$page_breadcrumbs = array(array('Digital printing','digitaal-printing-drukwerk'),array('Stickers'));
	$page_titel = 'Diverse stickers';
	$menu_titel = 'Digital Printing';
	$content_file = 'content_service_stickers.php';
	$menu_file = 'menu_printing.php';
	$active_submenu = 'stickers';
	$active_menu = 'printing';
	$related_projects_category = 'stickers';
	$content_slider_images = array('images/content/content_pages_slider/stickers/1.jpg','images/content/content_pages_slider/stickers/2.jpg','images/content/content_pages_slider/stickers/3.jpg');
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