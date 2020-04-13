	
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
																	<li class="caroufredsel-item">
																		<div class="thumb">
																			<a href="<?=base_url('assets/backend/products/'.$prod->ProductImage)?>" data-rel="magnific-popup-verticalfit" title="Product-detail">
																				<img width="400px" height="450px" src="<?=base_url('assets/backend/products/'.$prod->ProductImage)?>" alt="Product-detail"/>
																			</a>
																		</div>
																	</li>
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
																	<li class="caroufredsel-item selected">
																		<div class="thumb">
																			<a href="#" data-rel="1" title="Product-detail">
																				<img width="100px" height="150px" src="<?=base_url('assets/backend/products/'.$prod->ProductImage)?>" alt="Product-detail"/>
																			</a>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- <div class="col-md-4 col-sm-6 entry-summary">
												<div class="summary">
													<h1 class="product_title entry-title"><?=$prod->ProductName?></h1>
													<p class="price"><span class="amount">Rp <?=$prod->ProductPrice?></span></p>
													<div class="product-actions res-color-attr">
														<form class="cart">
															<div class="single_variation_wrap">
																<div class="variations_button">
																	<div class="quantity">
																		<input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
																	</div>
																	<button type="submit" class="button">Add to cart</button>
																</div>
															</div>
														</form>
													</div>
													<div class="product_meta">
														<span class="posted_in">Category: <a href="#"><?=$prod->CategoryName?></a></span>
													</div>
													<div class="product_meta">
														<span class="posted_in">Stock: <a href="#"><?=$prod->ProductStock?></a></span>
													</div>
													<div class="share-links">
														<div class="share-icons">
															<span class="facebook-share">
																<a href="#" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
															</span>
															<span class="twitter-share">
																<a href="#" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
															</span>
															<span class="google-plus-share">
																<a href="#" title="Share on Google +"><i class="fa fa-google-plus"></i></a>
															</span>
															<span class="linkedin-share">
																<a href="#" title="Share on Linked In"><i class="fa fa-linkedin"></i></a>
															</span>
														</div>
													</div>
												</div> 
											</div> -->
											<div class="col-md-4 col-sm-6 entry-summary">
												<div class="summary">
													<h2 class="product_title entry-title">Cras rhoncus duis viverra</h2>
													<a href="#reviews" class="shop-review-link">customer review</a>
													<div class="shop-product-rating">
														<div class="star-rating">
															<span style="width:80%"></span>
														</div>
														
													</div>
													<br>
													<p class="price"><span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span></p>
													<a href="#reviews" class="shop-review-link">Stok produk sisa : 1</a>
													<hr>
													<div class="product-excerpt">
														<p>
															Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id metus eget nibh imperdiet fermentum non in metus.
														</p>
													</div>
													<div class="product-actions res-color-attr">
														<form class="cart">
															<div class="product-options-outer">
																<div class="variation_form_section">
																	<div class="product-options icons-lg">
																		<div class="col-md-12" style="padding:0px;">
																			<div class="col-md-6 col-sm-12 col-xd-12" style="padding:0px;">
																				<label>Color</label>
																				<br>
																				<div class="select-option swatch-wrapper">
																					<a href="#" title="Green" class="swatch-color green">Green</a>
																				</div>
																				<div class="select-option swatch-wrapper selected">
																					<a href="#" title="Red" class="swatch-color red">Red</a>
																				</div>
																				<div class="select-option swatch-wrapper">
																					<a href="#" title="White" class="swatch-color white">White</a>
																				</div>
																			</div>
																			<div class="col-md-6 col-sm-12 col-xd-12" style="padding:0px;">
																				<label>Size</label>
																				<br>
																				<div class="select-option swatch-wrapper selected">
																					<a href="#" title="Extra Large" class="swatch-anchor">
																						<img src="<?=base_url("assets/template/")?>images/sizes/XL.jpg" alt="thumbnail" width="35" height="35"/>
																					</a>
																				</div>
																				<div class="select-option swatch-wrapper">
																					<a href="#" title="Extra Extra Large" class="swatch-anchor">
																						<img src="<?=base_url("assets/template/")?>images/sizes/XXL.jpg" alt="thumbnail" width="35" height="35"/>
																					</a>
																				</div>
																				<div class="select-option swatch-wrapper">
																					<a href="#" title="Medium" class="swatch-anchor">
																						<img src="<?=base_url("assets/template/")?>images/sizes/M.jpg" alt="thumbnail" width="35" height="35"/>
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="single_variation_wrap" >
																<label>Quantity</label>
																<div class="variations_button" >
																	<div class="quantity" >
																		<input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
																	</div>
																</div>
															</div>
															<div class="col-md-12" style="padding:0px; padding-top:10px;">
																<button style="background-color: #C3A771; border-color:#C3A771; color:#ffffff; font-size:12px;" onclick="window.location.href = 'https://w3docs.com';" class="btn btn-black-outline btn-lg" type="button">
																	Continue to Payment
																</button>
																<button style="background-color: #ffffff; border-color:#C3A771; color:#C3A771; font-size:12px;" onclick="window.location.href = 'https://w3docs.com';" class="btn btn-black-outline btn-lg" type="button">
																	Add to Bag
																</button>
															</div>
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
					</div>
				</div>
			</div>
			
		</div>
		
