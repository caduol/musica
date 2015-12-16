<?php
/**
 * Template Name: Archives
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
						
						<div class="text-sitemap-page">
						
							<?php while ( have_posts() ) : the_post(); ?>
							
								<?php get_template_part( 'content', 'page' ); ?>
											
							<?php endwhile; // end of the loop. ?>
						
						</div>
						
						
						<?php

						$previous_year = $year = 0;
						$previous_month = $month = 0;
						$ul_open = false;
						
						$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
						
						?>
						
						<?php foreach($myposts as $post) : ?>	
						
							<?php
						
							setup_postdata($post);
						
							$year = mysql2date('Y', $post->post_date);
							$month = mysql2date('n', $post->post_date);
							$day = mysql2date('j', $post->post_date);
						
							?>
						
							<?php if($year != $previous_year || $month != $previous_month) : ?>
						
								<?php if($ul_open == true) : ?>
								</ul>
								<?php endif; ?>
						
								<h3><?php the_time('F Y'); ?></h3>
						
								<ul>
						
								<?php $ul_open = true; ?>
						
							<?php endif; ?>
						
							<?php $previous_year = $year; $previous_month = $month; ?>
						
							<li><span><?php the_time('j F'); ?> - </span> <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
						
						<?php endforeach; ?>
							
							</ul>
	
					</div>
		
				</div>	  <!--	END OF MAIN CONTENT 	-->			
				
		</section>							<!--			END OF WRAPPER WEBSITE 		-->
		
	</section>							<!--			END OF WEBSITE CONTENT 		-->
			
<?php get_footer(); ?>