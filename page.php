<?php get_header(); ?>
<!-- Site content -->
<div id="site-content" data-gw-component="widget/scrollreveal">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php 
		if ( function_exists('hero_slideshow_component' )) {
			hero_slideshow_component(get_post());
		}
	?>

	<main id="main-content">
		<?php

			if ( function_exists('two_columns_text_component' )) {
				two_columns_text_component(get_post());
			};
			if ( function_exists('menu_component' )) {
				menu_component(get_post());
			};
			if ( function_exists('instagram_feed_component' )) {
				instagram_feed_component(get_post());
			};
			if ( function_exists('two_columns_with_img_component' )) {
				two_columns_with_img_component(get_post());
			};
			if ( function_exists('google_map_component' )) {
				google_map_component(get_post());
			};
			
			edit_post_link(); 
		?>
	</main>

	<?php endwhile; ?>
	<?php else: ?>
	<div class="slab slab-single-column">
		<h2 class="h1 text-center accent"><?php the_title(); ?></h2>
		<div class="container">
			<div class="light mega text-center">
				<?php _e( 'Sorry, nothing to display.', 'kons' ); ?></h2>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
</div>
<!-- / Site content -->
<?php get_footer(); ?>
