<?php $theme_options = get_option('site_settings');?>
				<!-- Site footer -->
				<footer role="contentinfo">
					<div id="site-footer" class="sr-show">
						<div class="container">
							<div class="table below-24">
								<div class="table__cell">
									<?php echo wpautop($theme_options['company_details_extra_info']); ?>
								</div>
								<div class="table__cell">
									<div class="links--brand">
										<strong>email</strong>
										<p><a href="<?php echo $theme_options['company_details_email'];?>"><?php echo $theme_options['company_details_email'];?></a></p>

										<div itemscope itemtype="http://schema.org/LocalBusiness">
											<img itemprop="image" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Chimichurris" class="hidden"/>
											<a itemprop="url" href="<?php echo get_template_directory_uri(); ?>" class="hidden">Go to site</a>
											<span itemprop="name" class="hidden"><?php echo $theme_options['company_details_name']; ?></span>
											
											<strong>address</strong>
											<p>
												<a href="https://www.google.co.uk/maps/dir/''/chimichurris+southwark/data=!4m5!4m4!1m0!1m2!1m1!1s0x487604a697e57273:0x41bd9fb48e8963c?sa=X&ved=0ahUKEwi185H22cbYAhVKJMAKHVTUBjUQ9RcIhQEwCw">
													<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
														<span itemprop="addressLocality"><?php echo $theme_options['company_details_address_line_1'];?> </span>
														<span><?php echo $theme_options['company_details_address_line_2'];?> </span>
														<span itemprop="addressRegion"><?php echo $theme_options['company_details_city'];?> </span>
														<span itemprop="postalCode"><?php echo $theme_options['company_details_postcode'];?></span>
													</span>
												</a>
											</p>

											<strong>phone</strong>
											<p><a href="tel:<?php echo $theme_options['company_details_phone'];?>" itemprop="telephone"><?php echo $theme_options['company_details_phone'];?></a></p>
										</div>
									</div>
									<!-- Footer menu -->
									<!-- <div class="links--brand">
										<?php if ( function_exists('kons__footer_primary' )) {kons__footer_primary();}; ?>
									</div> -->
								</div>
								<div class="table__cell">
									<p class="bold">follow us</p>
									<div class="social-media-list">
										<p>
											change linkedin to insta icon <br/>
											<a href="<?php echo $theme_options['company_details_instagram'];?>" class="social sr-scale">
												<span class="icon-linkedin"></span>
											</a>
											<a href="<?php echo $theme_options['company_details_twitter'];?>" class="social sr-scale">
												<span class="icon-twitter"></span>
											</a>
											<a href="<?php echo $theme_options['company_details_facebook'];?>" class="social sr-scale">
												<span class="icon-facebook"></span>
											</a>
										</p>		
									</div>
								</div>
							</div>
							<div class="text-center"><p class="milli">&copy; <?php echo date('Y'); echo '&nbsp;'; echo $theme_options['company_details_name']; ?> <?php echo $theme_options['company_details_description']; ?></p></div>
						</div>	
					</div>
				</footer>
				<!--/ Site footer -->
			</div>
				<!-- / Site Inner Wrapper -->
		</div>	
		<!-- / Site Wrapper -->
		<?php wp_footer(); ?>
		
	</body>
</html>
