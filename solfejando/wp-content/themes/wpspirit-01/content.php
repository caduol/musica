<?php

/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
 
?>
	
	<?php 	
		
		$columns_posts = get_theme_mod('columns_posts', '1');
		if ( ( ! is_singular() ) && ( is_category( get_theme_mod('three_columns', 'none') )) ) { $columns_posts = '3'; }
		if ( ( ! is_singular() ) && ( is_category( get_theme_mod('two_columns', 'none') )) ) { $columns_posts = '2'; }
		if ( ( ! is_singular() ) && ( is_category( get_theme_mod('single_column', 'none') )) ) { $columns_posts = '1'; }
	
	?>		
			
			
	<?php if ( ( ! is_singular() ) && ( $columns_posts == '3' ) ) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'three_columns_layout' ); ?> >
	<?php elseif ( ( ! is_singular() ) && ( $columns_posts == '2' ) ) : ?>	
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'two_columns_layout' ); ?> >
	<?php else : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php endif; ?>
	
	
	
		<header class="entry-header">

			<?php edit_post_link( __( 'Edit', 'joomspirit' ), '<span class="button edit-link">', '</span>' ); ?>
						
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<?php endif; // is_single() ?>
			
			<?php if ( ! is_singular() ) : // Display meta in the header if not Single post, Page or Attachment ?>
				<div class="meta">
					<?php the_time('M j, Y | ');  _e('Posted by ','joomspirit');  the_author_posts_link(); ?> <?php _e('in ','joomspirit');  the_category(', ') ?> | <?php comments_popup_link(__('0 ','joomspirit'), __('1 ','joomspirit'), '% '.__('','joomspirit')); ?><i class="fa fa-comment-o"></i>
				</div>
			<?php endif; ?>
			
		</header><!-- .entry-header -->
		
		<?php if ( ! post_password_required() && ! is_attachment() ) {
			
			if ( ( ! is_singular() ) && ( $columns_posts == '1' ) ) { // Display Thumbnail if Single column AND not Single post, Page or Attachment
	
				echo '<div class="article_thumb_image "><a href="'; echo the_permalink(); echo '" >';
				the_post_thumbnail('thumbnail');
				echo '</a></div>';
				}
	
			else if ( ! is_singular() ) {							// Display Large image with link if multiple post columns
			
				echo '<div class="article_large_image "><a href="'; echo the_permalink(); echo '" >';
				the_post_thumbnail('large');
				echo '</a></div>';
				}
			
			
			else {													// Display Large image if Single post, Page or Attachment
				echo '<div class="article_large_image ">';
				the_post_thumbnail('large');
				echo '</div>';
				}		
			
		}
		?>

		<?php if ( ! is_singular() ) : // Display Excerpts if not Single post, Page or Attachment ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'joomspirit' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'joomspirit' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
		
			<?php the_tags( '<div class="tag-links">', '', '</div>' ); ?>
			
			<?php if ( is_singular() ) : // Display meta in the footer if Single post, Page or Attachment ?>
				<div class="meta">
					<?php the_time('M j, Y | ');  _e('Posted by ','joomspirit');  the_author_posts_link(); ?> <?php _e('in ','joomspirit');  the_category(', ') ?> | <?php comments_popup_link(__('0 comments','joomspirit'), __('1 comment','joomspirit'), '% '.__('comments','joomspirit')); ?>

				</div>
			<?php endif; ?>
			
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'joomspirit_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'joomspirit' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'joomspirit' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
		
	</article><!-- #post -->
