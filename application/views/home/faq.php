	
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
				<div class="container">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<div class="row">
									<div class="col-sm-8">
										<div class="wpb_wrapper">
											<div class="row inner faq-wrapper">
												<div class="col-sm-12">
													<div class="content_element title">
														<h2>Frequently Ask Question</h2>
													</div>
													<?php
														$no = 1;
														foreach($faq as $f){
													?>
														<div class="toggle toggle_default toggle_color_default">
															<div class="toggle_title">
																<h4><?=$f->answer?></h4>
																<i class="toggle_icon"></i>
															</div>
															<div class="toggle_content">
																<p><?=$f->question?></p>
															</div>
														</div>
													<?php } ?>
													
												</div>
											</div>
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="row contact-info">
											<div class="col-sm-12">
												<div class="title">
													<h4>NEED SUPPORT</h4>
												</div>
												<div class="separator content_element separator_align_center sep_width_100 sep_pos_align_center separator_no_text">
													<span class="sep_holder sep_holder_l">
														<span class="sep_line"></span>
													</span>
													<span class="sep_holder sep_holder_r">
														<span class="sep_line"></span>
													</span>
												</div>
												<div class="content_element">
													<div class="support-icon">
														<i class="fa fa-map-marker"></i>
														<?=$setting->office_address?>
													</div>
													<div class="support-icon">
														<i class="fa fa-phone"></i>
														<?=$setting->telepon?>
													</div>
													<div class="support-icon">
														<i class="fa fa-envelope-o"></i>
														<?=$setting->url_web?>
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
		
