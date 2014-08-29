<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lyl
 */
?>

	</div><!-- #content -->

	<footer id="footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://underscores.me/', 'lyl' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'lyl' ), 'Underscores' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'lyl' ), 'lyl', '<a href="http://leaot.com/" rel="designer">Yaolong Li</a>'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
