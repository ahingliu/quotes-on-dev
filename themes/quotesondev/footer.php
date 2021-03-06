<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<nav id="site-navigation" class="footer-navigation" role="navigation">
                    
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
				<p class="pfooter">Brought to you by <a href="https://github.com/ahingliu/quotes-on-dev">Alex Hing Liu</a></p>	
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		
		<?php wp_footer(); ?>

	</body>
</html>
