<script type="text/javascript" >
	function preventBack(){window.history.forward();}
		setTimeout("preventBack()", 0);
		window.onunload=function(){null};
	</script>
	<body class="shop">
		
		<div id="wrapper" class="wide-wrap">
			<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="#" class="home" onClick=”history.go(-1);”><span>Back</span></a></span></li>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		
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
											<div class="col-md-12 col-sm-12 entry-summary" style="">
												
												<style>
													.eclipse {
															width: 20px;
															height: 20px;
															background: #C3A771;
															border-radius: 100%;
															text-align:center;
															color:#ffffff;

														}

													.line {
														position: absolute;
														width: 150px;
														height: 0px;
														left: 478px;
														top: 267px;

														opacity: 0.6;
														/* Rev */

														border: 10px dashed #C3A771;
														border-style: solid;

													}

													.bullet {
														width:5%;
														height:5%;
													}

													.bullet2 {
														width:5%;
														height:5%;
													}

													.bullet3 {
														width:5%;
														height:5%;
													}

													.line-address {
														width:40%;
													}

													@media (max-width: 767px) {
														.line-address {
															display:none;
														}

														.bullet {
															width:15%;
															height:15%;
														}

														.bullet2 {
															display:none;
														}

														.bullet3 {
															display:none;
														}
														
													}

												</style>
												<div style="width:100%; padding-left:20%; padding-right:20%;">
														<h3 style="text-align:center;">Detail Order Produk</h3>
														<h5 style="text-align:center; font-style:normal;">Perhatikan ringkasan pesanan anda sebelum melakukan checkout</h5>
														<img class="bullet" src="<?=base_url("assets/template/")?>assets/1.png" alt="">
														<img class="line-address" src="<?=base_url("assets/template/")?>assets/border.png" alt="">
														<img class="bullet2" src="<?=base_url("assets/template/")?>assets/2.png" alt="">
														<img class="line-address" src="<?=base_url("assets/template/")?>assets/border.png" alt="">
														<img class="bullet3" src="<?=base_url("assets/template/")?>assets/3a.png" alt="">
												</div>
												<br>
												<div class="col-md-12">
													<div class="col-md-6" style="margin-bottom:10px;">
														<?php
															$grand = 0;
															foreach($cart as $c){
																$total = $c->qty * $c->ProductPrice; 
																$grand = $grand + $total;
																$grand_total = $grand + 0;
														?>
														<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px; margin-bottom:5px;">
															<div class="col-md-3">
																<img src="<?=base_url("assets/backend/")?>products/file-1585687834.png" alt="">
															</div>
															<div class="col-md-8">
																<h4><?=$c->ProductName?></h4>
																<h6><?=$c->CategoryName?></h6>
																<table class="table shop_table cart">
																	<thead>
																		<tr>
																			<th class="product-price">Color</th>
																			<th class="product-quantity">Size</th>
																			<th class="product-subtotal">Quantity</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr class="cart_item">
																			<td class="product-price">
																				<div class="select-option swatch-wrapper">
																					<?php if($c->color == 'White') { ?>
																						<a href="#" title="<?=$c->color?>" class="swatch-color white"><?=$c->color?></a>
																					<?php } elseif($c->color == 'Gray') {?>
																						<a href="#" title="<?=$c->color?>" class="swatch-color gray"><?=$c->color?></a>
																					<?php } ?>
																				</div>
																			</td>
																			<td class="product-quantity">
																				<h6>All Size</h6>
																			</td>
																			<td class="product-subtotal hidden-xs">
																				<div class="quantity">
																					<h6><?=$c->qty?></h6>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<?php } ?>
													</div>
													<div class="col-md-6" style="margin-bottom:10px;">
														<form action="<?=base_url('beranda/insert_detail_order')?>" enctype="multipart/form-data" method="post">
															<div class="col-md-12" style="margin-bottom:5px;">
																<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																	<div class="col-md-12">
																		<h5 class="col-md-12">ALAMAT PENGIRIMAN</h5>
																		<p class="col-md-6" style="text-align:left">Nama Penerima</p><p class="col-md-6" style="text-align:right"><?=$order->OrderShipName?></p>
																		<p class="col-md-6" style="text-align:left">No Telephone</p><p class="col-md-6" style="text-align:right"><?=$order->OrderPhone?></p>
																		<p class="col-md-6" style="text-align:left">Alamat Rumah</p><p class="col-md-6" style="text-align:right"><?=$order->OrderShipAddress?></p>
																		<p class="col-md-6" style="text-align:left">Kode Pos</p><p class="col-md-6" style="text-align:right"><?=$order->OrderZip?></p>
																		
																	</div>
																</div>
															</div>
															<div class="col-md-12" style="margin-bottom:5px;">
																<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																	<div class="col-md-12">
																		<p class="col-md-6" style="text-align:left">Kode Voucher</p>
																		<div class="col-md-6">
																			<input class="col-md-12" type="text" id="voucher" name="log" class="form-control" value="">
																			<h6 style="font-size: 10px; font-weight: normal;">Masukkan kode voucher untuk dapatkan diskon*</h6>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																	<div class="col-md-12">
																		<h5 class="col-md-12">RINGKASAN HARGA</h5>
																		<p class="col-md-6" style="text-align:left">Produk</p><p class="col-md-6" style="text-align:right"><?="Rp " . number_format($grand,2,',','.')?></p>
																		<p class="col-md-6" style="text-align:left">Diskon</p><p class="col-md-6" style="text-align:right">Rp. 0</p>
																		<p class="col-md-6" style="text-align:left">Total Harga</p><p class="col-md-6" style="text-align:right"><?="Rp " . number_format($grand_total,2,',','.')?></p>
																	</div>
																</div>
															</div>
															<div class="col-md-12" style="margin-bottom:5px;">
																<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																	<h3 style="font-size: 16px; font-weight: bold; color: #C3A771; text-align:center;">Total Bayar : <?="Rp " . number_format($grand_total,2,',','.')?></h3>
																</div>
															</div>
															<input type="hidden" name="order" value="<?=$order->OrderCode?>">
															<input type="hidden" name="amount" value="<?=$grand_total?>">
															<div class="col-md-12">
																<div style="margin-top:20px; border:1px; solid #DEDEDE; box-sizing: border-box; padding:10px; background-color:#C3A771">
																	<button style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center" type="submit">
																		CHECKOUT
																	</button>
																</div>
															</div>
														</form>
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
		
