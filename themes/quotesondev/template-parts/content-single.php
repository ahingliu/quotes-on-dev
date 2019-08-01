<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

$source     = get_post_meta( get_the_ID(), '_qod_quote_source', true );
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="entry-title">
		<?php the_title( '<h1 class="entry-title">&mdash; ', '</h1>' ); 
			if ( $source && $source_url ) : ?>
				<span class="source">, <a href="<?php echo $source_url; ?>"><?php echo $source; ?></a></span>
		<?php elseif ( $source):  ?>
			<span class="source">, <?php echo $source; ?>"></span>
			<?php else : ?>
				<span class="source"></span>
			<?php endif; ?>
	</div><!-- .entry-title -->
		
	
</article><!-- #post-## -->
