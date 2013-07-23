<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the id=main div and all content after
 *
 * @package AlbinoMouse
 * @since AlbinoMouse 1.0
 */
?>

<?php $options = get_option( 'albinomouse' ); ?>

</div><!-- #main -->

<footer id="footer" class="clear" role="contentinfo">
	<div id="footer-widgets">
		<div id="footer1">
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
		<div id="footer2">
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>
		<div id="footer3">
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
		<div id="footer4">
			<?php dynamic_sidebar( 'footer-4' ); ?>
		</div>
	</div><!-- #footer-widgets -->
	
	<div class="float-right">
		<a href="http://www.udg.edu/" target="_blank">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/udg.png" width="60px" />
		</a>
	</div>

	<div id="footer-info" class="container">
		<?php do_action( 'albinomouse_credits' ); ?>
		<?php if(!isset($options['copyright-text']) or $options['copyright-text'] == '' ) { ?>
				&#169; Copyright <?php echo date("Y"); ?> <?php echo(bloginfo( 'name' ));
			} else {
				echo $options['copyright-text']; 
			} ?>
		<?php if(!isset($options['show-love']) or $options['show-love'] == '1' ) : ?>
			<br/>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'albinomouse' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'albinomouse' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'albinomouse' ), 'albinomouse', '<a href="http://www.pixelstrol.ch/wp-themes/albinomouse" rel="designer">pixelstrolch</a>' ); ?>
		<?php endif ?>	
	</div><!-- #footer-info .container -->

</footer><!-- #footer .clear -->

</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>
</body>
</html>