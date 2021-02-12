<h1>Onze lopende acties en promoties</h1>
<p>
	<?php 
		foreach ($acties as $actie){
			echo '<a href="page_actie_single.php?id=' . $actie['id'] . '"><img style="margin:8px;" src="' . $actie['img'] . '" alt="Lopende actie" /></a>';
		}
	?>
</p>