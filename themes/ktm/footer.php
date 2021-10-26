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
