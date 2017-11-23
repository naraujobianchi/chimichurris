<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="format-detection" content="telephone=no">
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php $theme_options = get_option('site_settings');?>
		<!-- Site Wrapper -->
		<div id="site-wrapper">
			<!-- Site Inner Wrapper -->
			<div id="site-inner-wrapper">
				<ul class="hidden" aria-label="Page quick links">
					<li><a href="#site-navigation">Jump to site navigation</a></li>
					<li><a href="#site-content">Jump to main content</a></li>
					<li><a href="#site-footer">Jump to site footer</a></li>
				</ul>
				<!-- Site Header -->
				<header role="banner">
					<div id="site-header" data-gw-component="widget/smooth-scroll">
						<div class="cf">
							<a href="<?php echo home_url(); ?>" title="Return to home page" class="logo">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
							</a>
							<!-- Site navigation -->
							<div id="site-navigation">
								<nav class="nav" role="navigation">
									<?php kons_nav(); ?>
								</nav>
							</div>
						</div>
					</div>
					
					<a href="#site-navigation" id="navigation-toggle" data-gw-component="widget/toggle-menu">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</header>
				<!-- / Site Header -->



