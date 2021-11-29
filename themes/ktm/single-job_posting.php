<?php get_header(); ?>

<div class="container job-posting-container">
    <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="job-posting-title"><?php the_title(); ?></h1>
        <div class="job-posting-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>