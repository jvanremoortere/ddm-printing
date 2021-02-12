<?php 
	if(!isset($page_breadcrumbs )) $page_breadcrumbs  = array();
?>
<header class="main-header clearfix">
  <div class="container">
    <h2 class="page-title pull-left"><?php echo $page_titel; ?></h2>
    <ol class="breadcrumb pull-right">
      <li><a href="#">Home</a></li>
	  <?php foreach($page_breadcrumbs as $page_breadcrumb) {?>
		<li>
			<?php if(sizeof($page_breadcrumb) > 1) echo '<a href="' . $page_breadcrumb[1] . '" >';  ?>
			<?php echo $page_breadcrumb[0]; ?>
			<?php if(sizeof($page_breadcrumb) > 1) echo '</a>';  ?>
		</li>
	  <?php } ?>
    </ol>
  </div>
</header>