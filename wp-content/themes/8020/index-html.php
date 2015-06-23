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
<section data-speed="4" data-type="background" class='scrolling-section' id="home">
	<div class="content">
		<img src="<?php echo get_template_directory_uri(); ?>/images/8020-consulting.png" width="338" height="128" alt="8020 Consulting"/>
		<p>
			If you are going to<br/>
			engineer a new business,<br/>
			it needs to be provably<span>*</span><br/> 
			<strong>better than anything else</strong>
			out there.
		</p>
		<h1>
			That’s what<br/>
			we’re doing here.
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

<!-- Overview -->
<section class='scrolling-section' id="overview">
	<div class="content">
		<div class="blue-bar">
			<h1>
				Different perspectives.<br/>
				One unique company.
			</h1>
			<h2>8020 Consulting applies the intellectual capital, technical expertise and energy of our team to address a range of financial projects for clients ranging from Fortune 50 companies to middle market and venture backed firms.</h2>
		</div>
		<p>As a company, we believe broadening the application of the tools of financial analysis and reporting to every aspect of business operations—extending the reach of finance from compliance fulfillment reporting and incrementalist budgeting activity to critical analysis of business issues—is one of the great unleveraged business opportunities of our time.</p>
		<p>We also know that there are massive productivity gaps between the top individual performers and the average, and we have engineered our company to attract and retain the best. This isn’t rhetoric, it’s fact.</p>
		<p>Our Team applies focus, objectivity and superior academic and professional credentials backed by a business model that encourages and rewards individual initiative and creativity with a mandate to leave Clients provably better at the end of each engagement.</p>
	</div>
	<footer class="contact-bar-footer">
		<p>Nulla nec tincidunt sem, praesent ac nibh. <a href="#contact">Contact us today.</a></p>
	</footer>
</section>

<!-- The Work We Do -->
<section class='scrolling-section' id="the-work-we-do">
	<div class="content">
		<div class="green-bar">
			<h1>
				Title Lorem Ipsum<br/>
				Dolor sit amet estuans
			</h1>
			<h2>The work we do spans the entire range of analytical and reporting projects that encompass the office of the CFO, as well as:</h2>
		</div>
		<ul>
			<li>Transactional due diligence support</li>
			<li>Product and customer profitability analytics</li>
			<li>Post merger financial integration</li>
			<li>Project Management</li>
			<li>Evaluation of salesforce effectiveness and compensation plans</li>
			<li>
				Execution of the responsibilities of senior internal finance roles<br/>
				during periods of company or individual transition with a methodology<br/>
				that improves departmental effectiveness
			</li>
			<li>Providing functional finance support to systems implementation teams</li>
		</ul>
		<h3>
			Our Founders also consult directly with<br/>
			the office of the CEO, COO and CFO to...
		</h3>
		<ul>
			<li>Support the implementation of an accountability based culture</li>
			<li>Facilitate departmental and company planning meetings</li>
			<li>Develop departmental, divisional and corporate business plans</li>
			<li>Create detailed position profiles to ensure the alignment of position goals and mandates with company objectives</li>
			<li>Support the selection and assessment of prospective new hires</li>
		</ul>
		<p>Every project we do contains the potential to create lasting positive change for our Clients, and our Team has the ability and the mandate to realize this potential. </p>
	</div>
	<footer class="contact-bar-footer">
		<p>Nulla nec tincidunt sem, praesent ac nibh. <a href="#contact">Contact us today.</a></p>
	</footer>
</section>

<!-- Why We Do It -->
<section class='scrolling-section' id="why-we-do-it">
	<div class="content">
		<div class="blue-bar">
			<h1>
				We just couldn’t pass the opportunity<br/>
				to build a different, better company.
			</h1>
			<h2>The founding Team of 8020 Consulting scaled their previous company from a startup to a 300 person consultancy in seven and a half years. We built a company that in its best years was a magnet for outstanding financial talent and a model other firms attempted to emulate.</h2>
		</div>
		<p>We’ve learned a lot in the last 12 years. Our appreciation for the power and potential of applied finance has deepened through our own experience working directly with Company founders and CEO’s. The opportunity to design a new Company which integrates these learnings, the “here’s what we would do differently, and better if we were starting from scratch” was too compelling not to do it. One of our core beliefs is that if you aren’t going to engineer a new business that is provably better than anything else out there, one which creates a truly superior experience for its People and its Clients, don’t bother. That’s what we’re doing here. </p>
		<h3>Considering a career in Consulting?</h3>
		<p>If you are considering a career in Consulting, or if you’re an Executive with a project requirement, we would appreciate the opportunity to get more specific and determine whether what we have to offer from a career development or resource perspective is aligned with your interests and objectives.</p>
	</div>
	<div id="lamp" class="flyobject" data-speed='4'></div>
	<footer class="contact-bar-footer">
		<p>Nulla nec tincidunt sem, praesent ac nibh. <a href="#contact">Contact us today.</a></p>
	</footer>
