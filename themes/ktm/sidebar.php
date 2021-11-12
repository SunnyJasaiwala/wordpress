<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Enactus_Fleming_-_Keys_To_Me
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php
if ( ! is_front_page() && get_post_type() == "post" || get_the_ID() == 14 ) { // 14 = Blog Page
	?>

	<div class="col-md-3 ktm-sidebar-archive">
		<section>
			<form method="get" action="<?= home_url(); ?>">
				<input type="search" name="s" placeholder="Search" autocomplete="off">
			</form>
		</section>


		<section class="ktm-sidebar-cat">
			<h4>Categories</h4>
			<ul>
				<?php
				$categories = get_categories();
				foreach ($categories as $category) {
					echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
				}
				?>
			</ul>
		</section>

		<section class="ktm-sidebar-social">
			<h4>Follow Us</h4>
			<a href="#">
				<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM9.75177 5.87359C10.4629 5.84123 10.6901 5.83331 12.5007 5.83331H12.4986C14.3097 5.83331 14.5361 5.84123 15.2472 5.87359C15.957 5.90609 16.4417 6.01845 16.8667 6.18331C17.3056 6.35346 17.6764 6.58124 18.0473 6.95207C18.4181 7.32263 18.6459 7.69458 18.8167 8.13306C18.9806 8.55695 19.0931 9.0414 19.1265 9.75113C19.1584 10.4622 19.1667 10.6895 19.1667 12.5C19.1667 14.3106 19.1584 14.5373 19.1265 15.2484C19.0931 15.9579 18.9806 16.4425 18.8167 16.8665C18.6459 17.3048 18.4181 17.6768 18.0473 18.0473C17.6769 18.4182 17.3055 18.6465 16.8671 18.8168C16.443 18.9816 15.9579 19.094 15.2482 19.1265C14.5371 19.1589 14.3106 19.1668 12.4999 19.1668C10.6894 19.1668 10.4623 19.1589 9.75122 19.1265C9.04163 19.094 8.55704 18.9816 8.13287 18.8168C7.69467 18.6465 7.32272 18.4182 6.9523 18.0473C6.5816 17.6768 6.35382 17.3048 6.1834 16.8663C6.01868 16.4425 5.90632 15.958 5.87368 15.2483C5.84145 14.5372 5.8334 14.3106 5.8334 12.5C5.8334 10.6895 5.84173 10.4621 5.87354 9.75099C5.90548 9.04154 6.01798 8.55695 6.18326 8.13292C6.3541 7.69458 6.58188 7.32263 6.95272 6.95207C7.32328 6.58137 7.69522 6.35359 8.1337 6.18331C8.55759 6.01845 9.04204 5.90609 9.75177 5.87359Z" fill="#FFC220"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9024 7.03476C12.0186 7.03457 12.1435 7.03463 12.2783 7.03469L12.5005 7.03476C14.2805 7.03476 14.4915 7.04114 15.1944 7.07309C15.8444 7.10281 16.1972 7.21142 16.4322 7.30267C16.7433 7.42351 16.9651 7.56796 17.1983 7.80129C17.4317 8.03463 17.5761 8.25685 17.6972 8.56796C17.7885 8.80269 17.8972 9.15547 17.9268 9.80548C17.9587 10.5083 17.9657 10.7194 17.9657 12.4986C17.9657 14.2777 17.9587 14.4889 17.9268 15.1916C17.8971 15.8416 17.7885 16.1944 17.6972 16.4292C17.5764 16.7403 17.4317 16.9618 17.1983 17.195C16.965 17.4283 16.7435 17.5728 16.4322 17.6936C16.1975 17.7853 15.8444 17.8936 15.1944 17.9233C14.4916 17.9553 14.2805 17.9622 12.5005 17.9622C10.7203 17.9622 10.5094 17.9553 9.80657 17.9233C9.15657 17.8933 8.80379 17.7847 8.56864 17.6935C8.25753 17.5726 8.03531 17.4282 7.80197 17.1949C7.56863 16.9615 7.42419 16.7399 7.30308 16.4286C7.21182 16.1939 7.10307 15.8411 7.07349 15.1911C7.04155 14.4883 7.03516 14.2772 7.03516 12.4969C7.03516 10.7166 7.04155 10.5066 7.07349 9.80381C7.10321 9.1538 7.21182 8.80102 7.30308 8.56602C7.42391 8.25491 7.56863 8.03268 7.80197 7.79935C8.03531 7.56601 8.25753 7.42156 8.56864 7.30045C8.80365 7.20878 9.15657 7.10045 9.80657 7.07059C10.4216 7.04281 10.6599 7.03448 11.9024 7.03309V7.03476ZM16.0592 8.15644C15.6175 8.15644 15.2592 8.51912 15.2592 8.96681C15.2592 9.41435 15.6175 9.77745 16.0592 9.77745C16.5008 9.77745 16.8592 9.41435 16.8592 8.96681C16.8592 8.51926 16.5008 8.15616 16.0592 8.15616V8.15644ZM9.07691 12.5272C9.07691 10.6366 10.6098 9.10366 12.5004 9.10359C14.3911 9.10359 15.9237 10.6365 15.9237 12.5272C15.9237 14.418 14.3913 15.9502 12.5006 15.9502C10.6098 15.9502 9.07691 14.418 9.07691 12.5272Z" fill="#FFC220"/>
					<path d="M12.5006 10.2778C13.7278 10.2778 14.7228 11.2727 14.7228 12.5001C14.7228 13.7273 13.7278 14.7223 12.5006 14.7223C11.2732 14.7223 10.2783 13.7273 10.2783 12.5001C10.2783 11.2727 11.2732 10.2778 12.5006 10.2778Z" fill="#FFC220"/>
				</svg>
			</a>

			<a href="#">
				<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M25 12.5C25 5.59571 19.4043 0 12.5 0C5.5957 0 0 5.59571 0 12.5C0 18.7402 4.57031 23.9111 10.5469 24.8486V16.1133H7.37305V12.5H10.5469V9.7461C10.5469 6.61377 12.4121 4.88281 15.2686 4.88281C16.6357 4.88281 18.0664 5.12696 18.0664 5.12696V8.20313H16.4893C14.9365 8.20313 14.4531 9.16749 14.4531 10.1563V12.5H17.9199L17.3657 16.1133H14.4531V24.8486C20.4297 23.9111 25 18.7402 25 12.5Z" fill="#FFC220"/>
				</svg>
			</a>

			<a href="#">
				<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM9.02026 7.72016C9.00187 6.88563 8.4051 6.25 7.43602 6.25C6.46695 6.25 5.8334 6.88563 5.8334 7.72016C5.8334 8.5374 6.44822 9.19133 7.39925 9.19133H7.41735C8.4051 9.19133 9.02026 8.5374 9.02026 7.72016ZM8.83368 10.353H6.00091V18.8644H8.83368V10.353ZM15.7882 10.1532C17.6523 10.1532 19.0498 11.3699 19.0498 13.9842L19.0496 18.8644H16.217V14.3108C16.217 13.167 15.8071 12.3866 14.7816 12.3866C13.999 12.3866 13.5328 12.9127 13.3281 13.4209C13.2532 13.603 13.2348 13.8568 13.2348 14.1112V18.8646H10.4017C10.4017 18.8646 10.439 11.1519 10.4017 10.3533H13.2348V11.5588C13.6108 10.9793 14.2841 10.1532 15.7882 10.1532Z" fill="#FFC220"/>
				</svg>
			</a>

			<a href="#">
				<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM12.1519 10.5927L12.1256 10.1602C12.0469 9.03913 12.7377 8.01518 13.8306 7.61796C14.2328 7.47673 14.9148 7.45907 15.3607 7.58265C15.5356 7.63562 15.8678 7.81216 16.1039 7.97105L16.5323 8.26234L17.0045 8.11228C17.2668 8.03284 17.6165 7.90043 17.7739 7.81216C17.9226 7.73271 18.0537 7.68858 18.0537 7.71506C18.0537 7.86512 17.7302 8.37709 17.4592 8.65956C17.0919 9.05678 17.1968 9.09209 17.94 8.82728C18.386 8.67721 18.3947 8.67721 18.3073 8.84493C18.2548 8.9332 17.9838 9.24215 17.6952 9.52462C17.2056 10.0101 17.1794 10.0631 17.1794 10.4691C17.1794 11.0958 16.8821 12.4023 16.5848 13.1173C16.034 14.459 14.8536 15.8448 13.6732 16.5422C12.012 17.522 9.79986 17.7691 7.93749 17.1954C7.31671 17.0012 6.25 16.5069 6.25 16.4186C6.25 16.3921 6.57351 16.3568 6.96697 16.348C7.78885 16.3303 8.61074 16.1008 9.31022 15.6948L9.78237 15.4123L9.24027 15.2269C8.47085 14.9621 7.78011 14.353 7.60524 13.7793C7.55278 13.5939 7.57027 13.5851 8.0599 13.5851L8.56702 13.5763L8.13859 13.3732C7.63147 13.1173 7.16807 12.6847 6.94074 12.2434C6.77461 11.9256 6.56477 11.1223 6.62597 11.0605C6.64346 11.0341 6.82707 11.087 7.03691 11.1576C7.64021 11.3783 7.71891 11.3253 7.36917 10.9546C6.7134 10.2837 6.5123 9.28629 6.82707 8.34178L6.97571 7.91808L7.55278 8.49185C8.73315 9.6482 10.1234 10.3367 11.7147 10.5397L12.1519 10.5927Z" fill="#FFC220"/>
				</svg>
			</a>
		</section>
	</div>
	<?php
}
?>

<!--<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside> #secondary -->
