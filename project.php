<?php 
	// get project details
	// redirect with no id
	if(!isset($_GET['id'])) header('Location: http://www.ddm-printing.be');
	$pid = $_GET['id'];
	include 'logic/fetch_project_by_id.php';
	if(count($project) <= 0) header('Location: http://www.ddm-printing.be');
	$cid = $project[0]['categorie_id'];
	include 'logic/fetch_cat_by_id.php';
	$related_projects_category = $cat[0]['name'];
	$exclude_project_id = $pid;
	//
	// vars
	$page_breadcrumbs = array(array('Onze referenties','onze-digitale-referenties'),array($project[0]['titel']));
	$page_titel = $project[0]['titel'];
	//
	include 'header.php';
	include 'navbar.php'; 
	include 'elements/page_header.php'; 
?>
<section class="content-area bg1" style="padding-bottom: 0px;">
	<div class="container"><div class="row"><?php include 'content/content_project_single.php' ?></div></div>
</section><br/><br/>
<hr/>
<?php
	include 'elements/related_projects.php';
	include 'elements/services_full.php'; 
	include 'elements/contact_bar_white.php'; 
	include 'footer.php'; 
?>
