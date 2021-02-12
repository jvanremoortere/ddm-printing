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
		<h3 class="widget-title" style="padding-bottom:8px;">Catalogen</h3>
		<div class="entry-meta">
			<a href="http://www.europeancatalog.eu/" target="_blank">Textiel</a>,
			<a href="http://liratex.be/images/documents/MB_2013_EN.pdf" target="_blank">Myrtle</a>,
			<a href="http://liratex.be/images/documents/catalogus%20Hanes%202013.pdf" target="_blank">Hanes</a>,
			<a href="http://liratex.be/images/documents/Catalogus%20Stedman%202013.pdf" target="_blank">Stedman</a>,
			<a href="http://issuu.com/karlowsky/docs/hauptkatalog_2013?e=3819861/2593092" target="_blank">Karlowsky</a>,
			<a href="http://www.hummelsport.nl/catalogus.html" target="_blank">Hummel</a>,
			<a href="http://www.erima.eu/nl/catalogus/collectie-2013" target="_blank">Erima</a>,
		</div><br/><br/>
	  </div>
	  <div class="col-md-7">
		<?php include 'content/' . $content_file; ?>
      </div>
	  <?php include 'elements/action_section.php' ?>

	</div>
  </div>
</section>