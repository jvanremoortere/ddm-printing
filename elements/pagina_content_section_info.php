<section class="content-area bg1" style="padding-bottom: 0px;">
  <div class="container">
	<div class="row">
	  <div class="col-md-2">
		<aside class="widget categories-widget">
		  <h3 class="widget-title" style="padding-bottom:8px;"><?php echo $menu_titel; ?></h3>
		  <ul class="nav">
			  <div class="entry-meta"><?php include 'submenus/' . $menu_file; ?></div>
		  </ul>
		</aside><br/><br/>
		<!--<h3 class="widget-title" style="padding-bottom:8px;">Lopende acties</h3>
		<div class="entry-meta">
			<?php 
				//foreach ($acties as $actie){
					// echo '<a href="page_actie_single.php?id=' . $actie['id'] . '" 	title="Lopende actie">' . $actie['titel_link'] . '</a><br/>';
				//}
			?>
		</div><br/><br/>-->
	  </div>
	  <div class="col-md-10">
		<?php include 'content/' . $content_file; ?>
      </div>
	</div>
  </div>
</section>