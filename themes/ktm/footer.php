<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Enactus_Fleming_-_Keys_To_Me
 */

?>

	<?php 
	/** Show wave design on Login/Register */
	if ( get_the_ID() == 153 ) {
		?>
		<svg width="1277" height="97" viewBox="0 0 1277 97" fill="none" xmlns="http://www.w3.org/2000/svg" class="ktm-home-section-4">
			<path d="M347.5 91.1891C238.3 109.883 67.6667 79.0306 -4 61.2677V0H1274.5L1277 69.8166C1154.5 80.3603 972 25.6469 873.5 18.2378C772.491 10.64 484 67.8219 347.5 91.1891Z" fill="#FFC220"/>
			<path d="M924.402 67.6868C1033.94 81.5626 1205.11 58.6619 1277 45.4771V0H-5.49219L-8 51.8227C114.883 59.6489 297.952 19.0369 396.76 13.5374C498.084 7.89773 787.476 50.3421 924.402 67.6868Z" fill="#FFFBC0" fill-opacity="0.72"/>
		</svg>
		<?php
	}
	?>
	</div><!-- #page-content -->
	
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="ktm-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<h4>Links</h4>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-2',
										'menu_id'        => 'footer-menu',
									)
								);
							?>
						</div>

						<div class="col-md-2">
							<h4>Resources</h4>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-3',
										'menu_id'        => 'footer-menu',
									)
								);
							?>
						</div>

						<div class="col-md-8 text-right">
							<div class="ktm-flogos-wrap">
								<img src="<?= home_url(); ?>/wp-content/uploads/2021/10/Logo_PNG-removebg-preview-img-2.png" alt="Keys To Me">
								<img src="<?= home_url(); ?>/wp-content/uploads/2021/10/image-1.png" alt="Enactus Fleming">
							</div>
						</div>

						<div class="col-md-12">
							<hr>
						</div>

						<div class="col-md-12">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-4',
										'menu_id'        => 'footer-menu-bottom',
									)
								);
							?>
						</div>
					</div>
				</div>
			</div>

			<div class="ktm-footer-bottom text-center">
				© Copyright <?= date('Y'); ?> <a href="https://enactusfleming.ca" target="_blank" title="Enactus Fleming">Enactus Fleming</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
