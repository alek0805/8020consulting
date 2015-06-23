<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<!-- Home -->
<?php query_posts(array('orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => 'page')); ?>
<?php while (have_posts()) : the_post(); ?>
	<?php $slug = basename(get_permalink()); ?>
	<?php if ($slug == "home"): ?>
	<!-- Home -->
	<section data-speed="4" data-type="background" class='scrolling-section' id="home">
		<div class="content">
			<img src="<?php echo get_template_directory_uri(); ?>/images/8020-consulting.png" width="338" height="128" alt="8020 Consulting"/>
			<p>
				<?php if (get_field("intro_paragraph")): ?>
					<?php the_field('intro_paragraph'); ?>
				<?php endif; ?>
			</p>
			<h1>
				<?php if (get_field("big_text")): ?>
					<?php the_field('big_text'); ?>
				<?php endif; ?>
			</h1>
			<ul>
				<li>David Lewis</li>
				<li class="middle">Kelly Patchett</li>
				<li>Shawn Spears</li>
			</ul>
			<small>* Yes: we mean provably, not probably.</small>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bt/scroll-down-big.jpg" width="124" height="87" alt="Scroll Down Big" id="scroll-big"/>
	</section>
	<?php elseif($slug == "overview"): ?>
	<!-- Overview -->
	<section class='scrolling-section' id="overview">
		<div class="content">
			<div class="blue-bar">
				<h1>
					<?php if (get_field("big_text")): ?>
						<?php the_field('big_text'); ?>
					<?php endif; ?>
				</h1>
				<h2>
					<?php if (get_field("intro_text")): ?>
						<?php the_field('intro_text'); ?>
					<?php endif; ?>
				</h2>
			</div>
			<?php the_content(); ?>
		</div>
		<footer class="contact-bar-footer">
			<p>To learn more, <a href="#contact">contact us today.</a></p>
		</footer>
	</section>
	<?php elseif($slug == "the-work-we-do"): ?>
	<!-- The Work We Do -->
	<section class='scrolling-section' id="the-work-we-do">
		<div class="content">
			<div class="green-bar">
				<h1>
					<?php if (get_field("big_text")): ?>
						<?php the_field('big_text'); ?>
					<?php endif; ?>
				</h1>
				<h2>
					<?php if (get_field("intro_text")): ?>
						<?php the_field('intro_text'); ?>
					<?php endif; ?>
				</h2>
			</div>
			<?php the_content(); ?>
		</div>
		<footer class="contact-bar-footer">
			<p>To learn more about our full service offering, <a href="#contact">Contact us today.</a></p>
		</footer>
	</section>
	<?php elseif($slug == "why-we-do-it"): ?>
	<!-- Why We Do It -->
	<section class='scrolling-section' id="why-we-do-it">
		<div class="content">
			<div class="blue-bar">
				<h1>
					<?php if (get_field("big_text")): ?>
						<?php the_field('big_text'); ?>
					<?php endif; ?>
				</h1>
				<h2>
					<?php if (get_field("intro_text")): ?>
						<?php the_field('intro_text'); ?>
					<?php endif; ?>
				</h2>
			</div>
			<?php the_content(); ?>
		</div>
		<div id="lamp" class="flyobject" data-speed='4'></div>
		<footer class="contact-bar-footer">
			<p>Let's talk. <a href="#contact">Contact us today.</a></p>
		</footer>
	</section>	
	<?php elseif($slug == "our-team"): ?>
	<!-- Meet Our Team -->
	<section class='scrolling-section' id="our-team">
		<div class="content">
			<h1>Meet our team</h1>
			<ul id="cat-team-menu" style="display:none">
				<li><a href="#all">ALL</a></li>
				<li><a href="#management" rel="management">MANAGEMENT</a></li>
				<li><a href="#analyst" rel="analyst">ANALYSTS</a></li>
				<li><a href="#consultant" rel="consultant">CONSULTANTS</a></li>						
			</ul>
			<ul id="team-list">
				<?php global $post; ?>
				<?php $team_members = get_posts(array('numberposts' => 0, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => array('team_members'))); ?> 
				<?php foreach($team_members as $post): ?>
				<?php 
					setup_postdata($post);
					$post_categories = wp_get_post_categories(get_the_ID());
					$cats = array();
					foreach($post_categories as $c):
						$cat = get_category($c);
						$cats[] = $cat->slug;
					endforeach;
					$stringclass = "";
					foreach($cats as $classname):
						$stringclass = $stringclass." ".$classname;
					endforeach;
				?>
				<li class="all <?php echo $stringclass; ?>">
					<a href="#detail"><img src="<?php the_field('photo_thumbnail'); ?>" width="102" height="142" alt="<?php the_title(); ?>"/></a>
					<div class="ballon">
						<div class="arrow"></div>
						<h4><?php the_title(); ?><small><?php the_field('title_position'); ?></small></h4>
						<p><?php the_field('funny_intro'); ?></p>
						<div class="full_bio" rel="<?php the_field('photo'); ?>">
							<?php the_field('full_bio'); ?>
						</div>
						<!-- <a href="#detail">Get to know me</a> -->
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="detail">
			<div class="center">
				<h3><span><!-- Load by JS --></span><a href="#close" class="close">X</a></h3>
				<div>
					<!-- Load by JS -->
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-big-example.png" width="456" height="314" alt="Our Team Big Example" id="big-profile-pic"/>
			</div>					
		</div>
		<footer class="contact-bar-footer">
			<p>Interested in joining our team? To learn more, <a href="#apply">apply online here.</a></p>
		</footer>
		<h1 id="s-t-content">Meet The Team</h1>
		<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 700px; overflow: hidden;">
        <!-- Slides Container -->
	        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 700px; overflow: hidden;">
	            <?php global $post; ?>
	            <?php $m_count = 0; ?>
				<?php $team_members = get_posts(array('numberposts' => 0, 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 10, 'post_type' => array('team_members'))); ?> 
				<?php foreach($team_members as $post): ?>
				<?php 
					setup_postdata($post);
					$m_count = $m_count + 1;
					$post_categories = wp_get_post_categories(get_the_ID());
					$cats = array();
					foreach($post_categories as $c):
						$cat = get_category($c);
						$cats[] = $cat->slug;
					endforeach;
					$stringclass = "";
					foreach($cats as $classname):
						$stringclass = $stringclass." ".$classname;
					endforeach;
				?>
				<div class="all <?php echo $stringclass; ?>">
					<a href="#detail"><img src="<?php the_field('photo_thumbnail'); ?>" width="456" height="314" alt="<?php the_title(); ?>"/></a>
					<div class="ballon">
						<div class="arrow"></div>
						<h4><?php the_title(); ?> <br><small><?php the_field('title_position'); ?></small></h4>
						<p><?php the_field('funny_intro'); ?></p>
						<div class="full_bio" rel="<?php the_field('photo'); ?>">
							<?php the_field('full_bio'); ?>
						</div>
						<!-- <a href="#detail">Get to know me</a> -->
					</div>
				</div>
				<?php endforeach; ?>
	        </div>
	        
	        <!--#region Arrow Navigator Skin Begin -->
	        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
	        <style>
	            /* jssor slider arrow navigator skin 13 css */
	            /*
	            .jssora13l                  (normal)
	            .jssora13r                  (normal)
	            .jssora13l:hover            (normal mouseover)
	            .jssora13r:hover            (normal mouseover)
	            .jssora13l.jssora13ldn      (mousedown)
	            .jssora13r.jssora13rdn      (mousedown)
	            */
	            .jssora13l, .jssora13r {
	                display: block;
	                position: absolute;
	                /* size of arrow element */
	                width: 40px;
	                height: 50px;
	                cursor: pointer;
	                background: url(../img/a13.png) no-repeat;
	                overflow: hidden;
	            }
	            .jssora13l { background-position: -10px -35px; }
	            .jssora13r { background-position: -70px -35px; }
	            .jssora13l:hover { background-position: -130px -35px; }
	            .jssora13r:hover { background-position: -190px -35px; }
	            .jssora13l.jssora13ldn { background-position: -250px -35px; }
	            .jssora13r.jssora13rdn { background-position: -310px -35px; }
	        </style>
	        <!-- Arrow Left -->
	        <span u="arrowleft" class="jssora13l" style="top: 123px; left: 30px;">
	        </span>
	        <!-- Arrow Right -->
	        <span u="arrowright" class="jssora13r" style="top: 123px; right: 30px;">
	        </span>
	        <!--#endregion Arrow Navigator Skin End -->
	        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
	    </div>
	</section>
	<?php elseif($slug == "we-believe"): ?>
	<!-- We Believe -->
	<section class='scrolling-section' id="we-believe">
		<div class="content">
			<div class="blue-bar">
				<h1>
					<?php if (get_field("big_text")): ?>
						<?php the_field('big_text'); ?>
					<?php endif; ?>
				</h1>
				<h2>
					<?php if (get_field("intro_text")): ?>
						<?php the_field('intro_text'); ?>
					<?php endif; ?>
				</h2>
			</div>
			<?php the_content(); ?>
		</div>
		<footer class="contact-bar-footer">
			<p>To learn more, <a href="#contact">Contact us today.</a></p>
		</footer>
	</section>	
	<?php elseif($slug == "why-work-here"): ?>		
	<!-- Why Work Here -->
	<section class='scrolling-section' id="why-work-here">
		<div class="content">
			<div class="green-bar">
				<h1>
					<?php if (get_field("big_text")): ?>
						<?php the_field('big_text'); ?>
					<?php endif; ?>
				</h1>
				<h2>
					<?php if (get_field("intro_text")): ?>
						<?php the_field('intro_text'); ?>
					<?php endif; ?>
				</h2>
			</div>
			<div class="side">
				<?php if (get_field("main_points")): ?>
					<?php the_field('main_points'); ?>
				<?php endif; ?>
			</div>
			<ul class="side icons">
				<?php global $post; ?>
				<?php $icons = get_posts(array('numberposts' => 0, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => array('why_work_here'))); ?> 
				<?php foreach($icons as $post): ?>
				<li>
					<img src="<?php the_field('icon'); ?>" width="104" height="104" alt="<?php the_title(); ?>"/>
					<?php the_title(); ?>
					<div class="ballon">
						<div class="arrow"></div>
						<h4 class="<?php the_field('title_color'); ?>"><?php the_title(); ?></h4>
						<p><?php the_field('description'); ?></p>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php the_content(); ?>
		</div>
		<footer class="contact-bar-footer">
			<p>Interested in joining our team? To learn more, <a href="#apply">apply online here.</a></p>
		</footer>
	</section>

	
	<?php elseif($slug == "why-work-with-us"): ?>
	<!-- Why Work With Us -->
	<section class='scrolling-section' id="why-work-with-us">
		<div class="content">
			<div class="green-bar">
				<h1>
					<?php if (get_field("big_text")): ?>
						<?php the_field('big_text'); ?>
					<?php endif; ?>
				</h1>
				<h2>
					<?php if (get_field("intro_text")): ?>
						<?php the_field('intro_text'); ?>
					<?php endif; ?>
				</h2>
			</div>
			<?php the_content(); ?>
		</div>
		<footer class="contact-bar-footer">
			<p>Let's meet. <a href="#contact">Contact us today.</a></p>
		</footer>
	</section>
	<?php elseif($slug == "contact"): ?>
	<!-- Contact -->
	<section class='scrolling-section' id="contact">
		<div class="content">
			<div class="info">
				<h1>
					Contact Us
				</h1>
				<span>We`d love to hear from you, and discuss any opportunities<br>and ideas. We are available 9am - 5pm Monday - Friday.</span>
				<p>
					<?php the_field('phone'); ?><br/>
					<a href="mailto:<?php echo the_field('email'); ?>"><?php the_field('email'); ?></a>
				</p>
				<h2>
					<?php the_field('headquarter_title'); ?>
				</h2>
				<address>
					<?php the_field('headquarter_address'); ?>
				</address>
				<h2><?php the_field('branch_title'); ?></h2>
				<address>
					<?php the_field('branch_address'); ?>
				</address>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="127" title="Contact Form"]'); ?>
			<!-- <form action="index_submit" method="get">
				<input type="text" name="name" value="" placeholder="Name" id="name"/>
				<input type="text" name="email" value="" placeholder="E-mail" id="email"/>
				<input type="text" name="Phone" value="" placeholder="Phone (optional)" id="phone"/>
				<textarea name="message" placeholder="Your Message"></textarea>
				<input type="submit" value="SUBMIT" class="submit"/>
			</form> -->
		</div>
	</section>
	<?php endif; ?>
<?php endwhile; ?>
<div class = "b-footer">
	<img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" width="auto" height="auto" alt="Footer Logo" id="footer-logo"/>
</div>
<div id="apply-overlay"></div>
<div id="apply">
	<span class="arrow"></span>
	<a href="#close" class="close">X</a>
	<div>
		<h4>Applying is easy...</h4>
		<ul>
			<li>Send a copy of your resume in Word or PDF format.</li>
			<li>Let us know the best time to reach you.</li>
			<li>If you are relocating to Southern California and live elsewhere or you have specific ideas or expectations on compensation, please note that in your email.</li>
		</ul>
		<ul>
			<li>Through the process you will meet with multiple Key Executives to give you a cross functional perspective and full understanding of the opportunity and what is expected.</li>
			<li>All candidates must successfully pass an interview with the firm’s CEO and Founder.</li>
			<li>Be prepared to come to the interview prepared to speak in specific terms about your individual contributions that have directly impacted your company on a department and enterprise level.  These should include quantifiable examples of functional expertise, consulting skills, teamwork, and leadership.</li>
			<li>It’s recommended that you come to the interview with a written list of the above to best facilitate the discussion.</li>
			<li>Showcase your communication and executive presence.</li>
			<li>Share your core values, career goals and objectives.</li>
			<li>Demonstrate your preparedness by coming with thoughtful questions.</li>
		</ul>
	</div>
	<?php echo do_shortcode('[contact-form-7 id="128" title="Apply Now"]'); ?>
	<!-- <form action="index_submit" method="post">
		<input type="text" name="name" value="" id="name" placeholder="Name"/>
		<input type="text" name="email" value="" id="email" placeholder="E-mail"/>
		<input type="text" name="phone" value="" id="phone" placeholder="Phone"/>
		<input type="file" name="resume" value="" id="resume" placeholder="Resume"/>	
		<textarea name="message" id="message" placeholder="Your Message"></textarea>					
		<input type="submit" value="SUBMIT" class="submit"/>
	</form> -->
</div>
<svg id="circles-parallax" data-speed='3' class="flyobject" xmlns="http://www.w3.org/2000/svg" pointer-events="none">
	<rect id="test2_rect" x="0" y="0" width="100%" height="100%" fill="none"/>
</svg>
<!-- <div id="circles-parallax" data-speed='3' class="flyobject">&nbsp;</div> -->

<?php get_footer(); ?>