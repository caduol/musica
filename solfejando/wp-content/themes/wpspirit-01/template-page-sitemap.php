<?php
/**
 * Template Name: Sitemap
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
						
						
						<h2 class="entry-title title-sitemap"><span><?php _e('Pages', 'joomspirit'); ?></span></h2>
						<ul class="check"><?php wp_list_pages("title_li=" ); ?></ul>
						<h2 class="entry-title title-sitemap"><span><?php _e('RSS Feeds', 'joomspirit'); ?></span></h2>
						<ul class="check">
						<li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>"><?php _e('Main RSS' , 'joomspirit'); ?></a></li>
						<li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comment Feed', 'joomspirit'); ?></a></li>
						</ul>
						<h2 class="entry-title title-sitemap"><span><?php _e('Categories', 'joomspirit'); ?></span></h2>
						<ul class="check"><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>
						<h2 class="entry-title title-sitemap"><span><?php _e('All Blog Posts', 'joomspirit'); ?></span></h2>
						<ul class="check"><?php $archive_query = new WP_Query('showposts=1000'); while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
						<li>
						<a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_title(); ?></a>
						(<?php comments_number('0', '1', '%'); ?>)
						</li>
						<?php endwhile; ?>
						</ul>
	
					</div>
		
				</div>	  <!--	END OF MAIN CONTENT 	-->			
				
		</section>							<!--			END OF WRAPPER WEBSITE 		-->
		
	</section>							<!--			END OF WEBSITE CONTENT 		-->
			
<?php get_footer(); ?>