</section>
<!-- Meet Our Team -->
<section class='scrolling-section' id="our-team">
	<div class="content">
		<h1>Meet our team</h1>
		<ul id="cat-team-menu">
			<li><a href="#all">ALL</a></li>
			<li><a href="#management" rel="management">MANAGEMENT</a></li>
			<li><a href="#analysts" rel="analysts">ANALYSTS</a></li>
			<li><a href="#consultants" rel="consultants">CONSULTANTS</a></li>						
		</ul>
		<ul id="team-list">
			<li class="all management analysts">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all analysts">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all analysts">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all consultants">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all consultants last">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all consultants">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management last">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
			<li class="all management last">
				<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-example.jpg" width="102" height="142" alt="Our Team Example"/>
				<div class="ballon">
					<div class="arrow"></div>
					<h4>David Lewis<small>CEO</small></h4>
					<p>Nulla vel est quis mauris commodo adipiscing at porta nibh. Nunc eget egeast mi. Aenean pellentesque, tellus.</p>
					<a href="#detail">Get to know me</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="detail">
		<div class="center">
			<h3>David Lewis<small>CEO</small><a href="#close" class="close">X</a></h3>
			<div>
				<p>David Lewis has been the CEO or founding partner of 5 companies, one a 600 person family business, three successful startups in the areas of executive search, consulting, and financial project execution, as well as a venture capital backed software development firm. His last startup scaled to a 300 person consulting and executive services firm in seven and a half years. During his tenure, the firm worked with companies ranging from Fortune 30 companies to venture backed startups.  He has deep functional expertise in creation and implementation of accountability systems, planning, finance, talent acquisition and development, and key executive coaching.</p>
				<p>He holds Bachelors and Masters degrees in Economicsfrom Georgetown University in Washington DC.</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/our-team-big-example.png" width="456" height="314" alt="Our Team Big Example"/>
		</div>					
	</div>
	<footer class="contact-bar-footer">
		<p>Interested? To learn more, <a href="#apply">apply online here.</a></p>
	</footer>
</section>

<!-- We Believe -->
<section class='scrolling-section' id="we-believe">
	<div class="content">
		<div class="blue-bar">
			<h1>
				Every engagement has the potential<br/>
				to make a meaningful positive difference.
			</h1>
			<h2>Consistent and intensive application of the tools of financial analysis to every aspect of business operations is a massively underleveraged opportunity in the vast majority of companies, most often due to capacity constraints.</h2>
		</div>
		<p>Every C level executive has some subset of their responsibilities that encompass their highest value contribution to the organization, and another subset that would best be delegated to others or eliminated entirely.</p>
		<p>Every instance of key manager turnover is an opportunity to reevaluate the position and realign responsibilities and mandates with organizational objectives, and this recalibration needs to take place before a replacement is hired.</p>
		<p>People are most motivated when they are doing work that requires full intellectual and creative engagement.</p>
		<p>One highly skilled and focused individual can make a huge difference in even the largest enterprise.</p>
		<p>Every engagement has the potential to make a meaningful positive difference.</p>
	</div>
	<footer class="contact-bar-footer">
		<p>Nulla nec tincidunt sem, praesent ac nibh. <a href="#contact">Contact us today.</a></p>
	</footer>
</section>

<!-- Why Work Here -->
<section class='scrolling-section' id="why-work-here">
	<div class="content">
		<div class="green-bar">
			<h1>
				Why Work Here
			</h1>
			<h2>You know how the first 6 months of any job are the most challenging and exciting? Imagine doing that all the time. Work at Clients across a spectrum of industries, sizes, and circumstances (growing, acquiring, merging, launching new products, dealing with financial restructuring) without changing jobs. </h2>
		</div>
		<ul class="side">
			<li>Focus on applying your brain, energy and experience to doing great work for clients, without the burden of navigating office politics.</li>
			<li>Work closely and directly with our firm's founders and your colleagues to help build a big, great company, and learn more about how to scale a business.</li>
			<li>Be in a company that does for a living what you do for a living, and truly values and appreciates what you do in finance.</li>
			<li>Very few financial professionals have the peace of mind that comes with an employment agreement: all of our people do, so you can focus on doing great work instead of worrying about job security. </li>
			<li>Get paid to be in constant growth and learning mode, instead of maintenance mode.</li>
			<li>Know that your great work will be recognized and rewarded, and instrumental in our firm’s success.</li>
			<li>Be in a company filled with really smart people who are really nice people to work with.</li>
		</ul>
		<ul class="side icons">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/variety.png" width="104" height="104" alt="Variety"/>
				Variety
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Variety</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/impact.png" width="104" height="104" alt="Impact"/>
				Impact
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Impact</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/career-path.png" width="104" height="104" alt="Career Path"/>
				Career Path 
				Acceleration
				<div class="ballon">
					<div class="arrow"></div>
					<h4>Career Path Acceleration</h4>
					<p>Have the opportunity to do meaningful work without long hours. Enjoy your life. All of it.</p>
				</div>
			</li>
		</ul>
		<h3>Still Reading... Ready to submit your Resume?</h3>
		<p class="clear">&nbsp;</p>
		<p><strong>What you will do:</strong></p>
		<ul>
			<li>What you won’t be doing is the same work over and over. To work here, you must be capable of translating your experiences and actively applying your knowledge to solve client problems.  Your skills will be stretched and you will be required to grow quickly.</li> 
			<li>Your job will be to define and understand the client opportunity or issue and solve it; sometimes this will mean process improvement or automation and other times it will require you to apply rigorous financial analysis to inform operational or strategic decision making. In all circumstances, your job is to leave the client better than when you first arrived.</li>
			<li>We don’t just talk about client delivery, we embody it. That means that you’ll be nothing but proactive and engaged and ready to do whatever it takes to deliver a satisfying client experience.  If you are not ready to play at this level, this is NOT the position for you.</li>
		</ul>
		<p><strong>What we are looking for: </strong></p>
		<ul>
			<li>Finance and Accounting professionals that are as concerned with continuous improvement and delivering real value as we are.  We insist our clients be left feeling that our work made a notable difference.</li> 
			<li>A combination of intellectual agility, academic /professional credentials, relentless enthusiasm and a track record of career achievements that suggests you have what it takes to deliver.</li>
			<li>You also must be great with people and able to communicate clearly and effectively with Financial, Operational and other C-level Executives.</li>
		</ul>
	</div>
	<footer class="contact-bar-footer">
		<p>Interested? To learn more, <a href="#apply">apply online here.</a></p>
	</footer>
