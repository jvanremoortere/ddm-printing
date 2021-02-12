<?php if(isset($content_slider_images)){ ?>	
	<section class="content-area brightText" style="padding:0px;" data-btmspace="0" data-bg="images/content/testimonials-bg.jpg">
		<div class="flexslider std-slider center-controls" data-animation="fade" data-loop="true" data-animspeed="600" data-dircontrols="true" data-controls="true">
		  <ul class="slides">
			<?php foreach($content_slider_images as $image) { ?>
				<li><img style="margin:0 auto;" src="<?php echo $image ?>"/></li>
			<?php } ?>
		  </ul>
		</div>
	</section>
<?php } ?>