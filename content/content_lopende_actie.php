<?php 
	// if(!isset($_GET['id']) || !isset($actiesingle)) header('Location: http://www.ddm-printing.be/');
	$id = $_GET['id'];
	include 'logic/fetch_actie_by_id.php';
?>
<h1><?php echo $actiesingle[0]['titel']; ?></h1>
<p style="padding-top:8px;">
	<img src="<?php echo $actiesingle[0]['img']; ?>" style="float:left;padding:0px 25px 25px 8px;" />
	<?php 
		echo $actiesingle[0]['description']; 
	?>
</p>