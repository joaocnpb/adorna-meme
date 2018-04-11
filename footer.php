<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adornacoracoes
 */

?>

	<!--<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'adornacoracoes' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'adornacoracoes' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'adornacoracoes' ), 'adornacoracoes', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
<footer>
    <div class="row">
            <div class="columns large-4">
               <h3>adorna corações</h3>
               <p>Centro Comercial Miguel Bombarda<BR>
               Rua Miguel Bombarda, 285, Loja 10<BR>
               4050-379 Porto<br>
               Portugal</p>
               <h3>contactos</h3>
               <p>00351 964 666 863<br>
                estefaniar.dealmeida@sapo.pt</p>
                <a href="http://facebook.com/adorna-coracoes" target="_blank">Facebook</a>
                <h3 style="margin-top:28px !important;">webdesign e desenvolvimento</h3>
                <p>João Barroso</p>
            </div>
            <div class="columns large-3">
                <?php the_custom_logo();?>
            </div>
        </div>
</footer>

<?php wp_footer(); ?>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/adornacoracoes/bower_components/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/adornacoracoes/bower_components/what-input/dist/what-input.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/adornacoracoes/bower_components/foundation-sites/dist/js/foundation.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/adornacoracoes/js/min/app-min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/adornacoracoes/plugins/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/adornacoracoes/js/scripts.js" type="text/javascript"></script>
</body>
</html>
