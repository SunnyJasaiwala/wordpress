<?php
/**
 * Template Name: Opportunities
 */

get_header(); ?>

<?php ktm_header_title(); ?>

<div class="container ktm-opportunities-container">
    <ul class="ktm-opportunities-list">
        <?php 
        $posts  =   get_posts(array(
            'post_type'         =>  'job_posting',
            'posts_per_page'    =>  -1,
            'orderby'           =>  'menu_order',
            'order'             =>  'ASC'
        ));

        if ( count($posts) ) {
            foreach ($posts as $k => $post) {
                ?>
                <li>
                    <div class="ktm-opp-main">
                        <?= $k+1; ?>. $post->ID
        
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M19.293 7.29291L20.7072 8.70712L12.0001 17.4142L3.29297 8.70712L4.70718 7.29291L12.0001 14.5858L19.293 7.29291Z" fill="#333333"/> </svg>
                    </div>

                    <div class="ktm-opp-content" style="display: none;">
                        <?= $post->post_content; ?>

                        <p><a href="<?= get_permalink( $post->ID ); ?>" class="btn" title="Apply">Apply</a></p>
                    </div>
                </li>
                <?php
            }
        } else {
            echo '<h1 class="text-center">No Opportunities at this moment.</h1>';
        }
        ?>
    </ul>
</div>

<?php get_footer(); ?>