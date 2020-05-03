<div class="navbar-container">
	<div class="navbar navbar-default  navbar-scroll-fixed">
		<div class="navbar-default-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12 navbar-default-col">
						<div class="navbar-wrap">
							<div class="navbar-header" style="margin:0px;">
								<button type="button" class="navbar-toggle">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar bar-top"></span>
									<span class="icon-bar bar-middle"></span>
									<span class="icon-bar bar-bottom"></span>
								</button>
								<a class="navbar-search-button search-icon-mobile" href="#" style="padding:10px;">
									<i class="fa fa-search"></i>
								</a>
								<a class="cart-icon-mobile" href="#">
									<i class="elegant_icon_bag"></i><span>0</span>
								</a>
								<a class="navbar-brand" href="<?=base_url('./')?>">
									<img class="logo-mobile" alt="The DMCS" src="<?=base_url('assets/template/')?>images/logo_tassa.png">
								</a>
							</div>
							<nav class="collapse navbar-collapse primary-navbar-collapse">
								<ul class="nav navbar-nav primary-nav">
									<a class="navbar-brand" href="<?=base_url('./')?>" style="padding-top:5px;">
										<img class="logo" alt="The DMCS" src="<?=base_url('assets/template/')?>images/logo_tassa.png">
										<img class="logo-fixed" alt="The DMCS" src="<?=base_url('assets/template/')?>images/logo_tassa.png">
									</a>
									<li class="menu-item-has-children">
										<a href="<?=base_url('beranda/product/newin')?>" style="
												padding-left: 5px;
												padding-right: 5px;
											">
											<span class="underline">NEW IN</span> <span class="caret"></span>
										</a>
                                    </li>
                                    <li class="menu-item-has-children">
										<a href="<?=base_url('beranda/product/moeslimdress')?>" style="
												padding-left: 5px;
												padding-right: 5px;
											">
											<span class="underline">MOESLIM DRESS</span> <span class="caret"></span>
										</a>
                                    </li>
                                    <li class="menu-item-has-children">
										<a href="<?=base_url('beranda/product/kaftan')?>" style="
												padding-left: 5px;
												padding-right: 5px;
											">
											<span class="underline">KAFTAN</span> <span class="caret"></span>
										</a>
                                    </li>
                                    <li class="menu-item-has-children">
										<a href="<?=base_url('beranda/product/best')?>" style="
												padding-left: 5px;
												padding-right: 5px;
											">
											<span class="underline">BEST SELLER</span> <span class="caret"></span>
										</a>
                                    </li>
                                    <li class="menu-item-has-children">
										<a href="<?=base_url('beranda/product/sale')?>" style="
												padding-left: 5px;
												padding-right: 25px;
											">
											<span class="underline">SALE</span> <span class="caret"></span>
										</a>
									</li>
									<li class="menu-item-has-children" style="
												padding-left: 45px;
												
											">
										<a class="navbar-search-button" href="#" >
											<i class="fa fa-search"></i>
										</a>
										<div class="search-form-wrap show-popup hide"></div>
									</li>
									<li class="menu-item-has-children">
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
										<a class="minicart-link" href="<?=base_url($link)?>" style="
												padding-left: 5px;
												padding-right: 0px;">
											<span class="minicart-icon">
												<i class="minicart-icon-svg elegant_icon_bag"></i> <span><?=$num?></span>
											</span>
										</a>
										<div class="minicart">
											<div class="minicart-header no-items show">Your shopping bag is empty.</div>
											<div class="minicart-footer">
												<div class="minicart-actions clearfix">
													<a class="button" href="#">
														<span class="text">Go to the shop</span>
													</a>
												</div>
											</div>
										</div>
									</li>
									<?php 
										$login = false;
										if($this->session->userdata('user_id') != null){
											$login = true;
										}
									?>
									<?php if ($login == false) { ?>
										<li class="menu-item-has-children">
											<a data-rel="loginModal" href="#" style="padding: 0">LOGIN</a>
										</li>
										<li class="menu-item-has-children">
											<button style="background-color: #C3A771; border-color:#C3A771; color:#ffffff; font-size:12px;" data-rel="registerModal"  class="btn btn-black-outline btn-lg btn-align-center" type="button">
												SIGN UP
											</button>
										</li>
									<?php } else if ($login == true) { ?>
										<li class="menu-item-has-children">
											<a href="<?=base_url('loginfe/logout')?>" style="padding: 0">LOGOUT</a>
										</li>
										<li class="menu-item-has-children">
											<a href="<?=base_url('beranda/account')?>" style="padding: 0">ACCOUNT</a>
										</li>
									<?php } ?>
									
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
</div>