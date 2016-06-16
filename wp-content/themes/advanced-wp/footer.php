<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="container">
				<?php
					global $opt_lexander_redux;

					if ( $opt_lexander_redux ) { ?>
					<div class="footer-widgets-area">
						<?php $footer_columns = $opt_lexander_redux['footer_columns']; ?>
						<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) { ?>
							<div class="sidebar-footer footer-columns footer-<?php echo $footer_columns ?>-columns clearfix">
								<?php
								for ( $count = 1; $count <= $footer_columns; $count++ ) {
									?>
									<div id="footer-<?php echo $count ?>" class="footer-<?php echo $count ?> footer-column widget-area" role="complementary">
										<?php dynamic_sidebar('footer-'.$count);?>
									</div>
									<?php
								}
								?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
