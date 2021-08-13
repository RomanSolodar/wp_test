<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casino
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container aligncenter text-center">
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'casino' ) ); ?><!--">-->
<!--				--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'casino' ), 'WordPress' );
//				?>
<!--			</a>-->
<!--			<span class="sep"> | </span>-->
<!--				--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'casino' ), 'casino', '<a href="http://underscores.me/">Roman Solodar</a>' );
//				?>
            <p>
                18+ Our site offers different selections of social games. This website is free to play and all games won in this website cannot be converted into money currency. This site is for a mature audience 18+, no money or prizes can be won it is purely for free to play only.<br>
                <div class="aligncenter age">18+</div>
                <p>
                    <a href="/privacy-policy/">Privacy Policy</a><br>
                    <a href="/terms-conditions/">Terms & Conditions</a><br>
                    <a href="/cookie-policy/">Cookie Policy</a><br>
                </p>
            </p>
		</div>
        <!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
