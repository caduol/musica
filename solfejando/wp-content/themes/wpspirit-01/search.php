<?php
/**
 * The template for displaying Search Results pages
 *
 * @by JoomSpirit
 * 1.0
 */

get_header();
get_template_part('after-header'); ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'joomspirit' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php joomspirit_content_nav( 'nav-above' ); ?>
			
			<div class="clear"></div>
			
			<?php /* Start the Loop */ ?>
			
			<?php
			$i = 0;		// variable to positionning articles in several columns
			$columns_posts = get_theme_mod('columns_posts', '1');
			if ( ( ! is_singular() ) && ( is_category( get_theme_mod('three_columns', 'none') )) ) { $columns_posts = '3'; }
			if ( ( ! is_singular() ) && ( is_category( get_theme_mod('two_columns', 'none') )) ) { $columns_posts = '2'; }
			if ( ( ! is_singular() ) && ( is_category( get_theme_mod('single_column', 'none') )) ) { $columns_posts = '1'; }
			?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php $i += 1; ?>
				
				<?php get_template_part( 'content', get_post_format() ); ?>			
				
				<?php if ( $columns_posts != '' ) { $number_columns = $columns_posts; } else { $number_columns = 1 ;}
				if ($i % $number_columns == 0) echo '<div class="clear"></div>'; //		add a "clear : both" DIV under each even article ?>  
			
			<?php endwhile; ?>

			<?php joomspirit_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'joomspirit' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'joomspirit' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>


<?php
get_template_part('before-footer');
get_footer(); ?>