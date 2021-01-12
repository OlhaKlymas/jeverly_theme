<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jeverly
 */

?>

	<footer id="colophon" class="site-footer">
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'jeverly' ) ); ?><!--">-->
<!--				--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'jeverly' ), 'WordPress' );
//				?>
<!--			</a>-->
<!--			<span class="sep"> | </span>-->
<!--				--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jeverly' ), 'jeverly', '<a href="http://underscores.me/">Underscores.me</a>' );
//				?>
<!--		</div>-->

        <hr class="footer-hr">
        <hr class="footer-hr">

        <div class="footer__wrap">
            <div class="footer__left">
                <div class="footer__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="footer__social">
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">Pinterest</a>
                </div>
            </div>
            <div class="footer__right">
                <?php echo do_shortcode( '[contact-form-7 id="105" title="Contact Form"]' ); ?>
            </div>
        </div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
