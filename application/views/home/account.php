
	<body class="shop" >
		
		<div id="wrapper" class="wide-wrap">
			<div class="content-container" >
				<div class="container-full" >
					<div class="row" style="margin-top:80px;">
						<div class="heading-container" style="margin-bottom:20px;">
							<div class="container heading-standar">
								<div class="page-breadcrumb">
									<ul class="breadcrumb">
										<li><span><a href="#" class="home" onClick=”history.go(-1);”><span>Privasi</span></a></span></li>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		
									</ul>
								</div>
							</div>
						</div>
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
											<div class="col-md-12 col-sm-12 entry-summary" >
												
												<style>
													.eclipse {
															width: 100px;
															height: 100px;
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
													<div class="col-md-4" style="margin-bottom:10px;">
													 <form action="<?=base_url('loginfe/update_user');?>" enctype="multipart/form-data" method="post">
														<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px; margin-bottom:10px;">
															<div class="col-md-12">
																<div class="col-md-5">
																	<?php 
																		if($user->UserPhoto != "") {
																			$photo = $user->UserPhoto;
																		}else {
																			$photo = "user.png";
																		}
																	?>
																	<img src="<?=base_url('assets/backend/users/'.$photo)?>" alt="UserPhoto" style="width:100px; height:100px; border-radius:100%;">
																</div>
																<div class="col-md-6" style="">
																	<p style="text-align:left; padding-top:20px;"><?=$user->UserName?></p>
																	<p style="text-align:left; font-size:10px;">Acccount</p>
																	<label for="file-upload" class="custom-file-upload">
																		Upload Photo
																	</label>
																	<input id="file-upload" type="file" name="file"/>
																</div>
															</div>
															<div class="col-md-12">
																<hr>
																<p class="col-md-12" style="text-align:left; font-size:10px;">Nama Lengkap</p>
																<p class="col-md-12" style="text-align:left">
																	<input class="form-control" type="text" name="full" value="<?=$user->UserFullName?>">
																</p>
																<p class="col-md-12" style="text-align:left; font-size:10px;">Alamat Email</p>
																<p class="col-md-12" style="text-align:left">
																	<input class="form-control" type="text" name="email" value="<?=$user->UserEmail?>">
																</p>
																<p class="col-md-12" style="text-align:left; font-size:10px; ">No. Handphone</p>
																<p class="col-md-12" style="text-align:left">
																	<input class="form-control" type="text" name="phone" value="<?=$user->UserPhone?>">
																</p>
															</div>
														</div>
														<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px; margin-bottom:10px;">
															<div class="col-md-12">
																<p class="col-md-12" style="text-align:left; font-size:10px;">Alamat</p>
																<p class="col-md-12" style="text-align:left">
																	<input class="form-control" type="text" name="address" value="<?=$user->UserAddress?>">
																</p>
																<p class="col-md-12" style="text-align:left; font-size:10px;">Kabupaten/Kota</p>
																<p class="col-md-12" style="text-align:left">
																	<input class="form-control" list="district" name="city" value="<?=$user->UserCity?>" required>
																	<datalist id="district">
																		<option value="">Nama Kabupate/Kota</option>
																		<?php
																		    for ($i = 0; $i < count($district); $i++){
																				
																		?>
																		<option value="<?=$district[$i]->city_name?>"></option>
																		<?php }  ?>
																	</datalist>
																</p>
																<p class="col-md-12" style="text-align:left; font-size:10px; ">Provinsi</p>
																<p class="col-md-12" style="text-align:left">
																	<input class="form-control" list="courier" name="province" value="<?=$user->UserProvince?>" required>
																	<datalist id="courier">
																		<?php
																			for ($j = 0; $j < count($courier); $j++){
																				
																		?>
																		<option value="<?=$courier[$j]->province?>"></option>
																		<?php }  ?>
																	</datalist>
																</p>
																<p class="col-md-12" style="text-align:left; font-size:10px; ">Kode Pos</p>
																<p class="col-md-12" style="text-align:left">
																	<input class="form-control" type="text" name="zip" value="<?=$user->UserZip?>">
																</p>
															</div>
														</div>
														<button style="margin-top:10px; background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;"  class="btn btn-black-outline btn-lg btn-align-center" type="submit">
															Update Profile
														</button>
														
														</form>
													</div> 
													<div class="col-md-8" style="margin-bottom:10px;">
														<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<ul class="nav nav-tabs" id="myTab" role="tablist">
																<li class="nav-item">
																	<a class="nav-link active" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="true">History Transaksi</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="false">Order</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" href="<?=base_url('beranda/listaddress')?>" >Daftar Alamat</a>
																</li>
															</ul>

															<div class="tab-content">
																<div class="tab-pane active" id="history" role="tabpanel" aria-labelledby="history-tab">
																	<?php
																		foreach($cart as $c){
																	?>
																		<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px; margin-bottom:5px;">
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
																							<th class="product-subtotal">Qty</th>
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
																							<td class="product-subtotal">
																								<div class="quantity">
																									<input type="number" step="1" min="0" name="qunatity" value="<?=$c->qty?>" title="Qty" class="input-text qty text" size="4"/>
																								</div>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="col-md-12">
																				<hr>
																				<h6 style="text-align:center;"><?=date('d M Y', strtotime($c->created_at))?></h6>
																			</div>
																		</div>
																		<hr style="border-color: #DEDEDE; ">
																	<?php } ?>
																</div>
																<div class="tab-pane" id="order" role="tabpanel" aria-labelledby="order-tab">
																	
																		<table class="table shop_table cart">
																			<thead>
																				<tr>
																					<th class="product-price hidden-xs">No</th>
																					<th class="product-quantity">Kode Order</th>
																					<th class="product-quantity hidden-xs">Transfer</th>
																					<th class="product-quantity hidden-xs">Status </th>
																					<th class="product-quantity">Tracking</th>
																				</tr>
																			</thead>
																			<tbody>
																			<?php
																				$no = 1;
																				foreach($order as $ord){
																					$code = $ord->OrderCode;
																					$payment = $this->veritrans->status($code);
																					if(!in_array($payment->status_code, array(200, 201, 202, 407))) {
																						$status = 'Belum Transfer';
																					}else{
																						$status = $payment->transaction_status;
																					}
																			?>
																				<tr class="cart_item">
																					<td class="product-price hidden-xs">
																						<?=$no++;?>	
																					</td>
																					<td class="product-quantity">
																						<?=$ord->OrderCode;?>	
																					</td>
																					<td class="product-subtotal hidden-xs hidden-xs">
																						<?php if($ord->OrderAmount != "") { ?>
																							<?="Rp " . number_format($ord->OrderAmount,2,',','.')?>
																						<?php } ?>	
																					</td>
																					<td class="product-subtotal hidden-xs">
																						<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:5px; background-color:#C3A771">
																							<a href="<?=base_url('beranda/invoice/'.$ord->OrderCode)?>" style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center">
																								<?=$status; ?>	
																							</a>
																						</div>		
																					</td>
																					<td class="product-subtotal ">
																						<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:5px; background-color:#C3A771">
																							<a href="<?=base_url('beranda/tracking/'.$ord->OrderCode)?>" style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center">
																								Detail
																							</a>
																						</div>		
																					</td>
																				</tr>
																			<?php } ?>
																			</tbody>
																		</table>
																	
																</div>
																<div class="tab-pane" id="address" role="tabpanel" aria-labelledby="address-tab">
																	<div class="col-md-12">
																		<form action="">
																		<div class="col-md-6">
																			<p class="col-md-12" style="text-align:left; font-size:10px;">Alamat</p>
																			<p class="col-md-12" style="text-align:left">
																				<input class="form-control" type="text" name="address">
																			</p>
																			<p class="col-md-12" style="text-align:left; font-size:10px;">Kecamatan</p>
																			<p class="col-md-12" style="text-align:left">
																				<input class="form-control" type="text" name="city">
																			</p>
																		</div>
																		<div class="col-md-6">
																			<p class="col-md-12" style="text-align:left; font-size:10px; ">Kabupaten/Kota</p>
																			<p class="col-md-12" style="text-align:left">
																				<input class="form-control" type="text" name="province">
																			</p>
																			<p class="col-md-12" style="text-align:left; font-size:10px; ">Provinsi</p>
																			<p class="col-md-12" style="text-align:left">
																				<input class="form-control" type="text" name="zip">
																			</p>
																		</div>
																		</form>
																	</div>
																	<table class="table shop_table cart">
																		<thead>
																			<tr>
																				<th class="product-price">No</th>
																				<th class="product-quantity">Alamat</th>
																				<th class="product-quantity">#</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr class="cart_item">
																				<td class="product-price">
																						
																				</td>
																				<td class="product-quantity">
																						
																				</td>
																				<td class="product-subtotal hidden-xs">
																								
																				</td>
																			</tr>
																		</tbody>
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
		
