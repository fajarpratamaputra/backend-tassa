	
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
												<div class="col-md-12">
													<div class="col-md-6" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<div class="form-group">
																<label>Nama Penerima</label>
																<input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
															</div>
														</div>
													</div>
													<div class="col-md-6" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<div class="form-group">
																<label for="password">Alamat Email</label>
																<input type="email" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
															</div>
														</div>
													</div>
													<div class="col-md-12" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<div class="form-group">
																<label for="test">Alamat Pengiriman</label>
																<input type="text" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
															</div>
														</div>
													</div>
													<div class="col-md-6" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<div class="form-group">
																<label>Provinsi</label>
																<select class="form-control" id="exampleFormControlSelect1">
																	<option>NAD Aceh</option>
																	<option>Bengkulu</option>
																	<option>DKI Jakarta</option>
																	<option>Sulawesi Selatan</option>
																	<option>Maluku Utara</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-6" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<div class="form-group">
																<label for="password">Kabupaten/Kota</label>
																<select class="form-control" id="exampleFormControlSelect1">
																	<option>Banda Aceh</option>
																	<option>Bengkulu</option>
																	<option>Jakarta Pusat</option>
																	<option>Makassar</option>
																	<option>Ambon</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-6" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<div class="form-group">
																<label>Kecamatan</label>
																<select class="form-control" id="exampleFormControlSelect1">
																	<option>Kecamatan a</option>
																	<option>Kecamatan b</option>
																	<option>Kecamatan c</option>
																	<option>Kecamatan d</option>
																	<option>Kecamatan e</option>
																</select>	
															</div>
														</div>
													</div>
													<div class="col-md-6" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<div class="form-group">
																<label for="text">Kode Pos</label>
																<input type="text" id="text" required value="" name="pwd" class="form-control" placeholder="Password">
															</div>
														</div>
													</div>
													<div class="col-md-12" style="margin-bottom:10px;">
														<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:10px; background-color:#C3A771">
															<button style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" onclick="window.location.href = 'https://w3docs.com';" class="btn btn-black-outline btn-lg btn-align-center" type="button">
																LANJUTKAN TRANSAKSI
															</button>
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
		