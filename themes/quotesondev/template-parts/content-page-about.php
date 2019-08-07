<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>
<?php the_title( '<h2> ', '</h2>' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<header class="entry-header">
	
		
	
	</header><!-- .entry-header -->
	
</article><!-- #post-## -->
