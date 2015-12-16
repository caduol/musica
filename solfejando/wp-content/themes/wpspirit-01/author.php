<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @by JoomSpirit
 * 1.0
 */

get_header();
get_template_part('after-header'); ?>

		<?php if ( have_posts() ) : ?>

			<?php
				/* Queue the first post, that way we know
				 * what author we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
			?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Author Archives: %s', 'joomspirit' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			</header><!-- .archive-header -->

			<?php
				/* Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
			?>

			<?php joomspirit_content_nav( 'nav-above' ); ?>

			<?php
			// If a user has filled out their description, show a bio on their entries.
			if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="author-info">
				<div class="author-avatar">
					<?php
					/**
					 * Filter the author bio avatar size.
					 *
					 * @since Twenty Twelve 1.0
					 *
					 * @param int $size The height and width of the avatar in pixels.
					 */
					$author_bio_avatar_size = apply_filters( 'joomspirit_author_bio_avatar_size', 68 );
					echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
					?>
				</div><!-- .author-avatar -->
				<div class="author-description">
					<h2><?php printf( __( 'About %s', 'joomspirit' ), get_the_author() ); ?></h2>
					<p><?php the_author_meta( 'description' ); ?></p>
				</div><!-- .author-description	-->
			</div><!-- .author-info -->
			<?php endif; ?>
			
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
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>


<?php
get_template_part('before-footer');
get_footer(); ?>