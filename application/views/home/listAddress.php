<?php if(($district == 0) || ($courier == 0)) { ?>
		<script>
			swal("API pihak ketiga sedang maintenance");
		</script>
<?php } ?>
	<body class="shop">
		
		<div id="wrapper" class="wide-wrap">
			
			<div class="content-container">
				<div class="container-full">
					<div class="heading-container" style="margin-top:80px; margin-bottom:20px;">
						<div class="container heading-standar">
							<div class="page-breadcrumb">
								<ul class="breadcrumb">
									<li><span><a href="<?=base_url('')?>" class="home" onClick=”history.go(-1);”><span>Home</span></a></span></li>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		
								</ul>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top:20px;">
						
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
												<div class="col-md-5" style="margin-bottom:10px;">
													<form action="<?=base_url('beranda/insert_alamat');?>" enctype="multipart/form-data" method="post">
														<div class="col-md-12" style="border:1px solid #DEDEDE; margin-bottom:10px; padding:10px;">
															<div class="col-md-12" style=" box-sizing: border-box; ">
																<ul class="nav nav-tabs" id="myTab" role="tablist">
																	<li class="nav-item">
																		<a class="nav-link active" href="#" >Form Input Alamat</a>
																	</li>
																</ul>
															<div class="col-md-12">
																<p class="col-md-12" style="text-align:left; font-size:10px;">Alamat Lengkap</p>
																<p class="col-md-12" style="text-align:left">
																	<textarea class="form-control" name="address" id="" cols="39" rows="4"></textarea>
																</p>
																<p class="col-md-12" style="text-align:left; font-size:10px;">Kabupaten/Kota</p>
																<p class="col-md-12" style="text-align:left">
																<input class="form-control" list="district" name="district" placeholder="Kabupaten/Kota" required>
																<datalist id="district">
																		<option value="">Nama Kabupate/Kota</option>
																		<?php
																		    if($district != 0) {
																				$no = 1;
																				$count = $count_district - 1;
																				for ($i = $count; $i >= 0; $i--){
																		?>
																		<option value="<?=$district[$i]->city_name?>"></option>
																		<?php } } ?>
																	</datalist>
																</p>
																<p class="col-md-12" style="text-align:left; font-size:10px; ">Provinsi</p>
																<p class="col-md-12" style="text-align:left">
																<input class="form-control" list="courier" name="province" placeholder="Provinsi" required>
																	<datalist id="courier">
																		<?php
																			if($courier != 0) {
																				$no = 1;
																				$count = $count_courier - 1;
																				for ($i = $count; $i >= 0; $i--){
																		?>
																		<option value="<?=$courier[$i]->province?>"></option>
																		<?php } } ?>
																	</datalist>
																</p>
																<p class="col-md-12" style="text-align:left; font-size:10px; ">Kode Pos</p>
																<p class="col-md-12" style="text-align:left">
																	<input class="form-control" type="text" name="zipcode" placeholder="Kode Pos" required>
																</p>
															</div>
														</div>
														<button style="margin-top:10px; background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center" type="submit">
															Simpan Alamat
														</button>
													</div>
													</form>
												</div> 
												<div class="col-md-7" style="margin-bottom:10px;">
													<div class="col-md-12" style="border:1px solid #DEDEDE; box-sizing: border-box; padding:10px;">
														<ul class="nav nav-tabs" id="myTab" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" href="#" >Alamat Pengiriman</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="address" role="tabpanel" aria-labelledby="address-tab">
																<table class="table shop_table cart">
																	<thead>
																		<tr>
																			<th class="product-price">No</th>
																			<th class="product-quantity">Alamat</th>
																			<th class="product-quantity">#</th>
																		</tr>
																	</thead>
																	<tbody>
																	<?php
																		$no = 1;
																		foreach($address as $add){
																	?>
																		<tr class="cart_item">
																			<td class="product-price">
																				<?=$no++?>
																			</td>
																			<td class="product-quantity">
																				<?=$add->address.', '.$add->subdistrict.', '.$add->district.', '.$add->province.', '.$add->zipcode ?>
																			</td>
																			<td class="product-subtotal hidden-xs">
																				<div style="border:1px; solid #DEDEDE; box-sizing: border-box; padding:5px; background-color:#C3A771">
																					<a href="<?=base_url('beranda/delete_alamat/'.$add->id)?>" style="background-color: #C3A771; width:100%; border-color:#C3A771; color:#ffffff; font-size:12px;" class="btn btn-black-outline btn-lg btn-align-center">
																						Delete
																					</a>
																				</div>
																			</td>
																		</tr>
																	<?php } ?>
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
		
