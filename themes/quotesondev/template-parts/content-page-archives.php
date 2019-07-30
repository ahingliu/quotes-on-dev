<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
	
<section class="archives-display container">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<div class="authors clearfix">
		<h2>Quote Authors</h2>
		<ul>
			<?php
			$myposts = get_posts( 'posts_per_page=800' );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
			<?php endforeach; wp_reset_postdata();?>
		</ul>	
	</div>
	<div class="categories clearfix">
		<h2>Categories</h2>
		<ul>
			<?php
			$categories = get_categories( array(
				'orderby' => 'name',
				'parent'  => 0
			) );
			 
			foreach ( $categories as $category ) {
				printf( '<a href="%1$s">%2$s</a><br />',
					esc_url( get_category_link( $category->term_id ) ),
					esc_html( $category->name )
				);
			}?>
		</ul>	
	</div>
	<div class="tags clearfix">
		<h2>Tags</h2>
		<ul>
			<?php
			$tags = get_tags( array(
				'orderby' => 'name',
				'parent'  => 0
			) );
			 
			foreach ( $tags as $tags ) {
				printf( '<a href="%1$s">%2$s</a><br />',
					esc_url( get_category_link( $tags->term_id ) ),
					esc_html( $tags->name )
				);
			}?>
		</ul>	
	</div>
	
</section>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
