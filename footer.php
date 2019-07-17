<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecapp
 */

?>

	


<!-- footer -->
	<div class="footer">
		<div class="container">
			<h3>Sign up for our newsletter</h3>
			<p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus 
				tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
			<div class="footer-contact">
				<form>
					<input type="text" placeholder="Enter your email to update" required=" ">
					<input type="submit" value="">
				</form>
			</div>
			<div class="footer-grids">
			<?php if ( is_active_sidebar( 'footer-widgets-1' ) ) : ?>	
						<?php dynamic_sidebar( 'footer-widgets-1' ); ?>
				<?php endif; ?>
				<div class="col-md-2 footer-grid">
				<?php if ( is_active_sidebar( 'footer-widgets-2' ) ) : ?>	
						<?php dynamic_sidebar( 'footer-widgets-2' ); ?>
				<?php endif; ?>
				</div>
				<div class="col-md-2 footer-grid">
				<?php if ( is_active_sidebar( 'footer-widgets-3' ) ) : ?>	
						<?php dynamic_sidebar( 'footer-widgets-3' ); ?>
				<?php endif; ?>
				</div>
				<div class="col-md-2 footer-grid">
				<?php if ( is_active_sidebar( 'footer-widgets-4' ) ) : ?>	
						<?php dynamic_sidebar( 'footer-widgets-4' ); ?>
				<?php endif; ?>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-left">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/p1.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-copy">
				<p>&copy Election. All rights reserved | Design by <a href="http://w3layouts.com/">Radha Seth</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
		<!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
<!-- for bootstrap working -->
<?php wp_footer(); ?>
	 
<!-- //for bootstrap working -->
</body>
</html>