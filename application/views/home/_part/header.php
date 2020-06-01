<header class="header-container header-type-default header-default-center header-navbar-default header-scroll-resize">
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
									<span class="minicart-icon">
										<i class="minicart-icon-svg elegant_icon_bag"></i> <span><?=$num?></span>
									</span>
								</a>
							</div>
						</div>
						<div class="navbar-search" style="padding: 0 20px;">
							<a class="navbar-search-button" href="#">
								<i class="fa fa-search"></i>
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
										<a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Login</a>
									</li>
								</ul>
							</div>
						<?php } else if ($login == true) { ?>
							<div class="user-login">
								<ul class="nav top-nav">
									<li class="menu-item">
										<a href="<?=base_url('loginfe/logout')?>"><i class="fa fa-sign-out"></i> Logout</a>
									</li>
								</ul>
							</div>
							<div class="user-login">
								<ul class="nav top-nav">
									<li class="menu-item">
										<a href="<?=base_url('beranda/account')?>"><i class="fa fa-user"></i> Account</a>
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