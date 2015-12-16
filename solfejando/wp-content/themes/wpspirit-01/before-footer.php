<?php

/**
 * Part betwwen Loop and Footer
 *
 */
 
?>

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