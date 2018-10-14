<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VSTSS_Frankenreads
 */

?>
			</main>
			<!-- Footer -->
			<footer>
				<div class="wrapper">
					<div id="vstssfr-footer-frankenreads"></div>
					<ul id="vstssfr-footer-partners">
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/footer-partner-logo-ksaa.png" height="48" width="auto" title="KSAA" alt="KSAA logo"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/vstss-logo-bw.png" height="56" width="auto" title="VŠTSS Cacak" alt="VŠTSS Cacak logo"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/footer-partner-logo-humanities.png" height="48" width="auto" title="Humanities" alt="Humanities logo"></li>
					</ul>
					<p>Svetog Save 65, Čačak, Serbia<span><a href="tel:+38132322321" title="Call VŠTSS Čačak">+381 32 322 321</a> | <a href="mailto:office@vstss.com" title="Email VŠTSS Čačak">office@vstss.com</a></span></p>
					<ul id="vstssfr-footer-socmed">
						<li><a href="#" title="VŠTSS Instagram"><i class="icon-gram"></i><span>VŠTSS Instagram</span></a></li>
						<li><a href="#" title="VŠTSS Facebook"><i class="icon-ook"></i><span>VŠTSS Facebook</span></a></li>
						<li><a href="#" title="VŠTSS Twitter"><i class="icon-ter"></i><span>VŠTSS Twitter</span></a></a></li>
						<li><a href="#" title="Frankenreads"><i class="icon-frankenreads"></i><span>Frankenreads</span></a></a></li>
					</ul>
					<p>&copy; 2018 Frankenreads VŠTSS. All rights reserved.</p>
				</div>
			</footer>
		</div>
		<!-- Loader -->
		<div id="vstss-frankenloader">
			<span></span>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
