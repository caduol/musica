<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @by JoomSpirit
 * 1.0
 */

get_header(); ?>

	<section class="website-content clearfix zindex10" >
		
		<section class="wrapper-website second clearfix zindex10">
	
			<!--  MAIN COLUMN -->
			<div class="main_content clearfix">
					
				<div class="main_component" role="main" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_article') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_article_text') ; ?>"<?php endif; ?> >

					
					<article id="post-0" class="post error404 no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Sorry, this page doesn&rsquo;t exist', 'joomspirit' ); ?></h1>
							<h2 style="margin: -10px 0 40px 0;padding-top:0;"><?php _e( 'error 404', 'joomspirit' ); ?></h2>
						</header>
		
						<div class="entry-content">
							<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'joomspirit' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->
					
				</div>
		
			</div>	  <!--	END OF MAIN CONTENT 	-->				
				
		</section>							<!--			END OF WRAPPER WEBSITE 		-->
		
	</section>							<!--			END OF WEBSITE CONTENT 		-->	

<?php get_footer(); ?>