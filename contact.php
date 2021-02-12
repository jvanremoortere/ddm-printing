<?php 
	// seo
	$seo_file = 'seo/contact.php';
	// vars
	$page_breadcrumbs = array(array('Contacteer ons'));
	$page_titel = 'Contacteer ons';
	$active_menu = 'contact';
	//
	include 'header.php';
	include 'navbar.php'; 
	include 'elements/page_header.php'; 
?>

<section class="content-area bg1">
  <div class="container">
    <header class="page-header text-center">
      <h1 class="page-title">Contacteer ons</h1>
      <h2>Wij horen graag van je</h2>
      <p class="larger">
		Heeft u een vraag of wilt u graag verdere informatie?<br/>
		Contacteer ons <a href="mailto:info@ddm-printing.be">info@ddm-printing.be</a>.
	  </p>
	  <hr/><br/>
    </header>
    <div class="row">
      <div class="col-md-8">
        <div class="contactForm">
          <div class="successMessage alert alert-success alert-dismissable" style="display: none">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Bedankt, jouw contactaanvraag werd verzonden!
            </div>
            <div class="errorMessage alert alert-danger alert-dismissable" style="display: none">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Oeps! Er ging iets mis. Probeer het later opnieuw.
            </div>
		
		<dl>
          <dt>Adres</dt>
          <dd>DDM Digital Printing BVBA</dd>
          <dd>Kleistraat 16a</dd>
          <dd>9190 Stekene</dd>
          <dt>Overige gegegevens</dt>
		  <dd>BTW BE 0541 852 094</dd>
		  <dd><a class="readMore" href="vw.pdf" target="_blank">Betalingsvoorwaarden</a></dd>
        </dl>

	
          <!--<form class="liveForm" role="form" action="form/send.php" method="post" data-email-subject="Contact Form" data-show-errors="true" data-hide-form="false">
            <fieldset>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Naam <span>(Verplicht)</span></label>
                    <input type="text" required name="field[]" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Email <span>(Verplicht)</span></label>
                    <input type="email" required name="field[]" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Onderwerp</label>
                    <input type="text" name="field[]" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Bericht <span>(Verplicht)</span></label>
                    <textarea name="field[]" required class="form-control" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Verstuur bericht">
            </fieldset>
          </form>-->
        </div>
      </div>
      <div class="col-md-4">
        <dl>
		  <dt>Email</dt>
          <dd><a href="mailto:info@ddm-printing.be">info@ddm-printing.be</a></dd>
          <dt>Telefoon</dt>
		  <dd>03/789.11.82</dd>
         </dl>
      </div>
    </div>
  </div>
</section>
<section class="content-area bg2" data-topspace="0" data-btmspace="0">
  <div class="mapOuter">
    <div class="googleMap" data-location="Kleistraat 16a, 9190 Stekene, Belgium" data-height="410" data-offset="0"></div>
  </div>
</section>

<?php
	include 'footer.php'; 
?>