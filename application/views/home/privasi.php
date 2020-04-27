	
	<body class="shop">
		
		<div id="wrapper" class="wide-wrap">
			<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li><span><a href="#" class="home" onClick=”history.go(-1);”><span>Privasi</span></a></span></li>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		
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
														<div class="col-md-12" style="margin-bottom:10px;">
															<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="col-md-12">
																	<div class="col-md-5">
																		<img src="<?=base_url('assets/backend/users/'.$user->UserPhoto)?>" alt="UserPhoto" style="width:100px; height:100px; border-radius:100%;">
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
														</div>
														<div class="col-md-12" style="margin-bottom:10px;">
															<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="col-md-12">
																	<p class="col-md-12" style="text-align:left; font-size:10px;">Alamat</p>
																	<p class="col-md-12" style="text-align:left">
																		<input class="form-control" type="text" name="address" value="<?=$user->UserAddress?>">
																	</p>
																	<p class="col-md-12" style="text-align:left; font-size:10px;">Kabupaten/Kota</p>
																	<p class="col-md-12" style="text-align:left">
																		<input class="form-control" type="text" name="city" value="<?=$user->UserCity?>">
																	</p>
																	<p class="col-md-12" style="text-align:left; font-size:10px; ">Provinsi</p>
																	<p class="col-md-12" style="text-align:left">
																		<input class="form-control" type="text" name="province" value="<?=$user->UserProvince?>">
																	</p>
																	<p class="col-md-12" style="text-align:left; font-size:10px; ">Kode Pos</p>
																	<p class="col-md-12" style="text-align:left">
																		<input class="form-control" type="text" name="zip" value="<?=$user->UserZip?>">
																	</p>
																</div>
															</div>
															<button style="margin-top:10px; background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" onclick="window.location.href = '#';" class="btn btn-black-outline btn-lg btn-align-center" type="submit">
																		Update Profile
																	</button>
														</div>
													</form>
													</div> 
													<div class="col-md-8" style="margin-bottom:10px;">
														<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<ul class="nav nav-tabs" id="myTab" role="tablist">
																<li class="nav-item">
																	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">History</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tracking</a>
																</li>
															</ul>

															<div class="tab-content">
																<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
																</div>
																<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
																	Tracking
																</div>
															</div>

															<script>
																$(function () {
																	$('#myTab li:last-child a').tab('show')
																})
															</script>
															
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
		
