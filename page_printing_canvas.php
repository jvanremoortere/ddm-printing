<?php 
	// seo
	$seo_file = 'seo/canvas.php';
	// vars
	$page_breadcrumbs = array(array('Digital printing','digitaal-printing-drukwerk'),array('Canvas'));
	$page_titel = 'Canvas bedrukking';
	$menu_titel = 'Digital Printing';
	$content_file = 'content_service_canvas.php';
	$menu_file = 'menu_printing.php';
	$active_submenu = 'canvas';
	$active_menu = 'printing';
	$related_projects_category = 'canvas';
	$content_slider_images = array('images/content/content_pages_slider/canvas/1.jpg','images/content/content_pages_slider/canvas/2.jpg');
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