<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @by JoomSpirit
 * 1.0
 */

get_header();
get_template_part('after-header'); ?>


		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php echo '<span>' . single_cat_title( '', false ) . '</span>' ; ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->
			
			<div class="clear"></div>
			
			<?php
			/* Start the Loop */
			
			$i = 0;		// variable to positionning articles in several columns
			
			$columns_posts = get_theme_mod('columns_posts', '1');
			if ( ( ! is_singular() ) && ( is_category( get_theme_mod('three_columns', 'none') )) ) { $columns_posts = '3'; }
			if ( ( ! is_singular() ) && ( is_category( get_theme_mod('two_columns', 'none') )) ) { $columns_posts = '2'; }
			if ( ( ! is_singular() ) && ( is_category( get_theme_mod('single_column', 'none') )) ) { $columns_posts = '1'; }
		
			while ( have_posts() ) : the_post();
			
				$i += 1;

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				
				if ( $columns_posts != '' ) { $number_columns = $columns_posts; } else { $number_columns = 1 ;}
				if ($i % $number_columns == 0) echo '<div class="clear"></div>'; //		add a "clear : both" DIV under each even article 
				
			endwhile;

			joomspirit_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>


<?php
get_template_part('before-footer');
get_footer(); ?>