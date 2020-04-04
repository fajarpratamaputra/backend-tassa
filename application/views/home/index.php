<!doctype html>
<html lang="en-US">
	<head>
		<?php $this->load->view('home/_part/head') ?>
	</head>
	
	<body>
		<?php $this->load->view('home/_part/navbar-mobile.php') ?>

		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>

            <?php $this->load->view('home/_part/header') ?>

			<?=$content?>

			<?php $this->load->view('home/_part/footer') ?>
		</div>
		
        <? $this->load->view('home/_part/modal.php') ?>
		<? $this->load->view('home/_part/js.php') ?>
</body>
</html>