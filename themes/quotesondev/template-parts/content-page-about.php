<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<h1>About</h1>
	<p>Quotes on Dev is a project site for the RED Academy Web Developer Professional program. It’s used to experiment with Ajax, WP API, jQuery, and other cool things.<img draggable="false" class="emoji" alt="🙂" src="https://s.w.org/images/core/emoji/11/svg/1f642.svg"></p>
	<p>This site is heavily inspired by Chris Coyier’s <a href= "https://quotesondesign.com/" target="_blank" rel="noopener">Quotes on Design.</p>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<header class="entry-header">
	
		<?php the_title( '<h2>— ', '</h2>' ); ?>
	
	</header><!-- .entry-header -->
	
</article><!-- #post-## -->
