<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
		<?php the_excerpt('<p>', '</p>'); ?>
	</div><!-- .entry-content -->

	<header class="entry-header">
		<?php the_title( '<h3>- ', '</h3>' ); ?>
	</header><!-- .entry-header -->

	
</article><!-- #post-## -->
