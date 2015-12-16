<?php
/**
 * Template Name: Contact
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
						
								<h1 class="title-page-contact"><?php the_title(); ?></h1>
								
								<?php if ( get_theme_mod('google_map', '') != '') : ?>
									<div class="map-page-contact">
										<?php echo get_theme_mod('google_map', ''); ?>
									</div>	
								<?php endif; ?>
								
        						<div class="clear"></div>
        						
								<div class="form-page-contact <?php echo get_theme_mod('position_form_contact') ; ?>">
									
									<?php if ( get_theme_mod('shortcode_contact_form', '') != '') {
									
										echo do_shortcode(get_theme_mod('shortcode_contact_form', ''));
										
										}
										
									?>
								
							</div>
							
							<div class="content-page-contact">
							
								<!--	SOCIAL LINKS	-->
								<?php if( ( get_theme_mod('$google1', '') == '1') || (get_theme_mod('twitter') != '') || (get_theme_mod('facebook') != '') || (get_theme_mod('rss') != '') || (get_theme_mod('linkedin') != '') || (get_theme_mod('google') != '') || (get_theme_mod('instagram') != '') || (get_theme_mod('pinterest') != '') || (get_theme_mod('renren') != '') || (get_theme_mod('weibo') != '') || (get_theme_mod('flickr') != '') || (get_theme_mod('xing') != '') || (get_theme_mod('youtube') != '') || (get_theme_mod('vimeo') != '') || (get_theme_mod('tumblr') != '') || (get_theme_mod('custom_icon01') != '') ) : ?>
								<div class="social-links contact-page" >
							
									<?php if ( get_theme_mod('text_social_icons', '') != '') : ?>
									<span class="text_social_icons hidden-phone" style="color: <?php echo get_theme_mod('color_text_social', '#A2A095') ; ?>;"><?php echo get_theme_mod('text_social_icons', '') ; ?></span>
									<?php endif; ?>
										
									<ul>
										
										<?php if ( get_theme_mod('google1') == 'yes') : ?>
										<li class="google">
										<div class="g-plusone" data-size="small" data-count="false" ></div>
										</li>
										<?php endif; ?>
										
										<?php if (get_theme_mod('twitter') != '') : ?>
										<li><a target="_blank" class="icon_twitter" title="Twitter" href="<?php echo get_theme_mod('twitter') ?>"><i class="fa fa-twitter"></i></a></li>
										<?php endif; ?>		
										<?php if (get_theme_mod('facebook') != '') : ?>
										<li><a target="_blank" class="icon_facebook" title="Facebook" href="<?php echo get_theme_mod('facebook') ?>"><i class="fa fa-facebook"></i></a></li>
										<?php endif; ?>
										<?php if (get_theme_mod('rss') != '') : ?>
										<li><a target="_blank" class="icon_rss" title="RSS" href="<?php echo get_theme_mod('rss') ?>"><i class="fa fa-rss"></i></a></li>
										<?php endif; ?>
										<?php if (get_theme_mod('linkedin') != '') : ?>
										<li><a target="_blank" class="icon_linkedin" title="Linkedin" href="<?php echo get_theme_mod('linkedin') ?>"><i class="fa fa-linkedin"></i></a></li>
										<?php endif; ?>
										<?php if (get_theme_mod('google') != '') : ?>
										<li><a target="_blank" class="icon_google" title="Google" href="<?php echo get_theme_mod('google') ?>"><i class="fa fa-google-plus"></i></a></li>
										<?php endif; ?>
										<?php if (get_theme_mod('instagram') != '') : ?>
										<li><a target="_blank" class="icon_instagram" title="Instagram" href="<?php echo get_theme_mod('instagram') ?>"><i class="fa fa-instagram"></i></a></li>
										<?php endif; ?>					
										<?php if (get_theme_mod('pinterest') != '') : ?>
										<li><a target="_blank" class="icon_pinterest" title="Pinterest" href="<?php echo get_theme_mod('pinterest') ?>"><i class="fa fa-pinterest"></i></a></li>
										<?php endif; ?>					
										<?php if (get_theme_mod('renren') != '') : ?>
										<li><a target="_blank" class="icon_renren" title="Renren" href="<?php echo get_theme_mod('renren') ?>"><i class="fa fa-renren"></i></a></li>
										<?php endif; ?>					
										<?php if (get_theme_mod('weibo') != '') : ?>
										<li><a target="_blank" class="icon_weibo" title="Weibo" href="<?php echo get_theme_mod('weibo') ?>"><i class="fa fa-weibo"></i></a></li>
										<?php endif; ?>					
										<?php if (get_theme_mod('xing') != '') : ?>
										<li><a target="_blank" class="icon_xing" title="Xing" href="<?php echo get_theme_mod('xing') ?>"><i class="fa fa-xing"></i></a></li>
										<?php endif; ?>					
										<?php if (get_theme_mod('flickr') != '') : ?>
										<li><a target="_blank" class="icon_flickr" title="Flickr" href="<?php echo get_theme_mod('flickr') ?>"><i class="fa fa-flickr"></i></a></li>
										<?php endif; ?>
										<?php if (get_theme_mod('youtube') != '') : ?>
										<li><a target="_blank" class="icon_youtube" title="Youtube" href="<?php echo get_theme_mod('youtube') ?>"><i class="fa fa-youtube"></i></a></li>
										<?php endif; ?>
										<?php if (get_theme_mod('vimeo') != '') : ?>
										<li><a target="_blank" class="icon_vimeo" title="Vimeo" href="<?php echo get_theme_mod('vimeo') ?>"><i class="fa fa-vimeo-square"></i></a></li>
										<?php endif; ?>
										<?php if (get_theme_mod('tumblr') != '') : ?>
										<li><a target="_blank" class="icon_tumblr" title="Tumblr" href="<?php echo get_theme_mod('tumblr') ?>"><i class="fa fa-tumblr"></i></a></li>
										<?php endif; ?>
						
										<?php if (get_theme_mod('custom_icon01') != '') : ?>
										<li><a target="_blank" class="custom_icon01" title="<?php echo get_theme_mod('custom_icon01_text') ; ?>" href="<?php echo get_theme_mod('custom_icon01') ?>"><img src="<?php echo get_theme_mod('custom_icon01_img') ; ?>" alt="" /></a></li>
										<?php endif; ?>					
						
										<?php if (get_theme_mod('custom_icon02') != '') : ?>
										<li><a target="_blank" class="custom_icon02" title="<?php echo get_theme_mod('custom_icon02_text') ; ?>" href="<?php echo get_theme_mod('custom_icon02') ?>"><img src="<?php echo get_theme_mod('custom_icon02_img') ; ?>" alt="" /></a></li>
										<?php endif; ?>
						
										<?php if (get_theme_mod('custom_icon03') != '') : ?>
										<li><a target="_blank" class="custom_icon03" title="<?php echo get_theme_mod('custom_icon03_text') ; ?>" href="<?php echo get_theme_mod('custom_icon03') ?>"><img src="<?php echo get_theme_mod('custom_icon03_img') ; ?>" alt="" /></a></li>
										<?php endif; ?>					
						
										<?php if (get_theme_mod('custom_icon04') != '') : ?>
										<li><a target="_blank" class="custom_icon04" title="<?php echo get_theme_mod('custom_icon04_text') ; ?>" href="<?php echo get_theme_mod('custom_icon04') ?>"><img src="<?php echo get_theme_mod('custom_icon04_img') ; ?>" alt="" /></a></li>
										<?php endif; ?>
										
									</ul>
										
								</div> 			<!-- 	end of Website icons 		-->
								<?php endif; ?>
							
								<?php the_content(); ?>
								
							</div>
						
						<?php endwhile; // end of the loop. ?>
						
					</div>
		
				</div>	  <!--	END OF MAIN CONTENT 	-->			
				
		</section>							<!--			END OF WRAPPER WEBSITE 		-->
		
	</section>							<!--			END OF WEBSITE CONTENT 		-->
			
<?php get_footer(); ?>