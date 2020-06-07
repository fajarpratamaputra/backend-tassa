<style>
	
</style>
<header class="header-container header-type-default header-default-center header-navbar-default header-scroll-resize" style=" width:100%; position: fixed; z-index : 2">
	<div class="topbar">
		<div class="container topbar-wap">
			<div class="row">
				<div class="col-sm-6 col-left-topbar">
					<div class="left-topbar">
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
						<div class="navbar-minicart navbar-minicart-topbar">
							<div class="navbar-minicart">
								<a class="minicart-link" href="<?=base_url($link)?>">
									<span class="minicart-icon" style="color:#ffffff;">
										<i class="minicart-icon-svg elegant_icon_bag"></i> <span><?=$num?></span>
									</span>
								</a>
							</div>
						</div>
						<div class="navbar-search" style=" padding: 0 20px;">
							<a class="navbar-search-button" href="#">
								<i class="fa fa-search" style="color:#ffffff;"></i>
							</a>
							<div class="search-form-wrap show-popup hide"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-right-topbar">
					<div class="right-topbar">
						
						<?php 
							$login = false;
							if($this->session->userdata('user_id') != null){
								$login = true;
							}
						?>
						<?php if ($login == false) { ?>
							<div class="user-login">
								<ul class="nav top-nav">
									<li class="menu-item">
										<a data-rel="loginModal" style="color:#ffffff;" href="#"><i class="fa fa-user" style="color:#ffffff;"></i> Login</a>
									</li>
								</ul>
							</div>
						<?php } else if ($login == true) { ?>
							<div class="user-login">
								<ul class="nav top-nav">
									<li class="menu-item">
										<a href="<?=base_url('loginfe/logout')?>" style="color:#ffffff;"><i class="fa fa-sign-out" style="color:#ffffff;"></i> Logout</a>
									</li>
								</ul>
							</div>
							<div class="user-login">
								<ul class="nav top-nav">
									<li class="menu-item">
										<a href="<?=base_url('beranda/account')?>" style="color:#ffffff;"><i class="fa fa-user" style="color:#ffffff;"></i> Account</a>
									</li>
								</ul>
							</div>
						<?php } ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('home/_part/navbar') ?>

</header>