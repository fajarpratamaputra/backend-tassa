
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
														<h3 style="text-align:center;">Pilih Kurir</h3>
														<h5 style="text-align:center; font-style:normal;">Silahkan pilih kurir anda</h5>
														<img class="bullet" src="<?=base_url("assets/template/")?>assets/1.png" alt="">
														<img class="line-address" src="<?=base_url("assets/template/")?>assets/border.png" alt="">
														<img class="bullet2" src="<?=base_url("assets/template/")?>assets/2a.png" alt="">
														<img class="line-address" src="<?=base_url("assets/template/")?>assets/border.png" alt="">
														<img class="bullet3" src="<?=base_url("assets/template/")?>assets/3a.png" alt="">
												</div>
												<br>
												<form action="<?=base_url('beranda/insert_address')?>" enctype="multipart/form-data" method="post">
													<div class="col-md-12">
														<div class="col-md-12" style="margin-bottom:10px;">
															<div style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
																<div class="form-group">
																	<label for="name">Kota Tujuan</label>

																	<select class="form-control" name="city" id="">
																		<option value="">Nama Kabupate/Kota</option>
																		<?php
																		    $no = 1;
																			for ($i = 0; $i < count($district); $i++){
																				
																		?>
																		<option value="<?=$district[$i]->city_name?>"></option>
																		<?php }  ?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-md-12" style="margin-bottom:10px;">
															<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:10px; background-color:#C3A771">
																<a href="<?=base_url('beranda/courier/'.$orderid)?>" class="btn btn-black-outline btn-lg btn-align-center" style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;">CEK TARIF</a>
															</div>
														</div>
													</div>
												</form> 
												<div class="col-md-12">
													<?php 
														if($this->uri->segment(3) != '') { 
															
													?>
														<table class="table shop_table cart">
															<thead>
																<tr>
																	<th class="product-price hidden-xs">No</th>
																	<th class="product-quantity ">Kurir</th>
																	<th class="product-quantity hidden-xs">Jenis Layanan</th>
																	<th class="product-quantity hidden-xs">Estimasi Hari</th>
																	<th class="product-quantity">Tarif</th>
																	<th class="product-quantity">#</th>
																</tr>
															</thead>
															<tbody>
															<?php
																$no = 1;
																$count = $count_cost - 1;
																	for ($i = $count; $i >= 0; $i--){
																		$costs = $cost[$i]->costs;
																		$count_costs = count($cost[$i]->costs);
																		$count_costs = $count_costs - 1;
																		for ($z = $count_costs; $z >= 0; $z--){
																	
															?>
																<tr class="cart_item">
																	<td class="product-price hidden-xs">
																		<?=$no++?>
																	</td>
																	<td class="product-quantity">
																		<?=$cost[$i]->code; ?>
																	</td>
																	<td class="product-quantity hidden-xs">
																		<?=$costs[$z]->service; ?>
																	</td>
																	<td class="product-quantity hidden-xs">
																		<?=$costs[$z]->cost[0]->etd; ?>
																	</td>
																	<td class="product-quantity">
																		<?php echo "Rp " . number_format($costs[$z]->cost[0]->value,2,',','.');?>
																	</td>
																	<td class="product-subtotal hidden-xs">
																		<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:5px; background-color:#C3A771">
																			<a href="<?=base_url('beranda/insert_courier/'.$cost[$i]->code.'/'.$costs[$z]->service.'/'.$costs[$z]->cost[0]->value)?>" style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center">
																				Pilih
																			</a>
																		</div>
																	</td>
																</tr>
															<?php } }  ?>
															</tbody>
														</table>
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
		