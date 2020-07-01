
		
<?php 
	if($this->session->userdata('user_id') != null){ 
		$id = $this->session->userdata('user_id');
		$this->db->where('UserID',$id);
		$query = $this->db->get('users');
		$row = $query->row();
		$username = $row->UserName;
		
	?>
	<?php if($row->UserFullName == null) { ?>
		<script>
			swal("Selamat Datang <?=$username?>, Silahkan isi Nama Lengkap anda di halaman Account");
		</script>
	<?php } elseif($row->UserPhoto == null) { ?>
		<script>
			swal("Selamat Datang <?=$username?>, Silahkan lengkapi Foto Profil anda di halaman Account");
		</script>
	<?php } elseif($row->UserAddress == null) { ?>
		<script>
			swal("Selamat Datang <?=$username?>, Silahkan isi Alamat anda di halaman Account");
		</script>
	<?php } elseif($row->UserZip == null) { ?>
		<script>
			swal("Selamat Datang <?=$username?>, Silahkan isi Kode Pos Alamat anda di halaman Account");
		</script>
	<?php } else { ?>
		<script>
			swal("Selamat Datang <?=$username?>");
		</script>
	<?php } ?>
<?php } ?>
<div class="content-container no-padding" style="z-index : -1">
	<div class="container-full">
		<div class="row">
			<div class="col-md-12 main-wrap">
				<div class="main-content">
					<?php $this->load->view('home/_part/banner') ?>
					<div class="row home-default-about">
						<div class="col-sm-12">
						<div class="container">
							<div class="row offers"></div>
						</div>
						<?php foreach($quote as $q) { ?>
						<div class="container">
											<div class="row welcome" style="background-image:url(<?=base_url('assets/backend/banner/'.$q->picture_slider)?>)">
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
										<?php } ?>
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
													
													
													<div class="caroufredsel product-slider" data-scroll-fx="" data-speed="" data-easing="" data-visible-min="1" data-scroll-item="" data-responsive="1" data-infinite="1" data-autoplay="0">
														<div class="caroufredsel-wrap" style="z-index:-1;">
															<div class="shop columns-4">
																<div class="width:100%; height:100%; z-index:500; ">
																	<div class="content_element" style="margin-top: 120px; padding:10px; background-color:rgba(0,0,0,0.4); color:#fff;">
																		<p class="text-center" style="font-size:18px; z-index:501; ">
																			Kami hadirkan produk terbaru untuk anda kenakan
																		</p>
																		<div class="slider-buttons" style="text-align:center;">
																			<a href="#" class="btn btn-lg btn-white-outline">Detail</a>
																			<!-- <a href="#" class="btn btn-lg btn-white-outline">Buy Now</a> -->
																		</div>
																	</div>
																</div>
																<ul class="products columns-4"  data-columns="4">
																<?php
																	$no = 1;
																	foreach($prod as $p){
																?>
																	<li class="product" style="z-index:-1;">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
																							<a href="<?=base_url('beranda/details/'.$p->ProductName.'/'.$p->ProductID.'/White')?>">
																								<img width="300" height="350" src="<?=base_url('assets/backend/products/'. $p->ProductImage)?>" alt="Product-2"/>
																							</a>
                                                                                            
                                                                                        </div>
                                                                                        <div class="clear"></div>
																					</div>
																				</div>
																				
																			</figure>
																		</div>
																	</li>
																	<?php } ?>	
																</ul>
															</div>
															<!-- <a href="#" class="caroufredsel-prev"></a>
															<a href="#" class="caroufredsel-next"></a> -->
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
													<div class="caroufredsel product-slider" data-scroll-fx="" data-speed="" data-easing="" data-visible-min="1" data-scroll-item="" data-responsive="1" data-infinite="1" data-autoplay="0">
														<div class="caroufredsel-wrap" style="z-index:-1;">
															<div class="shop columns-4">
															<div class="z-index:500; ">
																	<div class="content_element" style="margin-top: 120px; padding:10px; background-color:rgba(0,0,0,0.4); color:#fff;">
																		<p class="text-center" style="font-size:18px; z-index:501; ">
																			Kami hadirkan produk terbaik untuk anda kenakan
																		</p>
																		<div class="slider-buttons" style="text-align:center;">
																			<a href="#" class="btn btn-lg btn-white-outline">Detail</a>
																			<!-- <a href="#" class="btn btn-lg btn-white-outline">Buy Now</a> -->
																		</div>
																	</div>
																</div>
																<ul class="products columns-4" data-columns="4">
																<?php
																	$no = 1;
																	foreach($prod as $p){
																?>
																	<li class="product" style="z-index:-1;">
																		<div class="product-container">
																			<figure>
																				<div class="product-wrap">
																					<div class="product-images">
																						<div class="shop-loop-thumbnail">
																							<a href="<?=base_url('beranda/details/'.$p->ProductName.'/'.$p->ProductID.'/White')?>">
																								<img width="300" height="350" src="<?=base_url('assets/backend/products/'. $p->ProductImage)?>" alt="Product-2"/>
																							</a>
                                                                                        </div>
                                                                                        <div class="clear"></div>
																					</div>
																				</div>
																				
																			</figure>
																		</div>
																	</li>
																	<?php } ?>	
																</ul>
															</div>
															<!-- <a href="#" class="caroufredsel-prev"></a>
															<a href="#" class="caroufredsel-next"></a> -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row home-default-about">
									<div class="col-sm-12">
									<div class="container">
											<div class="row offers">
												
											</div>
										</div>
										<?php 
											foreach($footer as $foot) {
										?>
										<div class="container">
											<div class="row welcome" style="background-image:url(<?=base_url('assets/backend/banner/'.$foot->picture_slider)?>)">
												<div class="col-sm-12" style="padding-top:25px; padding-bottom:20px">
													<div class="col-sm-6">
														<div class="content_element"style="padding:20px;" >
															<h1 style="color:#fff; font-size:28pt; padding:15px; padding-bottom:1px; letter-spacing: 2px;">Come Join With Us</h1>
															
														</div>
													</div>
													<div class="col-sm-3" style="float:right;">
														<div class="col-sm-12" style="border-width:2px; border-color:#ffffff; border-radius:30px; padding-top:5px; padding-bottom:35px; margin-top:10px; margin-bottom:5px; background-color: rgba(255, 255, 255, 0.2); height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/whatsapp_icon.png")?>" alt="">
															</div>
															<div class="col-sm-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; color:#ffffff; ">+628 1293 9378 12</h6>
															</div>
															
														</div>
														<div class="col-sm-12" style="border-width:2px; border-color:#ffffff; border-radius:30px; padding-top:5px; padding-bottom:35px; margin-top:10px; margin-bottom:5px; background-color: rgba(255, 255, 255, 0.2); height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/instagram_icon.png")?>" alt="">
															</div>
															<div class="col-md-9 col-sm-9 col-xs-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; color:#ffffff; ">tassa.official</h6>
															</div>
															
														</div>
														<div class="col-sm-12" style="border-width:2px; border-color:#ffffff; border-radius:30px; padding-top:5px; padding-bottom:35px; margin-top:10px; margin-bottom:5px; background-color: rgba(255, 255, 255, 0.2); height: 2px;">
															<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin:0px;">
																<img src="<?=base_url("assets/template/images/Icon/facebook_icon.png")?>" alt="">
															</div>
															<div class="col-md-9 col-sm-9 col-xs-9" style="padding: 3px; margin:0px;">
																<h6 style="padding: 0px; padding-top: 5px; margin:0px; color:#ffffff;">tassa.official</h6>
															</div>
															
														</div>
													</div>	
												</div>
											</div>
										</div>
											<?php } ?>
										<div class="container">
											<div class="row offers">
												
											</div>
										</div>
									</div>
								</div>

								
								<!-- <div class="row instagram-wrapper">
									<div class="col-sm-12">
										<div class="icon_element icon_element-outer icon_element-align-center">
											
										</div>
										
									</div>
								</div> -->
								
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