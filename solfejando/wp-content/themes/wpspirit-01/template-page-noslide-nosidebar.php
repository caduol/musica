<?php
/**
 * Template Name: No slideshow - No Sidebar
 *
 * @by JoomSpirit
 * 1.0
 *
 */

get_header(); ?>

	<?php if( ( is_home() || is_front_page() ) && (( get_theme_mod('title_slogan', '') != '') || ( get_theme_mod('slogan', '') != '')) ) : ?>
	<section class="module-slogan zindex10" >
		<div class="wrapper-website zindex10" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_slogan') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_slogan_text') ; ?>"<?php endif; ?> >

			<?php if ( get_theme_mod('title_slogan', '') != '' ) : ?><span class="title-slogan "><span><?php echo get_theme_mod('title_slogan', '') ; ?></span></span><?php endif ; ?>
			<?php if ( get_theme_mod('slogan', '') != '' ) : ?><span class="text-slogan "><span><?php echo get_theme_mod('slogan', '') ; ?></span></span><?php endif ; ?>
						
		
		</div>
	</section>
	<?php endif; ?>	

	<section class="website-content clearfix zindex10" >
		
		<section class="wrapper-website second clearfix zindex10">
	
			<?php if ( is_active_sidebar( 'top' ) ) : ?>
			<aside class="top-module-position" role="complementary" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_top') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_top_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'top' ); ?>
			</aside>
			<?php endif; ?>
		
				<!--  MAIN COLUMN -->
				<div class="main_content clearfix">
					
					<!--  USER 1, 2, 3 -->
					<?php if ( is_active_sidebar( 'user1' ) || is_active_sidebar( 'user2' ) || is_active_sidebar( 'user3' )  ) : ?>
					<aside class="users_top clearfix" role="complementary" >
																
						<?php if ( is_active_sidebar( 'user1' ) ) : ?>
						<div class="user1" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user1') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user1_text') ; ?>"<?php endif; ?> >
							<?php dynamic_sidebar( 'user1' ); ?>
						</div>
						<?php endif; ?>
											
						<?php if ( is_active_sidebar( 'user3' ) ) : ?>
						<div class="user3" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user3') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user3_text') ; ?>"<?php endif; ?> >
							<?php dynamic_sidebar( 'user3' ); ?>
						</div>
						<?php endif; ?>
					
						<?php if ( is_active_sidebar( 'user2' ) ) : ?>
						<div class="user2" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user2') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user2_text') ; ?>"<?php endif; ?> >
							<?php dynamic_sidebar( 'user2' ); ?>
						</div>
						<?php endif; ?>
											
					</aside>
					<?php endif; ?>  <!--	END OF USERS TOP	-->
					
					<div class="main_component" role="main" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_article') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_article_text') ; ?>"<?php endif; ?> >
										
						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php get_template_part( 'content', 'page' ); ?>
							
							
						<?php endwhile; // end of the loop. ?>


					</div>
					
					<!--  USER 4, 5, 6 -->
					<?php if ( is_active_sidebar( 'user4' ) || is_active_sidebar( 'user5' ) || is_active_sidebar( 'user6' )  ) : ?>
					<aside class="users_bottom clearfix" role="complementary" >
																
						<?php if ( is_active_sidebar( 'user4' ) ) : ?>
						<div class="user4" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user4') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user4_text') ; ?>"<?php endif; ?>>
							<?php dynamic_sidebar( 'user4' ); ?>
						</div>
						<?php endif; ?>
											
						<?php if ( is_active_sidebar( 'user6' ) ) : ?>
						<div class="user6" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user6') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user6_text') ; ?>"<?php endif; ?> >
							<?php dynamic_sidebar( 'user6' ); ?>
						</div>
						<?php endif; ?>
					
						<?php if ( is_active_sidebar( 'user5' ) ) : ?>
						<div class="user5" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_user5') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_user5_text') ; ?>"<?php endif; ?> >
							<?php dynamic_sidebar( 'user5' ); ?>
						</div>
						<?php endif; ?>
											
					</aside>
					<?php endif; ?>  <!--	END OF USERS BOTTOM	-->
					
					<div class="clr"></div>
		
				</div>	  <!--	END OF MAIN CONTENT 	-->
				

			<?php if ( is_active_sidebar( 'bottom' ) ) : ?>
			<aside class="bottom-module-position" role="complementary" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_bottom') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_bottom_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'bottom' ); ?>
			</aside>
			<?php endif; ?>				
				
		</section>							<!--			END OF WRAPPER WEBSITE 		-->
		
	</section>							<!--			END OF WEBSITE CONTENT 		-->					

<?php get_footer(); ?>