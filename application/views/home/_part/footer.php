
<style>
	@media screen and (max-width: 600px) { .footer-web {display:none;} .img-footer {margin-left:30%;} }
	@media screen and (min-width: 600px) { .footer-mobile {display:none;} }	
</style>
			<footer id="footer" class="footer" style="background-color:#222222;">
				<div class="footer-info">
				<div class="container">
					<div class="footer-widget-wrap">
						<div class="row">
						<div class="col-md-12 footer-web" >
							<div class="footer-widget-col col-md-3 col-sm-12 col-xs-12" style="padding:0px 2px margin:0px 5px">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title" style="color:#C3A771"><span>Office</span></h3>
									<ul class="menu">
									 
										<li><?=$setting->office_address?></a></li>
										<li><?=$setting->telepon?></a></li>
										<li><?=$setting->url_web?></a></li>
										
									</ul>
								</div>
							</div>
							
							<div class="footer-widget-col col-md-3 col-sm-12 col-xs-12" style="padding:0px 2px margin:0px 5px">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title" style="color:#C3A771"><span>Information</span></h3>
									<ul class="menu">
									<li><a href="<?=base_url('beranda/information/about')?>">About Us</a></li>
										<li><a href="<?=base_url('beranda/article')?>">Artikel</a></li>
										<li><a href="<?=base_url('beranda/faq/')?>">FAQ</a></li>
										<li><a href="<?=base_url('beranda/information/how')?>">How To Shop</a></li>
										<li><a href="<?=base_url('beranda/information/payment')?>">Payment</a></li>
										<li><a href="<?=base_url('beranda/information/shipping')?>">Shipping</a></li>
										<li><a href="<?=base_url('beranda/information/terms')?>">Terms and Condition</a></li>
									</ul>
								</div>
							</div>

							<div class="footer-widget-col col-md-3 col-sm-12 col-xs-12" style="padding:0px 2px margin:0px 10px">
								<div class="widget widget_text">
								<h3 class="widget-title" style="color:#C3A771"><span>Payment</span></h3>
										<div class="col-md-6 col-sm-5  col-xs-5">
											<div class="textwidget">
												<p class="payment"><img src="<?=base_url('assets/template/')?>images/logo/Bca_logo.png" alt=""></p>
												<p class="payment"><img src="<?=base_url('assets/template/')?>images/logo/mandiri_logo.png" alt=""></p>
												<p class="payment"><img src="<?=base_url('assets/template/')?>images/logo/btn_logo.png" alt=""></p>
											</div>	
										</div>
										<div class="col-md-6 col-sm-5 col-xs-5">
											<div class="textwidget">
												<p class="payment"><img src="<?=base_url('assets/template/')?>images/logo/bni_logo.png" alt=""></p>
												<p class="payment"><img src="<?=base_url('assets/template/')?>images/logo/danamon_logo.png" alt=""></p>
											</div>
										</div>
									
								</div>
							</div>
							
							
							<div class="footer-widget-col col-md-3 col-sm-12 col-xs-12" style="padding:0px 2px margin:0px 10px">
								<h3 class="widget-title" style="color:#C3A771"><span>Translate</span></h3>
								<div class="btn-group" role="group" aria-label="Basic example" style="padding:0px; margin:0px; border:1px solid #C3A771">
									<button type="button" class="col-md-6 btn btn-secondary" style="border:1px solid #C3A771; background-color: #C3A771; color:#ffffff; font-size:12px;">Indonesia</button>
									<button type="button" class="col-md-6 btn btn-secondary" style="border:1px solid #C3A771; background-color: #ffffff; color:#C3A771; font-size:12px;">English</button>
								</div>
							</div>
						</div>
						<div class="offcanvas-wrap footer-mobile">
				
							<nav class="offcanvas-navbar">
								<ul class="offcanvas-nav">
									<li class="menu-item-has-children dropdown">
										<a href="./" class="dropdown-hover">OFFICE <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href=""><?=$setting->office_address?></a></li>
											<li><a href=""><?=$setting->telepon?></a></li>
											<li><a href=""><?=$setting->url_web?></a></li>
										</ul>
									</li>
									<li class="menu-item-has-children dropdown">
										<a href="<?=base_url('beranda/product/newin')?>" class="dropdown-hover">INFORMATION <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="<?=base_url('beranda/article')?>">Article</a></li>
											<li><a href="<?=base_url('beranda/information/terms')?>">Terms and Condition</a></li>
											<li><a href="<?=base_url('beranda/information/about')?>">About Us</a></li>
											<li><a href="<?=base_url('beranda/information/how')?>">How To Shop</a></li>
											<li><a href="<?=base_url('beranda/information/shipping')?>">Shipping</a></li>
											<li><a href="<?=base_url('beranda/information/payment')?>">Payment</a></li>
											<li><a href="<?=base_url('beranda/faq/')?>">FAQ</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children dropdown">
										<a href="<?=base_url('beranda/product/moeslimdress')?>" class="dropdown-hover">PAYMENT<span class="caret"></span></a>
										<ul class="dropdown-menu" style="padding:5px;">
											<div class="col-md-12">
												<div class="textwidget">
													<p class="col-md-12 payment"><img src="<?=base_url('assets/template/')?>images/logo/Bca_logo.png" alt=""></p>
													<p class="col-md-12 payment"><img src="<?=base_url('assets/template/')?>images/logo/mandiri_logo.png" alt=""></p>
													<p class="col-md-12 payment"><img src="<?=base_url('assets/template/')?>images/logo/btn_logo.png" alt=""></p>
													<p class="col-md-12 payment"><img src="<?=base_url('assets/template/')?>images/logo/bni_logo.png" alt=""></p>
													<p class="col-md-12 payment"><img src="<?=base_url('assets/template/')?>images/logo/danamon_logo.png" alt=""></p>
												</div>	
											</div>
										</ul>
									</li>
									
									
									<li class="menu-item-has-children dropdown">
										<a href="<?=base_url('beranda/product/best')?>" class="dropdown-hover">TRANSLATE <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<div class="btn-group" role="group" aria-label="Basic example" style="padding:0px; margin:0px; border:1px solid #C3A771">
												<button type="button" class="col-md-6 btn btn-secondary" style="border:1px solid #C3A771; background-color: #C3A771; color:#ffffff; font-size:12px;">Indonesia</button>
												<button type="button" class="col-md-6 btn btn-secondary" style="border:1px solid #C3A771; background-color: #ffffff; color:#C3A771; font-size:12px;">English</button>
											</div>
										</ul>
									</li>
									
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<hr>
				</div>
					<div class="container">
						<div class="row">
							<div class="col-md-12 ">
								<div class="col-md-5 col-sm-12 col-xs-12 ">
									<div class="footer-info-logo">
										<a href="#"><img class="img-footer" alt="The DMCS" src="<?=base_url('assets/template/')?>images/logo_tassa.png"></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12 text-center" >
									<div class="copyright" style="padding:15px;">Copyright Tassa.id 2020. All Right Reserve</div>	
								</div>
									
							</div>
						</div>
					</div>
				</div>
			</footer>