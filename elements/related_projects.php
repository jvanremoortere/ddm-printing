<?php
	include 'logic/fetch_related_projects_by_cat.php';
?>

<?php if(count($projects)){ ?>
	<section class="content-area bg1">
	  <div class="container">
		<header class="page-header text-center">
		  <h1 class="page-title">gerelateerde projecten in <?php echo $related_projects_category; ?></h1>
		</header>
		<div class="flexslider carousel-slider" data-slideshow="false" data-speed="7000" data-animspeed="600" data-loop="true" data-min="1" data-max="3" data-move="1" data-controls="true" data-dircontrols="true">
		  <ul class="slides">
			<?php foreach($projects as $project){ ?>
				<li>
				  <article class="portfolio-item">
					<div class="portfolio-thumbnail">
					  <a title="<?php echo $project['titel']; ?>" href="project.php?id=<?php echo $project['0'] ?>"><img src="images/projects/<?php echo $project['thumb'] ?>" alt="<?php echo $project['titel'] ?>"></a>
					  <a title="<?php echo $project['titel']; ?>" href="project.php?id=<?php echo $project['0'] ?>" class="overlay-img"><span class="overlay-ico"><i class="fa fa-plus"></i></span></a>
					</div>
					<div class="entry-meta">
					  <span class="cat-links"><a title="<?php echo $project['titel']; ?>" href="project.php?id=<?php echo $project['0'] ?>"><?php echo $project['titel']; ?></a></span>
					</div>
				  </article>
				  <!-- / portfolio-item -->
				</li>
			<?php } ?>
			
			<!--<li>
			  <article class="portfolio-item">
				<div class="portfolio-thumbnail">
				  <a href="#"><img src="images/content/works-04.jpg" alt=" "></a>
				  <a href="#" class="overlay-img"><span class="overlay-ico"><i class="fa fa-plus"></i></span></a>
				</div>
				<div class="entry-meta">
				  <span class="cat-links"><a href="#">project name</a></span>
				</div>
			  </article>
			</li>
			<li>
			  <article class="portfolio-item">
				<div class="portfolio-thumbnail">
				  <a href="#"><img src="images/content/works-04.jpg" alt=" "></a>
				  <a href="#" class="overlay-img"><span class="overlay-ico"><i class="fa fa-plus"></i></span></a>
				</div>
				<div class="entry-meta">
				  <span class="cat-links"><a href="#">project name</a></span>
				</div>
			  </article>
			</li>
			<li>
			  <article class="portfolio-item">
				<div class="portfolio-thumbnail">
				  <a href="#"><img src="images/content/works-04.jpg" alt=" "></a>
				  <a href="#" class="overlay-img"><span class="overlay-ico"><i class="fa fa-plus"></i></span></a>
				</div>
				<div class="entry-meta">
				  <span class="cat-links"><a href="#">project name</a></span>
				</div>
			  </article>
			</li>
			<li>
			  <article class="portfolio-item">
				<div class="portfolio-thumbnail">
				  <a href="#"><img src="images/content/works-04.jpg" alt=" "></a>
				  <a href="#" class="overlay-img"><span class="overlay-ico"><i class="fa fa-plus"></i></span></a>
				</div>
				<div class="entry-meta">
				  <span class="cat-links"><a href="#">project name</a></span>
				</div>
			  </article>
			</li>
			<li>
			  <article class="portfolio-item">
				<div class="portfolio-thumbnail">
				  <a href="#"><img src="images/content/works-04.jpg" alt=" "></a>
				  <a href="#" class="overlay-img"><span class="overlay-ico"><i class="fa fa-plus"></i></span></a>
				</div>
				<div class="entry-meta">
				  <span class="cat-links"><a href="#">project name</a></span>
				</div>
			  </article>
			</li>-->
		  </ul>
		</div>
		<div class="text-center">
		  <a href="onze-digitale-referenties" title="Bekijk al onze digitale referenties" class="btn btn-default animated" data-fx="fadeInUp">Bekijk alle referenties</a>
		</div>
	  </div>
	</section>
	<!-- / section -->
<?php } ?>