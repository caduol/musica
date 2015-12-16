<?php
/**
 * The template used for displaying page content in page.php
 *
 * @by JoomSpirit
 * 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="entry-header">
			
			<?php edit_post_link( __( 'Edit', 'joomspirit' ), '<span class="button edit-link">', '</span>' ); ?>
			
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
			<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) {
				echo '<div class="article_large_image ">';
				the_post_thumbnail('large');
				echo '</div>';
			} ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'joomspirit' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

	</article><!-- #post -->
