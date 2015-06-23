<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
	<!--[if lte IE 9]>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(window).scrollTop() > 4000 && $(window).scrollTop() < 5390){
					$('#circles-parallax').fadeOut(100);
				}else{
					$('#circles-parallax').fadeIn(100);
				};
			});
		});
	</script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/bootstrap.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.nav.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.scrollTo.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/filterable.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jPaginate.js'; ?>"></script>	
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/default.js'; ?>"></script>
	<!--<script type="text/javascript" src="<?php //echo get_template_directory_uri().'/js/jquery-1.9.1.min.js'; ?>"></script>-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jssor.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jssor.slider.js'; ?>"></script>
</body>
</html>