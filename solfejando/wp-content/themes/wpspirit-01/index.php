<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header();
get_template_part('after-header'); ?>
								
						<?php if ( have_posts() ) : ?>
						
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
				
							<?php if ( current_user_can( 'edit_posts' ) ) :
								// Show a different message to a logged-in user who can add posts.
							?>
								<header class="entry-header">
									<h1 class="entry-title"><?php _e( 'No posts to display', 'joomspirit' ); ?></h1>
								</header>
				
								<div class="entry-content">
									<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'joomspirit' ), admin_url( 'post-new.php' ) ); ?></p>
								</div><!-- .entry-content -->
				
							<?php else :
								// Show the default message to everyone else.
							?>
								<header class="entry-header">
									<h1 class="entry-title"><?php _e( 'Nothing Found', 'joomspirit' ); ?></h1>
								</header>
				
								<div class="entry-content">
									<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'joomspirit' ); ?></p>
									<?php get_search_form(); ?>
								</div><!-- .entry-content -->
							<?php endif; // end current_user_can() check ?>
				
							</article><!-- #post-0 -->
				
						<?php endif; // end have_posts() check ?>


<?php
get_template_part('before-footer');
get_footer(); ?>