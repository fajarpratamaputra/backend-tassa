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
														<h3 style="text-align:center;">Detail Order</h3>
														
												</div>
												<br>
												<div class="col-md-12">
													<div class="col-md-2" style="margin-bottom:10px;">
														
													</div>
													<div class="col-md-8" style="margin-bottom:10px;">
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
																	<div class="col-md-12">
																		<h5 class="col-md-12">Pembayaran</h5>
																		<p class="col-md-6" style="text-align:left">Metode Pembayaran</p><p class="col-md-6" style="text-align:right"><?=$this->veritrans->status($order->OrderCode)->payment_type?></p>
																		<p class="col-md-6" style="text-align:left">Bank</p><p class="col-md-6" style="text-align:right"><?=$this->veritrans->status($order->OrderCode)->va_numbers[0]->bank?></p>
																		<p class="col-md-6" style="text-align:left">Nomor Virtual Account</p><p class="col-md-6" style="text-align:right"><?=$this->veritrans->status($order->OrderCode)->va_numbers[0]->va_number?></p>
																		
																	</div>
																	</div>
																</div>
															</div>
															<div class="col-md-12" style="margin-bottom:5px;">
																<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																	<h3 style="font-size: 16px; font-weight: bold; color: #C3A771; text-align:center;">Total Bayar : <?="Rp " . number_format($this->veritrans->status($order->OrderCode)->gross_amount,2,',','.')?></h3>
																</div>
															</div>
															<div class="col-md-12">
																<div style="margin-top:20px; border:1px; solid #DEDEDE; box-sizing: border-box; padding:10px; background-color:#C3A771">
																	<a href="<?=base_url('beranda/account/')?>" style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center" type="submit">
																		Kembali
																	</a>
																</div>
															</div>
															
														</form>
													</div> 
													<div class="col-md-2" style="margin-bottom:10px;">
														
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
		
