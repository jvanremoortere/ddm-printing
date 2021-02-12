<?php 
	// seo
	$seo_file = 'seo/immowerfborden.php';
	// vars
	$page_breadcrumbs = array(array('Digital printing','digitaal-printing-drukwerk'),array('Digitaal drukwerk'));
	$page_titel = 'Immo & werfborden';
	$menu_titel = 'Digital Printing';
	$content_file = 'content_service_werf_immo_borden.php';
	$menu_file = 'menu_printing.php';
	$active_submenu = 'werfenimmo';
	$active_menu = 'printing';
	$related_projects_category = 'immowerfborden';
	$content_slider_images = array('images/content/content_pages_slider/drukwerk/3.jpg','images/content/content_pages_slider/drukwerk/2.jpg','images/content/content_pages_slider/drukwerk/1.jpg');

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