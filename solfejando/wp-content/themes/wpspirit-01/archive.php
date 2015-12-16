<?php
/**
 * The Template for Archives
 *
 * @by JoomSpirit
 * 1.0
 *
 */

get_header();
get_template_part('after-header'); ?>

	<?php if ( have_posts() ) : ?>
		<header class="archive-header">
			<h1 class="archive-title"><?php
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'joomspirit' ), '<span>' . get_the_date() . '</span>' );
				elseif ( is_month() ) :
					printf( __( 'Monthly Archives: %s', 'joomspirit' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'joomspirit' ) ) . '</span>' );
				elseif ( is_year() ) :
					printf( __( 'Yearly Archives: %s', 'joomspirit' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'joomspirit' ) ) . '</span>' );
				else :
					_e( 'Archives', 'joomspirit' );
				endif;
			?></h1>
		</header><!-- .archive-header -->
		
		<div class="clear"></div>
		
		<?php
		/* Start the Loop */
		
		$i = 0;		// variable to positionning articles in several columns
		$columns_posts = get_theme_mod('columns_posts', '1');
		if ( ( ! is_singular() ) && ( is_category( get_theme_mod('three_columns', 'none') )) ) { $columns_posts = '3'; }
		if ( ( ! is_singular() ) && ( is_category( get_theme_mod('two_columns', 'none') )) ) { $columns_posts = '2'; }
		if ( ( ! is_singular() ) && ( is_category( get_theme_mod('single_column', 'none') )) ) { $columns_posts = '1'; }
			
		while ( have_posts() ) : the_post();
			
			$i += 1;
			
			/* Include the post format-specific template for the content. If you want to
			 * this in a child theme then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
			
			if ( $columns_posts != '' ) { $number_columns = $columns_posts; } else { $number_columns = 1 ;}
			if ($i % $number_columns == 0) echo '<div class="clear"></div>'; //		add a "clear : both" DIV under each even article 

		endwhile;

		joomspirit_content_nav( 'nav-below' );
		?>

	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>


<?php
get_template_part('before-footer');
get_footer(); ?>