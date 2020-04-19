<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<?php 
					$login = false;
					if($this->session->userdata('user_id') != null){
						$login = true;
					}
				?>
				<?php if ($login == false) { ?>
					<div class="offcanvas-user clearfix">
						<a class="offcanvas-user-account-link" data-rel="loginModal" href="#">
							<i class="fa fa-user"></i> Login
						</a>
					</div>
				<?php } else if ($login == true) { ?>
					<div class="offcanvas-user clearfix">
						<a class="offcanvas-user-account-link" href="<?=base_url('loginfe/logout')?>">
							<i class="fa fa-user"></i> Logout
						</a>
					</div>
				<?php } ?>
				
				<nav class="offcanvas-navbar">
					<ul class="offcanvas-nav">
						<li class="menu-item-has-children dropdown">
							<a href="./" class="dropdown-hover">Home <span class="caret"></span></a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="<?=base_url('beranda/product/newin')?>" class="dropdown-hover">New In <span class="caret"></span></a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="<?=base_url('beranda/product/moeslimdress')?>" class="dropdown-hover">Moeslim Dress<span class="caret"></span></a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="<?=base_url('beranda/product/kaftan')?>" class="dropdown-hover">Kaftan<span class="caret"></span></a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="<?=base_url('beranda/product/best')?>" class="dropdown-hover">Best Seller <span class="caret"></span></a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="<?=base_url('beranda/product/sale')?>" class="dropdown-hover">Sale <span class="caret"></span></a>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>