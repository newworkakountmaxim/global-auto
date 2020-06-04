<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package global-auto
 */

?>
<style>
    footer .site-info{
        display:flex;
        justify-content: center;
    }
    .footer{
        display:flex;
        background: #545454;
        color: #fff;
        padding: 20px;
    }
    .footer-item {
        width:25%;
        text-align: center;
    }
    .footer-item .item{
        padding:15px
    }
</style>
<div class="footer">
    <div class="footer-item">
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
    </div>
    <div class="footer-item">
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
    </div>
    <div class="footer-item">
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
    </div>
    <div class="footer-item">
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
        <div class="item">Adres Menu etc</div>
    </div>
</div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'global-auto' ), 'global-auto', '<a href="https://www.linkedin.com/in/max-yashchenko/">Maxim Yashchenko</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
