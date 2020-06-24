<div class="navbar-container">
	<div class="navbar navbar-default  navbar-scroll-fixed" >
		<div class="navbar-default-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12 navbar-default-col">
						<div class="navbar-wrap">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar bar-top"></span>
									<span class="icon-bar bar-middle"></span>
									<span class="icon-bar bar-bottom"></span>
								</button>
								<a class="navbar-search-button search-icon-mobile" href="#">
									<i class="fa fa-search"></i>
								</a>
								<?php 
									if($this->session->userdata('user_id') != null){
										$num = $this->db->where('userid', $this->session->userdata('user_id'))->where('orderid', '')->get('cart')->num_rows();
										if($num > 0) {
											$link = 'beranda/cart';
										}else{
											$link = '';
										}
									}else {
										$num = 0;
										$link = '';
									}
								?>
								<a class="cart-icon-mobile" href="<?=base_url($link)?>">
									<i class="elegant_icon_bag"></i><span><?=$num?></span>
								</a>
								<a class="navbar-brand" href="<?=base_url("beranda/")?>" style="z-index:10">
									<img class="logo" alt="Tassa.id" src="<?=base_url('assets/template/')?>images/logo_tassa.png">
									<img class="logo-fixed" alt="Tassa.id" src="<?=base_url('assets/template/')?>images/logo_tassa.png">
									<img class="logo-mobile" alt="Tassa.id" src="<?=base_url('assets/template/')?>images/logo_tassa.png">
								</a>
							</div>
							<nav class="collapse navbar-collapse primary-navbar-collapse">
							<ul class="nav navbar-nav primary-nav">
								<li class="menu-item-has-children">
									<a href="<?=base_url('beranda/product/all')?>" style="
										padding-left: 1px;
										padding-right: 1px;
										font-size:13px;
									">
										<span class="underline" style="color:#ffffff;">ALL PRODUCTS</span> <span class="caret"></span>
									</a>
								</li>
								<li class="menu-item-has-children">
									<a href="<?=base_url('beranda/product/newin')?>" style="
										padding-left: 1px;
										padding-right: 1px;
										font-size:13px;
									">
										<span class="underline" style="color:#ffffff;">NEW IN</span> <span class="caret"></span>
									</a>
								</li>
								<li class="menu-item-has-children">
									<a href="<?=base_url('beranda/product/moeslimdress')?>" style="
										padding-left: 1px;
										padding-right: 1px;
										font-size:13px;
									">
										<span class="underline" style="color:#ffffff;">MOSLEM DRESS</span> <span class="caret"></span>
									</a>
								</li>
								<li class="menu-item-has-children">
									<a href="<?=base_url('beranda/product/kaftan')?>" style="
										padding-left: 1px;
										padding-right: 1px;
										font-size:13px;
									">
										<span class="underline" style="color:#ffffff;">KAFTAN</span> <span class="caret"></span>
									</a>
								</li>
								<li class="menu-item-has-children">
									<a href="<?=base_url('beranda/product/best')?>" style="
										padding-left: 1px;
										padding-right: 1px;
										font-size:13px;
									">
										<span class="underline" style="color:#ffffff;">BEST SELLER</span> <span class="caret"></span>
									</a>
								</li>
								<li class="menu-item-has-children">
									<a href="<?=base_url('beranda/product/sale')?>" style="
										padding-left: 1px;
										padding-right: 1px;
										font-size:13px;
									">
										<span class="underline" style="color:#ffffff;">SALE</span> <span class="caret"></span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-search-overlay hide">
		<div class="container">
			<div class="header-search-overlay-wrap">
				<form class="searchform">
					<input type="search" class="searchinput" name="s" value="" placeholder="Search..."/>
					<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
				</form>
				<button type="button" class="close">
					<span aria-hidden="true" class="fa fa-times"></span>
					<span class="sr-only">Close</span>
				</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(window).scroll(function() {
	if ($(document).scrollTop() > 50) {
		$('.navbar-header').addClass('background-header');
	} else {
		$('.navbar-header').removeClass('background-header');
	}
	});
</script>

