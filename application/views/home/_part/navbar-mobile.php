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
						<li class="menu-item-has-children">
							<a href="./">Home</a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?=base_url('beranda/product/newin')?>" >New In </a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?=base_url('beranda/product/moeslimdress')?>" >Moeslim Dress</span></a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?=base_url('beranda/product/kaftan')?>" >Kaftan</span></a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?=base_url('beranda/product/best')?>" >Best Seller </span></a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?=base_url('beranda/product/sale')?>" >Sale </a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?=base_url('beranda/product/all')?>" >All Products </a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?=base_url('beranda/blog')?>" >Blog </a>
						</li>
						<!-- <li class="menu-item-has-children dropdown">
							<a href="<?=base_url('beranda/product/sale')?>" class="dropdown-hover">All Product <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?=base_url('beranda/product/moeslimdress')?>">Moeslim Dress</a></li>
								<li><a href="<?=base_url('beranda/product/moeslimdress')?>">Kaftan</a></li>
							</ul>
						</li> -->
						
					</ul>
				</nav>
			</div>
		</div>