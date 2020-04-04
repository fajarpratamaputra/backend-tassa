<div class="content-container no-padding">
				<div class="container-full">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">

								<?php $this->load->view('home/_part/banner') ?>

								<div class="row home-default-about">
									<div class="col-sm-12">
									<div class="container">
											<div class="row offers">
												
											</div>
										</div>
										<div class="container">
											<div class="row welcome" style="background-image:url(<?=base_url('assets/template/')?>images/slideshow/gambar5.png)">
												<div class="col-sm-12">
													<div class="separator content_element separator_align_center sep_width_10 sep_border_width_2 sep_pos_align_center separator_no_text sep_color_white">
														<span class="sep_holder sep_holder_l">
															<span class="sep_line"></span>
														</span>
														<span class="sep_holder sep_holder_r">
															<span class="sep_line"></span>
														</span>
													</div>
													<div class="content_element">
														<p class="text-center">
															Dengan Bangga menghadirkan pakaian muslim terbaru melalui beragam seni budaya muslim global, 
															dengan memahami setiap tantangan sehari-hari yang dihadapkan pada muslimah global, 
															setiap produk dari tassa di rancang untuk membuat setiap muslimah tampil dengan busana 
															sederhana yang memberikan kesan kelas atas dan tetap praktis digunakan, dengan begitu 
															tassa akan menemani keseharian para muslimah global agar tetap tampil stylish di padatnya 
															aktivitas para muslimah global.
														</p>
													</div>
													<div class="separator content_element separator_align_center sep_width_10 sep_border_width_2 sep_pos_align_center separator_no_text sep_color_white">
														<span class="sep_holder sep_holder_l">
															<span class="sep_line"></span>
														</span>
														<span class="sep_holder sep_holder_r">
															<span class="sep_line"></span>
														</span>
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

								<div class="row">
									<div class="col-sm-12">
										<div class="container">
											<div class="row home-default-products">
												<div class="col-sm-12">
													<h2 class="text-center custom_heading">NEW IN</h2>
													
													<div class="content_element">
														<p class="text-center" style="font-size:14px;">
															Kami hadirkan produk terbaru untuk anda kenakan
														</p>
														
													</div>
													<div class="caroufredsel product-slider" data-scroll-fx="" data-speed="" data-easing="" data-visible-min="1" data-scroll-item="" data-responsive="1" data-infinite="1" data-autoplay="0">
														<div class="caroufredsel-wrap">
															<div class="shop columns-4">
																<ul class="products columns-4" data-columns="4">
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
                                                                                            <img width="300" height="350" src="<?=base_url('assets/backend/products/'. $p->ProductImage)?>" alt="Product-2"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<!-- <div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div> -->
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>"><?=$p->ProductName?></a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">Rp <?=$p->ProductPrice?></span>
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
															<a href="#" class="caroufredsel-prev"></a>
															<a href="#" class="caroufredsel-next"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="container">
											<div class="row home-default-products">
												<div class="col-sm-12">
													<h2 class="text-center custom_heading">BEST SELLER</h2>
													
													<div class="content_element">
														<p class="text-center" style="font-size:14px;">
															Kami hadirkan produk terlaris untuk anda kenakan
														</p>
														
													</div>
													<div class="caroufredsel product-slider" data-scroll-fx="" data-speed="" data-easing="" data-visible-min="1" data-scroll-item="" data-responsive="1" data-infinite="1" data-autoplay="0">
														<div class="caroufredsel-wrap">
															<div class="shop columns-4">
																<ul class="products columns-4" data-columns="4">
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-2.jpg" alt="Product-2"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Morbi sed egestas</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-3.jpg" alt="Product-3"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Creamy Spring Pasta</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-4.jpg" alt="Product-4"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Green Chile Burritos</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;10.75</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-5.jpg" alt="Product-5"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Jalapeno Dressing Salad</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;17.75</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-6.jpg" alt="Product-6"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Pesto Cauliflower</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;15.05</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-7.jpg" alt="Product-7"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Ut quis Aenean</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;10.95</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-9.jpg" alt="Product-9"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Morbi fermentum</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;17.45</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-10.jpg" alt="Product-10"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Mauris egestas</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;14.95</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-11.jpg" alt="Product-11"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Nunc lacus sem</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;10.95</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-12.jpg" alt="Product-12"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Quisque libero sagittis</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;17.50</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-13.jpg" alt="Product-13"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Donec tincidunt justo</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<del><span class="amount">&#36;20.50</span></del> <ins><span class="amount">&#36;19.00</span></ins>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																	<li class="product">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
                                                                                            <img width="300" height="350" src="<?=base_url('assets/template/')?>images/product/product-14.jpg" alt="Product-14"/>
                                                                                        </div>
                                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                                            <div class="yith-wcwl-add-button">
                                                                                                <a href="#" class="add_to_wishlist">
                                                                                                    Add to Wishlist
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																						<div class="shop-loop-quickview">
																							<a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
																						</div>
																					</div>
																				</div>
																				<figcaption>
																					<div class="shop-loop-product-info">
																						<div class="info-title">
																							<h3 class="product_title"><a href="<?=base_url('beranda/details/')?>">Nunc interdum</a></h3>
																						</div>
																						<div class="info-meta">
																							<div class="info-price">
																								<span class="price">
																									<span class="amount">&#36;14.95</span>
																								</span>
																							</div>
																							<div class="loop-add-to-cart">
																								<a href="<?=base_url('beranda/details/')?>">Select options</a>
																							</div>
																						</div>
																					</div>
																				</figcaption>
																			</figure>
																		</div>
																	</li>
																</ul>
															</div>
															<a href="#" class="caroufredsel-prev"></a>
															<a href="#" class="caroufredsel-next"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								
								<div class="row instagram-wrapper">
									<div class="col-sm-12">
										<div class="icon_element icon_element-outer icon_element-align-center">
											
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade shop product-quickview" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
		    	<div class="modal-content">
		    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		    		<div class="modal-body">
		    			<div class="product-quickview-content">
							<div class="row">
								<div class="col-sm-6">
									<div class="single-product-images">
										<div class="single-product-images-slider">
											<img width="800" height="850" src="<?=base_url('assets/template/')?>images/product/product-detail/product-1.jpg" alt="Product-1">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="summary entry-summary">
										<h1 class="product_title entry-title">Cras rhoncus duis viverra</h1>
										<div class="shop-product-rating">
											<div class="star-rating">
												<span style="width:80%"></span>
											</div>
											<a href="#reviews" class="shop-review-link">(<span class="count">1</span> customer review)</a>
										</div>
										<p class="price">
											<span class="amount">$12.00</span>–<span class="amount">$23.00</span>
										</p>
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
															<table class="variations-table">
																<tbody>
																	
																	<tr>
																		<td><label>Size</label></td>
																		<td>
																			<div class="select-option swatch-wrapper selected">
																				<a href="#" title="Extra Large" class="swatch-anchor">
																					<img src="<?=base_url('assets/template/')?>images/sizes/XL.jpg" alt="thumbnail" width="35" height="35"/>
																				</a>
																			</div>
																			<div class="select-option swatch-wrapper">
																				<a href="#" title="Extra Extra Large" class="swatch-anchor">
																					<img src="<?=base_url('assets/template/')?>images/sizes/XXL.jpg" alt="thumbnail" width="35" height="35"/>
																				</a>
																			</div>
																			<div class="select-option swatch-wrapper">
																				<a href="#" title="Medium" class="swatch-anchor">
																					<img src="<?=base_url('assets/template/')?>images/sizes/M.jpg" alt="thumbnail" width="35" height="35"/>
																				</a>
																			</div>
																			<div class="select-option swatch-wrapper">
																				<a href="#" title="Small" class="swatch-anchor">
																					<img src="<?=base_url('assets/template/')?>images/sizes/S.jpg" alt="thumbnail" width="35" height="35"/>
																				</a>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<div class="single_variation_wrap">
													<div class="single_variation">
														<span class="price"><span class="amount">$20.00</span></span>
													</div>
													<div class="variations_button">
														<div class="quantity">
															<input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
														</div>
														<button type="submit" class="button">Add to cart</button>
													</div>
												</div>
											</form>
										</div>
										<div class="yith-wcwl-add-to-wishlist">
											<a href="#" class="add_to_wishlist">
												Add to Wishlist
											</a>
										</div>
										<div class="product_meta">
											<span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>
											<span class="posted_in">Category: <a href="#">Aliquam</a></span>
											<span class="tagged_as">Tags: <a href="#">Men</a>, <a href="#">Women</a></span>
											<span class="posted_in">Brand: <a href="#">Adesso</a>, <a href="#">Carvela</a>.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>