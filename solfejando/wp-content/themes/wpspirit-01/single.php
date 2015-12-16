<?php
/**
 * The Template for displaying all single posts
 *
 * @by JoomSpirit
 * 1.0
 */

get_header();
get_template_part('after-header'); ?>
			
						<?php while ( have_posts() ) : the_post(); ?>
			
							<?php get_template_part( 'content', get_post_format() ); ?>
			
							<nav class="nav-single clearfix">
								<h3 class="assistive-text"><?php _e( 'Post navigation', 'joomspirit' ); ?></h3>
								<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'joomspirit' ) . '</span> %title' ); ?></span>
								<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'joomspirit' ) . '</span>' ); ?></span>
							</nav><!-- .nav-single -->
			
							<?php comments_template( '', true ); ?>
			
						<?php endwhile; // end of the loop. ?>
					
	
<?php
get_template_part('before-footer');
get_footer(); ?>