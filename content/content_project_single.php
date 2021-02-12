<div class="col-md-8">
	<?php $images = explode(';',$project[0]['images']); ?>
	<section class="content-area brightText" style="padding:0px;" data-btmspace="0" data-bg="images/content/testimonials-bg.jpg">
		<div class="flexslider std-slider center-controls" data-animation="fade" data-loop="true" data-animspeed="600" data-dircontrols="true" data-controls="true">
		  <ul class="slides">
			<?php foreach($images as $img) { ?>
				<li><img style="margin:0 auto;" alt="<?php $project[0]['titel'] ?>" src="images/projects/<?php echo $img ?>"/></li>
			<?php } ?>
		  </ul>
		</div>
	</section>
</div>
<div class="col-md-4">
	<dl>
	  <dt>Datum</dt>
	  <dd><?php echo date("F j Y",strtotime($project[0]['date']));?></dd>
	  <dt>Titel</dt>
	  <dd><?php echo $project[0]['titel']; ?></dd>
	  <dt>Categorie</dt>
	  <dd><a style="color:#f7931d;" href="<?php echo $cat[0]['link']?>"><?php echo ucfirst($cat[0]['name']); ?></a></dd>
	</dl>
	<p><?php echo $project[0]['description']; ?></p>
	<br>
	<a href="onze-digitale-referenties" title="Bekijk al onze referenties" class="btn btn-default">Bekijk al onze referenties</a>
</div>