</section>

<!-- Why Work With Us -->
<section class='scrolling-section' id="why-work-with-us">
	<div class="content">
		<div class="green-bar">
			<h1>
				Why Companies Work With Us.
			</h1>
			<h2>Consistent and intensive application of the tools of financial analysis to every aspect of business operations is a massively underleveraged opportunity in the vast majority of companies, most often due to capacity constraints. </h2>
		</div>
		<ul>
			<li>The thoroughness of our data gathering around project requirements</li>
			<li>The precision of our deployment process</li>
			<li>The combination of credentials, experience, and intelligence our people bring to the project</li>
			<li>The alignment our business model creates between our People and our Clients</li>
			<li>The predictability and dependability of outcomes we provide</li>
			<li>The mitigation of project turnover risk our model produces</li>
			<li>The economic value we deliver</li>
			<li>Lots of other reasons we would rather discuss in person</li>
		</ul>
	</div>
	<footer class="contact-bar-footer">
		<p>Nulla nec tincidunt sem, praesent ac nibh. <a href="#contact">Contact us today.</a></p>
	</footer>
</section>

<!-- Contact -->
<section class='scrolling-section' id="contact">
	<div class="content">
		<div class="info">
			<h1>
				Contact Us
			</h1>
			<p>
				Phone (999) 999 - 9999<br/>
				<a href="mailto:contactus@8020consulting.com">contactus@8020consulting.com</a>
			</p>
			<h2>
				8020 Consulting<br/>
				Headquarters
			</h2>
			<address>
				Street Address<br>
				City, State, Zipcode
			</address>
			<h2>8020 Consulting</h2>
			<address>
				Street Address<br>
				City, State, Zipcode
			</address>
		</div>
		<form action="index_submit" method="get">
			<input type="text" name="name" value="" placeholder="Name" id="name"/>
			<input type="text" name="email" value="" placeholder="E-mail" id="email"/>
			<input type="text" name="Phone" value="" placeholder="Phone (optional)" id="phone"/>
			<textarea name="message" placeholder="Your Message"></textarea>
			<input type="submit" value="SUBMIT" class="submit"/>
		</form>
	</div>
</section>

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
	<form action="index_submit" method="post">
		<input type="text" name="name" value="" id="name" placeholder="Name"/>
		<input type="text" name="email" value="" id="email" placeholder="E-mail"/>
		<input type="text" name="phone" value="" id="phone" placeholder="Phone"/>
		<input type="file" name="resume" value="" id="resume" placeholder="Resume"/>	
		<textarea name="message" id="message" placeholder="Your Message"></textarea>					
		<input type="submit" value="SUBMIT" class="submit"/>
	</form>
</div>

<div id="circles-parallax" data-speed='3' class="flyobject">&nbsp;</div>

<!-- <?php
$pages = get_pages(array('sort_order' => 'ASC',	'sort_column' => 'menu_order')); 
foreach ($pages as $page_data) :
	if ($page_data->post_name == "overview"):?>
		
<?php
	endif;
    $content = apply_filters('the_content', $page_data->post_content); 
    $title = $page_data->post_title;
    echo "<section data-type='background' data-speed='4' class='scrolling-section' id='".$page_data->post_name."'>";
		echo "<h2>".$title."</h2>";
		echo $content; 
	echo "</section>";
endforeach;
?> -->

<?php get_footer(); ?>