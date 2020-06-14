<body class="shop page-layout-left-sidebar">
		
		<div id="wrapper" class="wide-wrap">
			
			<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content"  style="margin-top:100px;">
								<div class="row">
								<div class="col-md-8 col-sm-12">
										<div class="posts" data-paginate="page_num" data-layout="default">
											<div class="posts-wrap posts-layout-default">
											<?php
												$no = 1 + $this->uri->segment(3);
												foreach($article as $art){
											?>
												<article class="hentry">
													<div class="hentry-wrap">
														<div class="entry-featured">
															<a href="#">
																<img width="700" height="350" src="<?=base_url('assets/backend/products/'.$art->img)?>" alt="blog-4"/>
															</a>
														</div>
														<div class="entry-info">
															<div class="entry-header">
																<h2 class="entry-title">
																	<a href="#">
																		<?=$art->title?>
																	</a>
																</h2>
																<div class="entry-meta icon-meta">
																	<span class="meta-date">
																		<time datetime="2015-08-11T06:27:49+00:00">
																			<i class="fa fa-clock-o"></i><?=date('D, M Y', strtotime($art->created_at))?>
																		</time>
																	</span>
																</div>
															</div>
															<div class="entry-content">
																<?php echo word_limiter($art->description, 100) ?>	
															</div>
															<div class="readmore-link">
																<a href="<?=base_url('beranda/detail/'.$art->id)?>">Read More</a>
															</div>
														</div>
													</div>
												</article>
											<?php } ?>
											</div>
											<!-- <div class="paginate">
												<div class="paginate_links">
													<span class="page-numbers current">1</span>
													<a class="page-numbers" href="#">2</a>
													<span class="page-numbers dots">&hellip;</span>
													<a class="page-numbers" href="#">4</a>
													<a class="next page-numbers" href="#">
														<i class="fa fa-angle-right"></i>
													</a>
												</div>
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
</body>