<section class="content-area bg2">
  <div class="container">
    <div id="blog-list" class="clearfix withMasonry">
	   <!-- / blog-item -->
      <article class="blog-item item-bigger format-link" >
        <div class="innerMargin" style="padding-bottom:12px;">
          <h4 class="entry-title">Ontdek onze diensten</h4>
		  <p>
			<div class="entry-meta">
				<a href="digitaal-printing-drukwerk" title="Digital Printing" class="readMore">Printing</a>,
				<a href="belettering-reclameborden-signalisatie" title="Belettering van voertuigen - lichtreclame - gevels en etalages" class="readMore">Belettering</a>,
				<a href="kleding-en-textiel-bedrukking-op-maat" title="Textielbedrukking - sublimatie en flex van textiel" class="readMore">Kleding</a>,
				<a href="modulaire-beursstanden-regio-waasland title="Modulaire beursstanden" class="readMore">Beursstanden</a>,
				<a href="promotie-banners-en-vlaggen" title="Banners voor bedrijven en beurzen" class="readMore">Banners</a>,
				<a href="gepersonaliseerde-gadgets-sleutelhang-usb-stick" title="Gepersonaliseerde gadgets" class="readMore">Gadgets</a>,
				<a href="belettering-reclameborden-signalisatie" title="Reclameborden en signalisatie" class="readMore">reclameborden</a>,
				<a href="contacteer-ddm-digital-printing-waasland" title="Contacteer DDM Printing Waasland" class="readMore">contacteer ons</a>
			</div>
          </p>
        </div>
      </article>
	    
	  <?php 
		$counter = 0;
		foreach($project_referenties as $p){ ?>
		<article class="blog-item item-bigger">
			<div class="blog-thumbnail">
			  <a title="<?php echo $p['titel']; ?>" href="project.php?id=<?php echo $p['0'] ?>"><img src="images/projects/<?php echo $p['thumb'] ?>" alt="<?php echo $p['titel'] ?>"></a>
			</div>
			<div class="innerMargin">
			  <div class="entry-meta">
				<span class="entry-date"><?php echo date("F j Y",strtotime($p['date']));?></span>
				<span class="entry-comments">Categorie : <a href="<?php echo $p['link'] ?>" title="Alle projecten in categorie <?php echo $p['name'] ?>"><?php echo $p['name'] ?></a></span>
			  </div>
			  <h4 class="entry-title"><a title="<?php echo $p['titel']; ?>" href="project.php?id=<?php echo $p['0'] ?>"><?php echo $p['titel'] ?></a></h4>
			  <p><?php echo $p['description'] ?></p>
			  <a title="<?php echo $p['titel']; ?>" href="project.php?id=<?php echo $p['0'] ?>" class="readMore">Ontdek dit project &rarr;</a>
			</div>
		  </article>
		  <?php if($counter == 6 ||$counter == 17){ ?>
			  <!-- / blog-item -->
			  <article class="blog-item item-bigger format-link" >
				<div class="innerMargin">
				  <h4 class="entry-title"><a href="contacteer-ddm-digital-printing-waasland" title="Contacteer DDM digital printing">Contacteer ons hier voor vrijblijvende informatie of offerte.</a></h4>
				  <p>
					Heb je specifieke vragen, of heeft u graag bijkomende informatie nodig? Wij staan je graag bij met het juiste advies...
				  </p>
				  <a href="contacteer-ddm-digital-printing-waasland" title="Contacteer Digital Priting DDM regio Waasland" class="readMore">Neem contact met ons op &rarr;</a>
				</div>
			  </article>
			  <!-- / blog-item -->	
		  <?php } ?>
		  <?php if($counter == 13){ ?>
			<!-- / blog-item -->
			  <article class="blog-item item-bigger">
				<div class="blog-thumbnail">
				  <a href="06-pluto-blog-single.html"><img src="images/content/blog-masonry-post-image-11.jpg" alt=" "></a>
				</div>
				<div class="innerMargin">
				  <h4 class="entry-title"><a href="investeren-nieuwe-technology-en-diensten" title="Innovatieve diensten door investering">Digitale printing met de nieuwste technology</a></h4>
				  <p>
					Bij DDM Digital printing investeren wij steeds in nieuwe technologische ontwikkelingen... Dankzij onze vooruit denkende investeringen kunnen wij steeds de laatste nieuwe services en diensten leveren.
				  </p>
				  <a href="investeren-nieuwe-technology-en-diensten" title="Onze innovatieve diensten" class="readMore">Lees meer &rarr;</a>
				</div>
			  </article>
		  <?php } ?>
	  <?php
		$counter++;
		} ?>  
	</div>
    <!-- / blog-list -->
    <div class="lineSeparatorMasonry clearfix"></div>
    <div class="row navigation-blog-outer">
      <div class="col-md-3 col-xs-6 text-left">
        <a href="page_referenties.php?page=<?php echo $currentpage - 1; ?>" <?php if($currentpage == 1) { echo 'class="pagination_disabled"'; } ?> class="navigation-blog">&#171; Vorige pagina</a>
      </div>
      <div class="col-md-3 col-xs-6 col-md-push-6 text-right">
        <a href="page_referenties.php?page=<?php echo $currentpage + 1 ?>" <?php if($currentpage == $paginas) { echo 'class="pagination_disabled"'; } ?> class="navigation-blog">Volgende pagina &#187;</a>
      </div>
      <div class="clearfix visible-sm visible-xs"></div>
      <div class="col-md-6 col-md-pull-3">
        <ul class="pagination text-center">
			<?php for ($x=1; $x<=$paginas; $x++) { ?>
			  <li <?php if($currentpage == $x) { echo 'class="active"'; } ?> >
				<a href="page_referenties.php?page=<?php echo $x; ?>">
					<?php echo $x; ?> <?php if($currentpage == $x) echo '<span class="sr-only">(current)</span>' ?>
				</a>
			  </li>
			<?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>