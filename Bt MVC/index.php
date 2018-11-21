<?php include 'header.php';?>

<?php include 'controller/frontend_controller.php' ?>
<div class="content-wrapper">
	<?php
		$xuly = new FrontEndController();
		$xuly->xulyYeucau();
	?>
</div>

<?php  include 'footer.php'; ?>