<?php get_header(); ?>

<div class="container job-posting-container">
    <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="job-posting-title"><?php the_title(); ?></h1>
        <div class="job-posting-content">
            <?php the_content(); ?>
        </div>

        <div class="job-posting-apply-now">
            <!-- ACF Fields: Job Applicants Fields -->
            <h3>Apply for this position: <?php the_title(); ?></h3>
            <?php
                acf_form(array(
                    'post_id'		=> 'new_post',
                    'field_groups'	=> array( 'group_61b0b670bbe5f' ),
                    'new_post'		=> array(
                        'post_type'		=> 'job_applicant',
                        'post_status'	=> 'publish'
                    ),
                    'post_title'	=> true,
                    'uploader'		=> 'basic',
                    'submit_value'	=> 'Apply Now'
                ));
            ?>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>