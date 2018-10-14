<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VSTSS_Frankenreads
 */

get_header();
?>
				<!-- Welcome -->
				<section id="vstssfr-main-welcome">
					<div class="wrapper">
						<div id="vstssfr-main-welcome-posters">
							<div id="vstssfr-main-welcome-posters-two">
								<div id="vstssfr-main-welcome-posters-two-top">
									<img src="./img/welcome-frankenstein-book.jpg">
								</div>
								<div id="vstssfr-main-welcome-posters-two-bottom">
									<img src="./img/welcome-frankenstein-castle.jpg">
								</div>
							</div>
							<div id="vstssfr-main-welcome-posters-solo">
								<img src="./img/welcome-mary-shelley.jpg">
							</div>
						</div>
						<div id="vstssfr-main-welcome-content">
							<h3>Welcome to Frankenreads!</h3>
							<p>These logos for Frankenreads (designed by Kirsten Keister of the Maryland Institute for Technology in the Humanities), the Keats-Shelley Association of America, and the National Endowment for the Humanities are provided to you to use freely on your own websites and promotional materials as long as you mention Frankenreads and link to http://frankenreads.org.</p>
							<ul>
								<li><a href="#" title="Apply to Attend" class="button">Apply to Attend</a></li>
								<li><a href="#" title="Schedule" class="button">Schedule</a></li>
							</ul>
						</div>
					</div>
				</section>
				<!-- Events -->
				<section id="vstssfr-main-events">
					<div class="wrapper">
						<h3 class="group-title">Events</h3>
						<div id="vstssfr-main-events-group">
							<!-- Solo Event -->
							<div class="vstssfr-events-group-single">
								<div class="vstssfr-events-group-single-thumb"></div>
								<p>Morbi vel nisi condimentum, efficitur orci at, vehicula velit. Maecenas ut euismod diam. Integer aliquet turpis eunis!</p>
								<ul>
									<li>Address: Svetog Save 65, Čačak, Serbia</li>
									<li>Open: 10 AM - 8 PM</li>
									<li>Speaker: Ivana Krsmanović</li>
								</ul>
								<a href="#" title="Attend an event" class="button">Attend an event</a>
							</div>
							<!-- Solo Event -->
							<div class="vstssfr-events-group-single">
								<div class="vstssfr-events-group-single-thumb"></div>
								<p>Morbi vel nisi condimentum, efficitur orci at, vehicula velit. Maecenas ut euismod diam. Integer aliquet turpis eunis!</p>
								<ul>
									<li>Address: Svetog Save 65, Čačak, Serbia</li>
									<li>Open: 10 AM - 8 PM</li>
									<li>Speaker: Ivana Krsmanović</li>
								</ul>
								<a href="#" title="Attend an event" class="button">Attend an event</a>
							</div>
							<!-- Solo Event -->
							<div class="vstssfr-events-group-single">
								<div class="vstssfr-events-group-single-thumb"></div>
								<p>Morbi vel nisi condimentum, efficitur orci at, vehicula velit. Maecenas ut euismod diam. Integer aliquet turpis eunis!</p>
								<ul>
									<li>Address: Svetog Save 65, Čačak, Serbia</li>
									<li>Open: 10 AM - 8 PM</li>
									<li>Speaker: Ivana Krsmanović</li>
								</ul>
								<a href="#" title="Attend an event" class="button">Attend an event</a>
							</div>
						</div>
					</div>
				</section>
				<!-- Schedule -->
				<section id="vstssfr-main-schedule">
					<div class="wrapper">
						<h3 class="group-title-alt">Schedule</h3>
						<div id="vstssfr-main-schedule-days">
							<div id="vstssfr-main-schedule-days-event">
								<h4>23<sup>rd</sup> October (Day 1)</h4>
								<ul>
									<li>09:00 <strong>Doors open & registration <span>30 min</span></strong></li>
									<li>10:00 <strong>Opening welcome <span>30 min</span></strong></li>
									<li>11:00 <strong>History of Mary Shelley <span>30 min</span></strong></li>
									<li>12:30 <strong>Cinema of Mary Shelley’s work <span>30 min</span></strong></li>
									<li>14:10 <strong>Video presentation <span>30 min</span></strong></li>
									<li>17:30 <strong>Panel discussion <span>30 min</span></strong></li>
								</ul>
							</div>
							<div id="vstssfr-main-schedule-days-event">
								<h4>23<sup>rd</sup> October (Day 1)</h4>
								<ul>
									<li>09:00 <strong>Day 2 start and intro <span>30 min</span></strong></li>
									<li>10:30 <strong>Coffe breakbe added so it looks long <span>30 min</span></strong></li>
									<li>12:15 <strong>Presentation by a really famous person <span>30 min</span></strong></li>
									<li>13:00 <strong>Frankenstein reading <span>30 min</span></strong></li>
									<li>14:30 <strong>Magic of Frankenstein <span>30 min</span></strong></li>
									<li>18:00 <strong>Closing ceremony <span>30 min</span></strong></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!-- Subscribe -->
				<section id="vstssfr-main-subscribe">
					<div class="wrapper">
						<h3 class="group-title">Subscribe or Sign up</h3>
						<p>Receive updates about Frankenreads <span>or sign up to attend the reading</span></p>
						<form>
							<input>
							<button class="button">Subscribe</button>
						</form>
					</div>
				</section>
				<!-- Updates -->
				<section id="vstssfr-main-updates">
					<div class="wrapper">
					<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
					?>
					</div>
				</section>
				<!-- Media -->
				<section id="vstssfr-main-media">
					<div class="wrapper"></div>
				</section>
				<!-- Join our team -->
				<section id="vstssfr-main-joinus">
					<div class="wrapper"></div>
				</section>
				<!-- Partners -->
				<section id="vstssfr-main-partners">
					<div class="wrapper"></div>
				</section>

<?php
get_footer();