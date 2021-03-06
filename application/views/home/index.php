<!doctype html>
<html lang="en-US">
	<head>
		<?php $this->load->view('home/_part/head') ?>
	</head>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5ea7f2c869e9320caac7fdf6/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
	<body>
	
		<?php $this->load->view('home/_part/navbar-mobile.php') ?>
		<?php $this->load->view('home/_part/header') ?>
		<div id="wrapper" class="wide-wrap">
			
			<div class="offcanvas-overlay"></div>

				<?=$content?>
			<?php $this->load->view('home/_part/footer') ?>
		</div>
		
        <? $this->load->view('home/_part/modal.php') ?>
		<? $this->load->view('home/_part/js.php') ?>
		
</body>
</html>