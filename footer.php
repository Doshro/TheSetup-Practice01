<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheSetup-Practice01
 */

?>


	<footer id="colophon" class="site-footer">

		<div class="footer-box">
		<div class="menu-items">

		<?php
            wp_nav_menu(array(
                'menu' => 'Nav Menu',
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu',
                'menu_id' => 'footer-id'
            ))
        ?>


			<!-- <a href="home">Home</a>
			<a href="about">About</a>
			<a href="contact">Contact</a>  -->
		</div>
		
		<div class="social-icons">
			<p> Find us on:</p>
			<a href="https://www.facebook.com"><img src="http://thesetuppractice01.local/wp-content/uploads/2022/10/facebook.png" alt=""></a>
			<a href="https://www.twitter.com"><img src="http://thesetuppractice01.local/wp-content/uploads/2022/10/twitter-1.png" alt=""></a>
			<a href="https://www.linkedin.com"><img src="http://thesetuppractice01.local/wp-content/uploads/2022/10/linkedin.png" alt=""></a>
			<a href="https://www.instagram.com"><img src="http://thesetuppractice01.local/wp-content/uploads/2022/10/instagram.png" alt=""></a>
		</div>
		</div>
		<p class="copy-right">&copy copy right, Ruku Bhattarai 2022</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
