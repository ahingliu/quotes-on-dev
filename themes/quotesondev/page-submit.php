<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="quote-sub-form-section container">
				<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php if ( is_user_logged_in() && current_user_can( 'publish_posts' ) ) : ?>

				<form class="s-quote-f" id="sub-quote-form">

				<div>
					<label for="author-quote"> Author of Quote </label>
					<input type="text" name="author_quote" id="author-quote">
				</div>

				<div>
					<label for="content-quote"> Quote </label>
					<textarea type="text" name="content_quote" id="content-quote" rows="3" cols="20"></textarea>
				</div>

				<div>
					<label for="quote-source"> Where did you find this quote? (e.g. book name) </label>
					<input type="text" name="quote_source" id="quote-source">
				</div>

				<div>
					<label for="quote-source-url"> Provide the URL of the quote source, if available. </label>
					<input type="url" name="quote_source_url" id="quote-source-url">
				</div>

				<div>
				<input id="submit" type="submit" value="Submit Quote ">
				</div>

				</form> <!-- Nem quote submission for if user is logged in -->

				<?php else : ?>
					<p>Sorry, you must be logged in to submit a quote.</p>
				<?php echo sprintf( '<a href="%1s">%2s</a>', esc_url( wp_login_url() ), 'Click here to login' ); ?>

				<?php endif; ?>
			</section>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
