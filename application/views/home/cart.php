	
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
															width: 50px;
															height: 50px;
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
												<div class="col-md-12">													
													<div class="col-md-4" style="margin-bottom:10px;">
														<div class="col-md-12" style="margin-bottom:10px;">
															<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="col-md-12">
																	<div class="col-md-2 eclipse"></div>
																	<div class="col-md-8" style="">
																		<p style="text-align:left"><?=strtoupper($user->UserName)?></p>
																		<p style="text-align:left; font-size:10px;">Acccount</p>
																	</div>
																</div>
																<div class="col-md-12" style="margin-bottom:10px;">
																<hr>
																	<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:10px; background-color:#C3A771">
																		<button style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" onclick="window.location.href = 'https://w3docs.com';" class="btn btn-black-outline btn-lg btn-align-center" type="button">
																			LANJUTKAN TRANSAKSI
																		</button>
																	</div>
																</div>	
															</div>
														</div>
														
													</div> 
													<div class="col-md-8" style="margin-bottom:10px;">														
														<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
														<h4>List Cart</h4>
														<hr>
														<?php
															foreach($cart as $c){
														?>
														<div class="col-md-12" style="margin-bottom:10px;">
															<div class="col-md-3">
																<img src="<?=base_url('assets/backend/products/'.$c->ProductImage)?>" alt="">
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
																					<a href="#" title="Gray" class="swatch-color gray">Gray</a>
																				</div>
																			</td>
																			<td class="product-quantity">
																				<h6>All Size</h6>
																			</td>
																			<td class="product-subtotal hidden-xs">
																				<div class="quantity">
																					<input type="number" step="1" min="0" name="qunatity" value="2" title="Qty" class="input-text qty text" size="4"/>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<hr>
														<?php } ?>
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
			
		</div>
		
