<section class="content-area bg1" style="padding-bottom: 0px;">
  <div class="container">
    <div class="row">
	  <div class="col-md-2">
        <aside class="widget categories-widget">
		  <h3 class="widget-title" style="padding-bottom:8px;"><?php echo $menu_titel; ?></h3>
		  <ul class="nav">
			  <div class="entry-meta"><?php include 'submenus/' . $menu_file; ?></div>
		  </ul>
		</aside><br/>
      </div>
      <div class="col-md-7">
		<?php include 'content/' . $content_file; ?>
      </div>
	  <?php include 'elements/action_section.php' ?>
    </div>
  </div>
</section>