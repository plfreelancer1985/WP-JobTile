<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package espyjobs
 */

$espyjobs_options = espyjobs_theme_options();

$show_prefooter = $espyjobs_options['show_prefooter'];

?>

<footer id="colophon" class="site-footer">


	<?php if ($show_prefooter== 1){ ?>
	    <section class="footer-sec">
	        <div class="container">
	            <div class="row">
	            </div>
	        </div>
	    </section>
	<?php } ?>



		<div class="site-info">
		<p><?php esc_html_e(get_bloginfo( 'name', 'display' ));?></p> 
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
