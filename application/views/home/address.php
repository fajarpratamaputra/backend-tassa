	
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
											<div class="col-md-12 col-sm-12 entry-summary" style="padding-left:20%; padding-right:20%;">
												
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
												<div style="width:100%">
														<h3 style="text-align:center;">Alamat Pengiriman</h3>
														<h5 style="text-align:center; font-style:normal;">Pastikan anda memasukkan alamat dengan tepat</h5>
														<img class="bullet" src="<?=base_url("assets/template/")?>assets/1.png" alt="">
														<img class="line-address" src="<?=base_url("assets/template/")?>assets/border.png" alt="">
														<img class="bullet2" src="<?=base_url("assets/template/")?>assets/2a.png" alt="">
														<img class="line-address" src="<?=base_url("assets/template/")?>assets/border.png" alt="">
														<img class="bullet3" src="<?=base_url("assets/template/")?>assets/3a.png" alt="">
												</div>
												<br>
												<form action="<?=base_url('beranda/insert_address')?>" enctype="multipart/form-data" method="post">
													<div class="col-md-12">
														<div class="col-md-6" style="margin-bottom:10px;">
															<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="form-group">
																	<label for="name">Nama Penerima</label>
																	<input type="text" id="name" name="name" required class="form-control" value="" placeholder="Username">
																</div>
															</div>
														</div>
														<div class="col-md-6" style="margin-bottom:10px;">
															<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="form-group">
																	<label for="phone">No. Telepon</label>
																	<input type="text" id="phone" required value="" name="phone" class="form-control" placeholder="Password">
																</div>
															</div>
														</div>
														<div class="col-md-12" style="margin-bottom:10px;">
															<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="form-group">
																	<label for="address">Alamat Pengiriman</label>
																	<input type="text" id="address" required value="" name="address" class="form-control" placeholder="Password">
																</div>
															</div>
														</div>
														<div class="col-md-6" style="margin-bottom:10px;">
															<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="form-group">
																	<label for="province">Provinsi</label>
																	<input type="text" id="province" required value="" name="province" class="form-control" placeholder="Password">
																</div>
															</div>
														</div>
														<div class="col-md-6" style="margin-bottom:10px;">
															<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="form-group">
																	<label for="city">Kabupaten/Kota</label>
																	<input type="text" id="city" required value="" name="city" class="form-control" placeholder="Password">
																</div>
															</div>
														</div>
														<div class="col-md-6" style="margin-bottom:10px;">
															<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="form-group">
																	<label for="subdistricts">Kecamatan</label>
																	<input type="text" id="subdistricts" required value="" name="subdistricts" class="form-control" placeholder="Password">
																</div>
															</div>
														</div>
														<div class="col-md-6" style="margin-bottom:10px;">
															<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="form-group">
																	<label for="zip">Kode Pos</label>
																	<input type="text" id="zip" required value="" name="zip" class="form-control" placeholder="Password">
																</div>
															</div>
														</div>
														<div class="col-md-12" style="margin-bottom:10px;">
															<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:10px; background-color:#C3A771">
																<button style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center" type="submit">
																	LANJUTKAN TRANSAKSI
																</button>
															</div>
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
		
