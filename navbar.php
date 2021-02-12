<?php 
	if(!isset($active_menu)) $active_menu = "home";
?>

<!-- navbar -->
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="images/content/logo.png" alt=" "></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown <?php if($active_menu == 'printing') echo "active" ?>">
          <a href="digitaal-printing-drukwerk" title="DDM - Printing | Printing - Belettering - Lichtreclame - Standen - Borduren - Stickers | Waasland - Stekene - St. Niklaas - Oost Vlaanderen" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Printing</a>
          <ul class="dropdown-menu">
            <li><a href="immo-en-werk-borden" title="Immo en werfborden">Immo & Werfborden</a></li>
            <li><a href="drukken-op-pvc-glas-steen-spiegels-aluminium" title="Digital printing en algemene drukwerken">Drukken op alle materialen</a></li>
            <li><a href="digitaal-printing-drukwerk" title="Digital printing en algemene drukwerken">Printing / Drukwerk</a></li>
            <li><a href="bedrukking-canvas-op-maat" title="Gepersonaliseerde bedrukking op diverse canvassen">Canvas</a></li>
            <li><a href="gepersonaliseerd-behang-papier-laten-drukken" title="Gepersonaliseerd behangpapier op maat laten drukken">Behang / Muurprints</a></li>
            <li><a href="poster-en-affiches-stekene" title="Posters en affiches drukken">Posters en affiches</a></li>
            <li><a href="spandoek-bedrukken-op-maat " title="Spandoeken - PVC doek - Mechdoek - Fotoprints op canvas">Spandoeken</a></li>
            <li><a href="gepersonaliseerde-vlaggen-bedrukken" title="Gepersonaliseerde vlaggen laten bedrukken">Vlaggen</a></li>
            <li><a href="stickers-op-maat-bedrukken-en-snijden" title="Stickers op maat laten bedrukken en snijden">Stickers</a></li>
			<li><a href="gepersonaliseerde-gadgets-sleutelhang-usb-stick" title="Gepersonaliseerde gadgets">Gadgets</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($active_menu == 'belettering') echo "active" ?>">
          <a href="belettering-reclameborden-signalisatie" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Belettering</a>
          <ul class="dropdown-menu">
             <li><a href="belettering-reclameborden-signalisatie" title="Belettering van reclameborden en signalisatie">Reclameborden</a></li>
             <li><a href="belettering-wagen-folies-signalisatie-carwrapping" title="Belettering en signalisatie van voertuigen">Voertuigen</a></li>
             <li><a href="lichtreclame-gevelsignalisatie-lichtbakken-lichtgevende-reclame" title="Lichtreclame, reclamepanelen en lichtgevende reclame">Lichtreclame</a></li>
             <li><a href="zandstraalfolie-raamfolie-regio-waasland" title="Zandstraalfolie en raamfolies">Zandstraalfolie</a></li>
             <li><a href="etalages-raamstickers-gevel-reclame-regio-waasland" title="Full-color etalage beplakking - bestickering etalages">Etalages</a></li>
             <li><a href="geveldoeken-versiering-gevels-regio-waasland" title="Gevel banners - Gevel decoratie">Gevels</a></li>
             <li><a href="infoborden-reclamezuilen-bedrijfsplakkaten-regio-waasland" title="Infoborden - bedrijfsplakkaten - reclamezuilen">Reclame zuilen</a></li>
          </ul>
        </li>
		<li class="dropdown <?php if($active_menu == 'kleding') echo "active" ?>">
          <a href="kleding-en-textiel-bedrukking-op-maat" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Kleding</a>
          <ul class="dropdown-menu">
             <li><a href="kleding-en-textiel-bedrukking-op-maat">Textielbedrukking</a></li>
             <li><a href="borduren-textiel-regio-waasland" title="Borduren van textiel - regio Waasland">Borduren</a></li>
             <li><a href="sublimatie-flex-kleding-en-textiel" title="Sublimatie en Flex voor kleding en textiel">Sublimatie / Flex</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($active_menu == 'beurs') echo "active" ?>">
          <a href="modulaire-beursstanden-regio-waasland" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Beurs & Banners</a>
          <ul class="dropdown-menu">
             <li><a href="modulaire-beursstanden-regio-waasland" title="Modulaire beursstanden">Beursstanden</a></li>
             <li><a href="promotie-banners-en-vlaggen" title="promotie banners en promo materiaal">Banners</a></li>
             <li><a href="roll-up-banner-systemen-beurs" title="Roll-up mobiele banners sytemen">Roll-Up banners</a></li>
             <li><a href="drukbare-gadgets-vlaggen-petjes-promo-items" title="Drukbare gadgets en diverse promotie items">Gadgets</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a style="cursor:pointer;" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Catalogen</a>
          <ul class="dropdown-menu">
             <li><a href="http://www.europeancatalog.eu/" target="_blank">Cataloog Textiel</a></li>
             <li><a href="http://liratex.be/images/documents/MB_2013_EN.pdf" target="_blank">Cataloog Myrtle</a></li>
             <li><a href="http://liratex.be/images/documents/catalogus%20Hanes%202013.pdf" target="_blank">Cataloog Hanes</a></li>
             <li><a href="http://liratex.be/images/documents/Catalogus%20Stedman%202013.pdf" target="_blank">Cataloog Stedman</a></li>
             <li><a href="http://issuu.com/karlowsky/docs/hauptkatalog_2013?e=3819861/2593092" target="_blank">Cataloog Karlowsky</a></li>
             <li><a href="http://www.hummelsport.nl/catalogus.html" target="_blank">Cataloog Hummel</a></li>
             <li><a href="http://www.erima.eu/nl/catalogus/collectie-2013" target="_blank">Cataloog Erima</a></li>
	 		 <li><a href="http://promovement.promogiftshop.com/pms/pms" target="_blank">Online Shop</a></li>
          </ul>
        </li>
		<li class="dropdown <?php if($active_menu == 'info') echo "active" ?>">
          <a href="investeren-nieuwe-technology-en-diensten" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Info</a>
          <ul class="dropdown-menu">
             <li><a href="digital-printing-publiciteit-waasland" title="Over DDM digital printing">Over ons</a></li>
             <li><a title="Innovatie " href="investeren-nieuwe-technology-en-diensten">Innovatieve diensten</a></li>
             <!--<li><a href="onze-promoties-en-lopende-acties" title="Onze promoties en lopende acties">Lopende acties</a></li>-->
          </ul>
        </li>
        <li class="<?php if($active_menu == 'referenties') echo "active" ?>"><a href="onze-digitale-referenties">Referenties</a></li>
        <li class="<?php if($active_menu == 'contact') echo "active" ?>"><a href="contacteer-ddm-digital-printing-waasland">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- / navbar -->