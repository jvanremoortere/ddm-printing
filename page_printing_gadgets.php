<?php 
	// get gadget query var
	$gadget_content_page = 'content_service_gadgets.php';
	if(isset($_GET['gadget'])) $gadget_content_page = $_GET['gadget'] . '.php';
	// seo
	$seo_file = 'seo/gadgets.php';
	// vars
	$page_breadcrumbs = array(array('Digital printing','digitaal-printing-drukwerk'),array('Gadgets'));
	$page_titel = 'Gepersonaliseerde gadgets';
	$menu_titel = 'Digital Printing';
	$content_file = $gadget_content_page;
	$menu_file = 'menu_printing.php';
	$active_submenu = 'gadgets';
	$active_menu = 'printing';
	$related_projects_category = 'gadgets';
	$content_slider_images = array('images/content/content_pages_slider/gadgets/1.jpg','images/content/content_pages_slider/gadgets/2.jpg');
	//
	include 'header.php';
	include 'navbar.php'; 
	include 'elements/page_header.php'; 
	include 'elements/pagina_content_section_gadgets.php'; 
	include 'elements/related_projects.php'; 
	include 'elements/services_full.php'; 
	include 'elements/pagina_content_slider.php'; 
	include 'elements/contact_bar.php'; 
	include 'footer.php'; 
?>