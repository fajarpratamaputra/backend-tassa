	
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

													input[type="file"] {
														display: none;
													}

													.custom-file-upload {
														border: 1px dashed #828282;
														display: inline-block;
														padding: 6px 12px;
														cursor: pointer;
														width:100%;
														text-align:center;
													}

												</style>
												<div class="col-md-12">
													<div class="col-md-6" style="margin-bottom:10px;">
														<div class="col-md-12" style="margin-bottom:10px; border:1px solid #DEDEDE; border-top: 4px solid #C3A771; box-sizing: border-box; padding:10px;">
															<h4>Halo, <?=$user->UserName?></h4>
															<p>Terima kasih sudah melakukan pesanan di Tassa.id .</p>
														</div>
														<div class="col-md-12" style="margin-bottom:10px; border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
														<?php
																		$no = 1;
																		foreach($order as $ord){
																			$code = $ord->OrderCode;
																			$payment = $this->veritrans->status($code);
																			if(!in_array($payment->status_code, array(200, 201, 202, 407))) {
																				$status = 'Belum Transfer';
																			}else{
																				$status = $payment->transaction_status;;
																			}
																	?>
																		<table class="table shop_table cart">
																			<thead>
																				<tr>
																					<th class="product-price">No</th>
																					<th class="product-quantity">Kode Order</th>
																					<th class="product-quantity">Transfer</th>
																					<th class="product-quantity">Status </th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr class="cart_item">
																					<td class="product-price">
																						<?=$no++;?>	
																					</td>
																					<td class="product-quantity">
																						<?=$ord->OrderCode;?>	
																					</td>
																					<td class="product-subtotal hidden-xs">
																						<?="Rp " . number_format($ord->OrderAmount,2,',','.')?>			
																					</td>
																					<td class="product-subtotal hidden-xs">
																						<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:5px; background-color:#C3A771">
																							<a href="<?=base_url('#')?>" style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center">
																								<?=$status; ?>	
																							</a>
																						</div>		
																					</td>
																					
																				</tr>
																			</tbody>
																		</table>
																	<?php } ?>
														</div>
														<!-- <div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<div class="col-md-3">
																<img src="<?=base_url("assets/backend/")?>products/file-1585687834.png" alt="">
															</div>
															<div class="col-md-8">
																<h4>Kabasaran Midi Kaftan</h4>
																<h6>Gucci Magelang</h6>
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
																					<a href="#" title="Green" class="swatch-color green">Green</a>
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
														</div> -->
													</div>
													<div class="col-md-6" style="margin-bottom:10px;">
														<div class="col-md-12" style="margin-bottom:10px;">
															<div class="col-md-12" style="border:1px solid #DEDEDE; border-top: 4px solid #C3A771; box-sizing: border-box; padding:10px;">
																<div class="col-md-12">
																<h4>History Delivery</h4>
																	<table class="table shop_table cart">
																		<thead>
																			<tr>
																				<th class="product-price">No</th>
																				<th class="product-quantity">Status</th>
																				<th class="product-quantity">Tanggal/Jam</th>
																				<th class="product-quantity">Kota </th>
																			</tr>
																		</thead>
																		<?php
																			$no = 1;
																			$count = $count_trace - 1;
																			for ($i = $count; $i >= 0; $i--){
																				
																		?>
																		<tbody>
																			<tr class="cart_item">
																				<td class="product-price">
																					<?=$no++;?>	
																				</td>
																				<td class="product-quantity">
																					<?=$trace[$i]->manifest_description;?>	
																				</td>
																				<td class="product-subtotal hidden-xs">
																					<?=$trace[$i]->manifest_date;?> / <?=$trace[$i]->manifest_time;?>				
																				</td>
																				<td class="product-subtotal hidden-xs">
																					<?=$trace[$i]->city_name;?>	
																				</td>
																			</tr>
																		</tbody>
																		<?php } ?>
																		
																	</table>
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
			</div>
			
		</div>
		
