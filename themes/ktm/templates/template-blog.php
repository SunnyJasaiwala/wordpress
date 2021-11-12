<?php 
/**
 * Template Name: Blog
 */

get_header(); ?>

<div class="ktm-blog-header-rel">
    <img src="<?= home_url(); ?>/wp-content/uploads/2021/10/blog-banner-1.png" alt="Blog Page">
    <div class="has-grad ktm-blog-header-abs">
        <div class="ktm-blog-header-tbl">
            <div class="ktm-blog-header-cell">
                <div class="text-center">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </div>
</div><!-- .ktm-blog-header-rel -->


<div class="ktm-blog-archive-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php 
                    $posts  =   get_posts(array(
                        'post_type'         =>  'post',
                        'posts_per_page'    =>  -1
                    ));

                    foreach($posts as $post):
                        ktm_render_blog($post->ID);
                        wp_reset_postdata();
                    endforeach;
                ?>
                
            </div><!-- .col-md-9 -->

            <?php get_sidebar(); ?>
        </div>
    </div>
</div><!-- .ktm-blog-archive-wrap -->

<?php get_footer(); ?>