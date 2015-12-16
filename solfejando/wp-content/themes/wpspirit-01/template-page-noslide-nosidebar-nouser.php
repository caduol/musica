<?php
/**
 * Template Name: No slideshow - Only content
 *
 * @by JoomSpirit
 * 1.0
 *
 */

get_header(); ?>

	<section class="website-content clearfix zindex10" >
		
		<section class="wrapper-website second clearfix zindex10">
	
				<!--  MAIN COLUMN -->
				<div class="main_content clearfix">
					
					
					<div class="main_component" role="main" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_article') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_article_text') ; ?>"<?php endif; ?> >
										
						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php get_template_part( 'content', 'page' ); ?>
							
							
						<?php endwhile; // end of the loop. ?>


					</div>
		
				</div>	  <!--	END OF MAIN CONTENT 	-->			
				
		</section>							<!--			END OF WRAPPER WEBSITE 		-->
		
	</section>							<!--			END OF WEBSITE CONTENT 		-->					

<?php get_footer(); ?>