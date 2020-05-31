<body class="shop page-layout-left-sidebar">
		
		<div id="wrapper" class="wide-wrap">
			
			<div class="heading-container heading-resize heading-button">
				<div class="heading-background" style="text-align:center; background-image: url(<?=base_url('assets/template/')?>images/slideshow/green-banner.jpeg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap" style="text-align:center;">
									<div class="page-title" >
									<?php 
										if($this->uri->segment(3) == 'newin') { 
											$title = "New In";
										}else if($this->uri->segment(3) == 'moeslimdress') { 
											$title = "Moeslim Dress";
										}else if($this->uri->segment(3) == 'kaftan') { 
											$title = "Kaftan";
										}else if($this->uri->segment(3) == 'best') { 
											$title = "Best Seller";
										}else if($this->uri->segment(3) == 'sale') { 
											$title = "Sale";
										}else {
											$title = "All Products";
										}
									?>
										<h1><?=$title?></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="shop-toolbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 main-wrap pull-left">
							<div class="view-mode" style="padding-top:10px">
								<!-- <a class="grid-mode active" title="Grid"><i class="fa fa-th"></i></a>
								<a class="list-mode" title="List" href="#"><i class="fa fa-th-list"></i></a> -->
								<p class="shop-result-count">
									Home > New In
								</p>
							</div>
						</div>
						<div class="col-md-9 main-wrap pull-right">
							<div class="view-mode" style="padding-top:10px">
								<!-- <a class="grid-mode active" title="Grid"><i class="fa fa-th"></i></a>
								<a class="list-mode" title="List" href="#"><i class="fa fa-th-list"></i></a> -->
								<p class="shop-result-count">
									Showing 1&ndash;12 of 14 results
								</p>
							</div>
							<form class="shop-ordering clearfix">
								<div class="shop-ordering-select">
									<label class="hide">Sorting:</label>
									<div class="form-flat-select">
										<select name="orderby" class="orderby">
											<option value="menu_order" selected='selected'>Default sorting</option>
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by newness</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
										<i class="fa fa-angle-down"></i>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<div class="shop-loop grid">
									<ul class="products">
									<?php
										$no = 1;
										foreach($prod as $p){
									?>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
																<a href="<?=base_url('beranda/details/'.$p->ProductName.'/'.$p->ProductID.'/White')?>">
																	<img width="200" height="250" src="<?=base_url('assets/backend/products/'. $p->ProductImage)?>" alt="Product-1"/>
																</a>
                                                            </div>
                                                        </div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="<?=base_url('beranda/details/'.$p->ProductName.'/'.$p->ProductID.'/White')?>"><?=$p->ProductName?></a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">Rp <?=$p->ProductPrice?></span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="<?=base_url('beranda/details/'.$p->ProductName.'/'.$p->ProductID.'/White')?>">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
									<?php } ?>
									</ul>
								</div>
								<nav class="shop-pagination product-etc">
									<div class="paginate">
										<div class="paginate_links">
											<span class='page-numbers current'>1</span>
											<a class='page-numbers' href='#'>2</a>
											<a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</nav>
							</div>
						</div>
						
						<div class="col-md-12 main-wrap" style="margin-top:80px;">
							<div class="container">
								<div class="row">
									<p style="text-align:center; font-size:30px; font-weight: 600; letter-spacing: 0.01em;">
										Produk Lainnya
									</p>
								</div>
							</div>
							<div class="main-content">
								<div class="shop-loop grid">
									<ul class="products">
									<?php
										$no = 1;
										foreach($other as $o){
									?>
										<li class="product">
											<div class="product-container">
												<figure>
													<div class="product-wrap">
														<div class="product-images">
															<div class="shop-loop-thumbnail">
                                                                <img width="300" height="350" src="<?=base_url('assets/backend/products/'. $o->ProductImage)?>" alt="<?=$o->ProductName?>"/>
                                                            </div>
                                                            
														</div>
													</div>
													<figcaption>
														<div class="shop-loop-product-info">
															<div class="info-title">
																<h3 class="product_title"><a href="<?=base_url('beranda/details/'.$p->ProductName.'/'.$p->ProductID)?>"><?=$o->ProductName?></a></h3>
															</div>
															<div class="info-meta">
																<div class="info-price">
																	<span class="price">
																		<span class="amount">Rp <?=$o->ProductPrice?></span>
																	</span>
																</div>
																<div class="loop-add-to-cart">
																	<a href="<?=base_url('beranda/details/'.$p->ProductName.'/'.$p->ProductID)?>">Select options</a>
																</div>
															</div>
														</div>
													</figcaption>
												</figure>
											</div>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>
						</div>

						
						
					</div>
					<div class="row home-default-about" style="background:#ffffff;">
									<div class="col-sm-12">
									<div class="container">
											<div class="row offers">
												
											</div>
										</div>
										<div class="container">
											<div class="row welcome" style="background-image:url(<?=base_url('assets/template/')?>images/foot.jpg)">
												<div class="col-sm-12" style="padding-top:25px; padding-bottom:20px">
													<div class="col-sm-5">
														<div class="content_element"style="padding:20px;" >
															<h2 style="color:#ffffff; padding:30px; padding-bottom:1px; letter-spacing: 2px;">Any question ?</h2>
															<h2 style="color:#ffffff; padding:30px; padding-top:1px; letter-spacing: 2px;">Contact us here</h2>
															
														</div>
													</div>
													<div class="col-sm-3" style="float:right;">
														<div class="col-sm-12" style="padding-top:15px; margin-top:10px; margin-bottom:5px; background-color:#ffffff; height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/whatsapp_icon.png")?>" alt="">
															</div>
															<div class="col-sm-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; ">+628 2330 5556 34</h6>
															</div>
															
														</div>
														<div class="col-sm-12" style="padding-top:15px; margin-top:10px; margin-bottom:5px; background-color:#ffffff; height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/line_icon.png")?>" alt="">
															</div>
															<div class="col-md-9 col-sm-9 col-xs-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; ">@tassadoid</h6>
															</div>
															
														</div>
														<div class="col-sm-12" style="padding-top:15px; margin-top:10px; margin-bottom:5px; background-color:#ffffff; height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/instagram_icon.png")?>" alt="">
															</div>
															<div class="col-md-9 col-sm-9 col-xs-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; ">@tassadoid</h6>
															</div>
															
														</div>
														<div class="col-sm-12" style="padding-top:15px; margin-top:10px; margin-bottom:5px; background-color:#ffffff; height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/facebook_icon.png")?>" alt="">
															</div>
															<div class="col-md-9 col-sm-9 col-xs-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; ">tassadoid</h6>
															</div>
															
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="container">
											<div class="row offers">
												
											</div>
										</div>
									</div>
								</div>
				</div>
			</div>
		</div>
		
</body>