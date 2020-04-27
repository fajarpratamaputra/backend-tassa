	
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
											<script type="text/javascript"
													src="https://app.sandbox.midtrans.com/snap/snap.js"
													data-client-key="SB-Mid-client-lUtLJNP1FHA-lL4U"></script>
											<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
														<h3 style="text-align:center;">Pilih Metode Pembayaran</h3>
														<h5 style="text-align:center; font-style:normal;">Pilih metode pembayaran sesuai yang anda inginkan</h5>
														<img class="bullet" src="<?=base_url("assets/template/")?>assets/1.png" alt="">
														<img class="line-address" src="<?=base_url("assets/template/")?>assets/border.png" alt="">
														<img class="bullet2" src="<?=base_url("assets/template/")?>assets/2.png" alt="">
														<img class="line-address" src="<?=base_url("assets/template/")?>assets/border.png" alt="">
														<img class="bullet3" src="<?=base_url("assets/template/")?>assets/3.png" alt="">
												</div>
												<br>
												<div class="col-md-12">
													<div class="col-md-3" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<img src="<?=base_url('assets/template/')?>images/logo/Bca_logo.png" alt="">
														</div>
													</div>
													<!-- <div class="col-md-1" style="margin-bottom:10px;"></div> -->
													<div class="col-md-3" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<img src="<?=base_url('assets/template/')?>images/logo/mandiri_logo.png" alt="">
														</div>
													</div>
													<!-- <div class="col-md-1" style="margin-bottom:10px;"></div> -->
													<div class="col-md-3" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<img src="<?=base_url('assets/template/')?>images/logo/bni_logo.png" alt="">	
														</div>
													</div>
													<!-- <div class="col-md-1" style="margin-bottom:10px;"></div> -->
													<div class="col-md-3" style="margin-bottom:10px;">
														<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
															<img src="<?=base_url('assets/template/')?>images/logo/danamon_logo.png" alt="">
														</div>
													</div>

													<div class="col-md-12" style="margin-bottom:10px;">
														<h5 class="col-md-12">RINGKASAN HARGA</h5>
														<p class="col-md-6" style="text-align:left">Produk</p><p class="col-md-6" style="text-align:right; font-size: 18px;"><?="Rp " . number_format($order->OrderAmount,2,',','.')?></p>
														<p class="col-md-6" style="text-align:left">Diskon</p><p class="col-md-6" style="text-align:right; font-size: 18px;">Rp. 0</p>
														<p class="col-md-6" style="text-align:left">Total Harga</p><p class="col-md-6" style="text-align:right; font-size: 18px;"><?="Rp " . number_format($order->OrderAmount,2,',','.')?></p>
														<hr style="border: 1px solid #DEDEDE;">	
														<p class="col-md-6" style="text-align:left; font-size: 14px; color: #C3A771;">Total Keseluruhan</p><p class="col-md-6" style="text-align:right; font-size: 18px; color: #C3A771;"><?="Rp " . number_format($order->OrderAmount,2,',','.')?></p>														

													</div>
													
													<div class="col-md-12" style="margin-bottom:10px;">
														<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:10px; background-color:#C3A771">
															<button id="pay-button" style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center" type="button">
																PAYMENT
															</button>
														</div>
													</div>
													<script type="text/javascript">
												
														$('#pay-button').click(function (event) {
														event.preventDefault();
														$(this).attr("disabled", "disabled");
														
														$.ajax({
														url: '<?=site_url()?>/snap/token/fajar',
														cache: false,

														success: function(data) {
															//location = data;

															console.log('token = '+data);
															
															var resultType = document.getElementById('result-type');
															var resultData = document.getElementById('result-data');

															function changeResult(type,data){
															$("#result-type").val(type);
															$("#result-data").val(JSON.stringify(data));
															//resultType.innerHTML = type;
															//resultData.innerHTML = JSON.stringify(data);
															}

															snap.pay(data, {
															
															onSuccess: function(result){
																changeResult('success', result);
																console.log(result.status_message);
																console.log(result);
																$("#payment-form").submit();
															},
															onPending: function(result){
																changeResult('pending', result);
																console.log(result.status_message);
																$("#payment-form").submit();
															},
															onError: function(result){
																changeResult('error', result);
																console.log(result.status_message);
																$("#payment-form").submit();
															}
															});
														}
														});
													});

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
		
