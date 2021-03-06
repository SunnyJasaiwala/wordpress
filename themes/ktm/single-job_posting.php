<?php get_header(); ?>

<?php ktm_header_title(); ?>


<div class="container job-posting-container">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="job-posting-content">
            <?php the_content(); ?>
        </div>

        <div class="job-posting-apply-now">
            <!-- ACF Fields: Job Applicants Fields -->
            <h3>Apply for this position: <?php the_title(); ?></h3>
            
            <div class="row">
                <div class="col-md-7">
                    <?php
                        acf_form(array(
                            'post_id'		    => 'new_post',
                            'post_title'	    => true,
                            'field_groups'	    => array( 'group_61b0b670bbe5f' ),
                            'new_post'		    => array(
                                'post_type'		=> 'job_applicant',
                                'post_status'	=> 'publish'
                            ),
                            'uploader'		    => 'basic',
                            'submit_value'	    => __('Apply Now', 'ktm'),
                            'updated_message'   => __('You job application was submitted', 'ktm')
                        ));
                    ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php if ( isset( $_GET['updated'] ) && $_GET['updated'] == true ) : ?>
    <!-- jQuery scroll to #message when success -->
    <script>
        jQuery(document).ready(function($) {
            $('html, body').animate({
                scrollTop: $("#message").offset().top
            }, 1000);
        });       
    </script>         
<?php endif; ?>
<?php get_footer(); ?>