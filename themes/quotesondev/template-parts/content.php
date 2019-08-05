<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<header class="entry-header">
	
		<?php the_title( '<h2>— ', '</h2>' ); ?>
	
	</header><!-- .entry-header -->
</article><!-- #post-## -->
