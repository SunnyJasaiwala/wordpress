<?php
/**
 * Template Name: Recorded Video
 */

get_header(); ?>

<?php ktm_header_title(); ?>

<div class="container recorded-video-container">
    <div class="row">
        <div class="col-md-9">
            <div class="row recorded-video-iso">
                <?php
                $args = array(
                    'post_type' => 'recorded_video',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $fields =   get_fields( get_the_ID() );
                        $post_categories = get_the_terms( get_the_ID(), 'video_cat' );
                        $classes    =   array();
                        foreach( $post_categories as $c ) {
                            $classes[] = "filter-".$c->slug;
                        }
                        ?>
                        <div class="col-md-6 <?= implode(" ", $classes); ?>">
                            <a href="<?= $fields['external_link'] != '' ? $fields['external_link'] : "#"; ?>" <?= $fields['external_link'] != '' ? "target='_blank'" : ""; ?> title="<?php the_title(); ?>" class="recorded-video-wrap">
                                <div class="recorded-video-item">
                                    <div class="recorded-video-item-thumbnail">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                    <div class="recorded-video-item-title">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <div class="recorded-video-item-content" style="display: none;">
                                        <?php the_content(); ?>
                                    </div>

                                    <div class="recorded-video-item-search" style="display: none;">
                                    <?php ob_start(); 
                                        foreach( $post_categories as $category ) {
                                            echo $category->name;
                                        } 
                                        the_title();
                                        the_post_thumbnail('full');
                                        the_content(); 
                                        echo strtolower(ob_get_clean());
                                        ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="col-md-3 ktm-sidebar-archive ktm-filter-recorded-vids">
            <section>
                <form class="recorded-videos-search">
                    <input type="text" id="recorded-videos-search" placeholder="Search recorded videos" autocomplete="off">
                </form>
            </section>


            <section class="ktm-sidebar-cat">
                <h4>Categories</h4>
                <ul>
                    <li><a href="#" data-filter="*" class="active">All</a></li>
                    <?php
                    $categories = get_categories(array(
                        'taxonomy' => 'video_cat',
                        'orderby' => 'name',
                        'order' => 'ASC'
                    ));
                    foreach ($categories as $category) {
                        echo '<li><a href="#" data-filter="filter-'.$category->slug.'">' . $category->name . '</a></li>';
                    }
                    ?>
                </ul>
            </section>
        </div>
    </div>
</div>

<!-- Video Modal -->
<div class="recorded-video-modal">
    <div class="recorded-video-modal-content">
        <div class="recorded-video-modal-body">
            <div class="recorded-video-modal-video">
                <iframe width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="recorded-video-modal-close">
                <a href="#" rel="nofollow" class="recorded-video-modal-close-close">
                    x close
                </a>
            </div>
        </div>
    </div>
</div>


<script>
    (function($){
        $(document).on('click', '.recorded-video-wrap', function(){
            if ( $(this).find('.recorded-video-item-content').html().trim() != "" ) {
                $('.recorded-video-modal-video').html( $(this).find('.recorded-video-item-content').html() );
                $('.recorded-video-modal').fadeIn();
                return false;
            }
        });

        $(document).on('click', '.recorded-video-modal-close-close', function(){
            $('.recorded-video-modal').fadeOut();
            return false;
        });
    })(jQuery);
</script>

<?php get_footer(); ?>