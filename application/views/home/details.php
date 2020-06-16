	
	<body class="shop">
		
		<div id="wrapper" class="wide-wrap">
			<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="#" class="home"><span>Home</span></a></span></li>
							<li><span>Shop Detail</span></li>
							<li><span>Detail Product</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="content-container">
				<div class="container-full">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<div class="container">
									<div class="row">
										<div class="col-md-12 no-min-height"></div>
									</div>
								</div>
								<div class="product">
									<div class="container">
										<div class="row summary-container">
											<div class="col-md-6 col-sm-6 entry-image">
												<div class="single-product-images">
													<div class="single-product-images-slider">
														<div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
															<div class="caroufredsel-wrap">
																<ul class="caroufredsel-items">
																<?php
																		foreach($picture as $pic){
																	?>
																	<li class="caroufredsel-item">
																		<div class="thumb">
																			<a href="<?=base_url('assets/backend/products/'.$pic->picture)?>" data-rel="magnific-popup-verticalfit" title="Product-detail">
																				<img width="400px" height="450px" src="<?=base_url('assets/backend/products/'.$pic->picture)?>" alt="Product-detail"/>
																			</a>
																		</div>
																	</li>
																<?php } ?>
																</ul>
																<a href="#" class="caroufredsel-prev"></a>
																<a href="#" class="caroufredsel-next"></a>
															</div>
														</div>
													</div>
													<div class="single-product-thumbnails">
														<div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0">
															<div class="caroufredsel-wrap">
																<ul class="single-product-images-slider-synchronise caroufredsel-items">
																<?php
																		foreach($picture as $pic){
																	?>
																	<li class="caroufredsel-item selected">
																		<div class="thumb">
																			<a href="#" data-rel="1" title="Product-detail">
																				<img width="100px" height="150px" src="<?=base_url('assets/backend/products/'.$pic->picture)?>" alt="Product-detail"/>
																			</a>
																		</div>
																	</li>
																<?php } ?>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php 
												if($this->session->userdata('user_id') == null){ 
											?>
												<h4>Anda harus login sebelum order</h4>
											<?php } ?>
											<div class="col-md-4 col-sm-6 entry-summary">
												<div class="summary">
													<h2 class="product_title entry-title"><?=$prod->ProductName?></h2>
													<a href="#" class="shop-review-link">customer review</a>
													<div class="shop-product-rating">
														<div class="star-rating">
															<span style="width:100%"></span>
														</div>
														
													</div>
													<br>
													<p class="price"><span class="amount">Rp <?=$prod->ProductPrice?></span></p>
													<a href="#reviews" class="shop-review-link">Stok produk sisa : <?=$prod->ProductStock?></a>
													<hr>
													<div class="product-excerpt">
														<p>
															<?=$prod->ProductCartDesc?>
														</p>
													</div>
													<div class="product-actions res-color-attr">
														<form class="cart" action="<?=base_url('beranda/add_to_cart');?>" enctype="multipart/form-data" method="post">
															<div class="product-options-outer">
																<div class="variation_form_section">
																	<div class="product-options icons-lg">
																		<div class="col-md-12" style="padding:0px;">
																			<div class="col-md-6 col-sm-12 col-xd-12" style="padding:0px;">
																				<label>Color</label>
																				<br>
																				<div class="select-option swatch-wrapper <?php if($this->uri->segment(5) == 'White') { echo "selected"; } ?>">
																					<a href="<?=base_url('beranda/details/'.$prod->ProductName.'/'.$prod->ProductID.'/White')?>" title="White" class="swatch-color white">White</a>
																				</div>
																				<div class="select-option swatch-wrapper <?php if($this->uri->segment(5) == 'Gray') { echo "selected"; } ?>">
																					<a href="<?=base_url('beranda/details/'.$prod->ProductName.'/'.$prod->ProductID.'/Gray')?>" title="Gray" class="swatch-color gray">Gray</a>
																				</div>
																			</div>
																			<div class="col-md-6 col-sm-12 col-xd-12" style="padding:0px;">
																				<label>Size</label>
																				<br>
																				<h4>All Size</h4>
																				
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="single_variation_wrap" >
																<label>Quantity</label>
																<div class="variations_button" >
																	<div class="quantity" >
																		<input type="number" id="qty" name="qty" value="1" title="Qty" class="input-text qty text" size="4">
																		<input type="hidden" name="productid" value="<?=$prod->ProductID?>">
																		<input type="hidden" name="productname" value="<?=$prod->ProductName?>">
																		<input type="hidden" name="color" value="<?=$this->uri->segment(5)?>">
																	</div>
																</div>
															</div>
															<br><br><br>
															<div class="col-md-12" style="padding:0px; padding-top:10px;">
																<button name="Submit" value="payment" style="background-color: #C3A771; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg" type="submit">
																	Continue to Payment
																</button>
																<button name="Submit" value="cart" style="background-color: #ffffff; border-color:#C3A771; color:#C3A771; font-size:12px;" class="btn btn-black-outline btn-lg" type="submit">
																	Add to Bag
																</button>
															</div>
															<!-- Modal -->
															
														</form>
													</div>
												</div> 
											</div>
										</div>
									</div>
									<div class="shop-tab-container">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<div class="tabbable shop-tabs">
														<ul class="nav nav-tabs" role="tablist">
															<li class="active">
																<a data-toggle="tab" role="tab" href="#tab-description">Description</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="tab-description">
																<h2>Product Description</h2>
																<p>
																	<?=$prod->ProductCartDesc?>
																</p>
																
															</div>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-sm-12">
												<div class="related products">
													<div class="related-title">
														<h2 style="text-align:center; padding:5px;">Product Lainnya</h2>
													</div>
													<ul class="products columns-4" data-columns="4">
													<?php
														$no = 1;
														foreach($related as $related){
													?>
														<li class="product">
															<div class="product-container">
																<figure>
																	<div class="product-wrap">
																		<div class="product-images">
																			<div class="shop-loop-thumbnail">
                                                                                <img width="300" height="350" src="<?=base_url('assets/backend/products/'.$related->ProductImage)?>" alt="<?=$related->ProductName?>"/>
                                                                            </div>
                                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                                <div class="yith-wcwl-add-button">
                                                                                    <a href="#" class="add_to_wishlist">
                                                                                        Add to Cart
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clear"></div>
																			
																		</div>
																	</div>
																	<figcaption>
																		<div class="shop-loop-product-info">
																			<div class="info-title">
																				<h3 class="product_title"><a href="#"><?=$related->ProductName?></a></h3>
																			</div>
																			<div class="info-meta">
																				<div class="info-price">
																					<span class="price">
																						<span class="amount">Rp <?=$related->ProductPrice?></span>
																					</span>
																				</div>
																				<div class="loop-add-to-cart">
																					<a href="<?=base_url('beranda/details/'.$related->ProductName.'/'.$related->ProductID)?>">Select options</a>
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
													<div class="col-sm-6">
														<div class="content_element"style="padding:20px;" >
															<h1 style="color:#C3A771; font-size:28pt; padding:15px; padding-bottom:1px; letter-spacing: 2px;">Come Join With Us</h1>
															
														</div>
													</div>
													<div class="col-sm-3" style="float:right;">
														<div class="col-sm-12" style="border-width:2px; border-color:#ffffff; border-radius:30px; padding-top:5px; padding-bottom:35px; margin-top:10px; margin-bottom:5px; background-color: rgba(195, 167, 113, 1); height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/whatsapp_icon.png")?>" alt="">
															</div>
															<div class="col-sm-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; color:#ffffff; ">+628 2330 5556 34</h6>
															</div>
															
														</div>
														<div class="col-sm-12" style="border-width:2px; border-color:#ffffff; border-radius:30px; padding-top:5px; padding-bottom:35px; margin-top:10px; margin-bottom:5px; background-color: rgba(195, 167, 113, 1); height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/instagram_icon.png")?>" alt="">
															</div>
															<div class="col-md-9 col-sm-9 col-xs-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; color:#ffffff; ">@tassadoid</h6>
															</div>
															
														</div>
														<div class="col-sm-12" style="border-width:2px; border-color:#ffffff; border-radius:30px; padding-top:5px; padding-bottom:35px; margin-top:10px; margin-bottom:5px; background-color: rgba(195, 167, 113, 1); height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/facebook_icon.png")?>" alt="">
															</div>
															<div class="col-md-9 col-sm-9 col-xs-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; color:#ffffff;">tassadoid</h6>
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
					</div>
				</div>
			</div>
			
		</div>
		
