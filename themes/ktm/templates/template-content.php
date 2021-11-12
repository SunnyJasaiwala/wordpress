<?php 
/**
 * Template Name: Content Page
 */

get_header(); ?>

<?php ktm_header_title(); ?>

<div class="container content-page-container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>