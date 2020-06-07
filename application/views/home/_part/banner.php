<div class="row wpb_row row-fluid banner" style="z-index : 1">
	<div class="wpb_column column_container col-sm-12">
		<div class="wpb_wrapper">
			<div id="banner-slider" data-autorun="yes" data-duration="6000" class="carousel slide fade dhslider dhslider-custom " data-height="650">
				<div class="dhslider-loader">
					<div class="fade-loading">
						<i></i><i></i><i></i><i></i>
					</div>
				</div>
				<div class="carousel-inner dhslider-wrap">
				<?php 
					$no = 0;
					foreach($banner as $ban) {
					
				?>	
					<div class="item slider-item <?php if($no == 0) {echo "active";}  ?>">
						<div class="slide-bg" style="background-image:url(<?=base_url('assets/backend/banner/'.$ban->picture_slider)?>)">
							<div class="slider-caption caption-align-center">
								<div class="slider-caption-wrap">
									<div class="slider-buttons">
										<a href="#" class="btn btn-lg btn-white-outline">Detail</a>
										<!-- <a href="#" class="btn btn-lg btn-white-outline">Buy Now</a> -->
									</div>
								</div>
							</div>
						</div>  
						
					</div>
				<?php $no++; } ?>	
                </div>
                
				<ol class="carousel-indicators parallax-content">
				<?php 
					$no = 0;
					foreach($banner as $ban) {

				?>
					<li data-target="#banner-slider" data-slide-to="0"></li>
				<?php $no++; } ?>	   
				</ol>
			</div>
		</div>
	</div>
</div>