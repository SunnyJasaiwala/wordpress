<?php get_header(); ?>

<div class="container single-blog-container">
    <div class="row">
        <div class="col-md-9">
            <!-- blog image -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="blog-image">
                    <img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>" alt="<?php the_title(); ?>">
                </div>
            <?php endif; ?>
            <!-- Blog Post -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                global $post;
            ?>
                <div class="blog-post">
                    <h1 class="blog-post-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="ktm-archive-meta">
                        <ul>
                            <li>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.9 2.6H2.6V1.94998H1.3V3.9H11.7V1.94998H10.4V2.6H9.1V1.94998H3.9V2.6ZM11.7 5.2H1.3V11.7H11.7V5.2ZM9.1 0.65H3.9V0H2.6V0.65H1.3C0.58203 0.65 0 1.23203 0 1.95V11.7C0 12.418 0.58203 13 1.3 13H11.7C12.418 13 13 12.418 13 11.7V1.95C13 1.23203 12.418 0.65 11.7 0.65H10.4V0H9.1V0.65ZM3.25 7.8V6.5H4.55V7.8H3.25ZM5.85 7.8H7.15V6.5H5.85V7.8ZM8.45 7.8V6.5H9.75V7.8H8.45ZM3.25 9.1V10.4H4.55V9.1H3.25ZM7.15 10.4H5.85V9.1H7.15V10.4Z" fill="#FFC220"/>
                                </svg>

                                <?= date( 'M dS, Y', strtotime($post->post_date) ); ?>
                            </li>

                            <li>
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 13C2.91015 13 0 10.0899 0 6.5C0 2.91015 2.91015 0 6.5 0C10.0899 0 13 2.91015 13 6.5C13 10.0899 10.0899 13 6.5 13ZM10.8724 9.5282C11.4687 8.66882 11.8182 7.62522 11.8182 6.5C11.8182 3.56285 9.43715 1.18182 6.5 1.18182C3.56285 1.18182 1.18182 3.56285 1.18182 6.5C1.18182 7.62522 1.53127 8.66883 2.12757 9.52821C2.79239 8.65006 4.35431 8.27298 6.49784 8.27273C5.17574 8.27172 4.13636 7.34235 4.13636 5.31818C4.13636 3.99204 5.06947 2.95455 6.5 2.95455C7.92657 2.95455 8.86364 4.09002 8.86364 5.43636C8.86364 7.37432 7.81069 8.27273 6.5 8.27273C8.64465 8.27273 10.2074 8.64977 10.8724 9.5282ZM10.0246 10.4826C9.85163 9.8607 8.60918 9.45455 6.50001 9.45455C4.39082 9.45455 3.14837 9.86071 2.97542 10.4826C3.91377 11.3137 5.14797 11.8182 6.5 11.8182C7.85204 11.8182 9.08624 11.3136 10.0246 10.4826ZM5.31818 5.31818C5.31818 6.65911 5.80167 7.09091 6.5 7.09091C7.19592 7.09091 7.68182 6.67632 7.68182 5.43636C7.68182 4.69797 7.21834 4.13636 6.5 4.13636C5.75175 4.13636 5.31818 4.61844 5.31818 5.31818Z" fill="#FFC220"/>
                                </svg>

                                <?php 
                                    $user_info = get_userdata( $post->post_author );
                                    echo $user_info->display_name;
                                ?>
                               
                            </li>

                            <li>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.08449 3.125H13.125C13.8154 3.125 14.375 3.68464 14.375 4.375V10.625C14.375 11.3154 13.8154 11.875 13.125 11.875H4.08449C3.66655 11.875 3.27626 11.6661 3.04443 11.3184L0.729969 7.84669C0.59001 7.63675 0.59001 7.36325 0.729969 7.15331L3.04443 3.68162C3.27626 3.33388 3.66655 3.125 4.08449 3.125ZM2.00113 7.5L4.08446 10.625H13.125V4.375H4.08446L2.00113 7.5ZM5 7.5C5 7.84518 4.72018 8.125 4.375 8.125C4.02982 8.125 3.75 7.84518 3.75 7.5C3.75 7.15482 4.02982 6.875 4.375 6.875C4.72018 6.875 5 7.15482 5 7.5Z" fill="#FFC220"/>
                                </svg>
                                

                                <?php 
                                    $categories =   wp_get_post_categories( $post->ID, array(
                                        'fields'    =>  'all'
                                    ) );
                                    $cat_string  =   array();
                                    foreach ( $categories as $category ){
                                        $cat_string[] = "<a href='".get_term_link( $category )."' title='".$category->name."'>".$category->name."</a>";
                                    }

                                    echo implode( ", ", $cat_string );
                                ?>
                            </li>
                        </ul>
                    </div>

                    <div class="ktm-share-media">
                        <?php get_template_part( 'templates/single/post/share-media' ); ?>
                    </div>
                    <?php the_content(); ?>
                </div><!-- /.blog-post -->

                <?php ktm_user_promo(); ?>
                <?php comments_template(); ?>
            <?php endwhile; endif; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>