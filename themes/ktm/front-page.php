<?php 
get_header(); 
$fields =   get_fields();
?>

<div class="ktm-home-banner-rel">
    <ul>
        <?php foreach($fields['home_page_banner'] as $banner): ?>
        <li>
            <div class="ktm-home-banner-img">
                <img src="<?php echo $banner; ?>" alt="Keys To Me">
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <div class="has-grad ktm-home-banner-abs">
        <div class="ktm-home-banner-tbl">
            <div class="ktm-home-banner-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?= $fields['home_page_banner_content']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .ktm-home-banner-rel -->

<div class="ktm-decoration-wrap">
    <div class="container">
        <svg width="106" height="180" viewBox="0 0 106 180" fill="none" xmlns="http://www.w3.org/2000/svg" id="decoration-1">
            <path d="M0 5.63513H9.25397M4.67692 10.2794L4.57709 1M19.3492 5.63513H28.6032M24.0261 10.2794L23.9263 1M38.6984 5.63513H47.9524M43.3753 10.2794L43.2755 1M58.0476 5.63513H67.3016M62.7245 10.2794L62.6247 1M77.3968 5.63513H86.6508M82.0737 10.2794L81.9739 1M96.746 5.63513H106M101.423 10.2794L101.323 1M0 22.5072H9.25397M4.67692 27.1514L4.57709 17.8721M19.3492 22.5072H28.6032M24.0261 27.1514L23.9263 17.8721M38.6984 22.5072H47.9524M43.3753 27.1514L43.2755 17.8721M58.0476 22.5072H67.3016M62.7245 27.1514L62.6247 17.8721M77.3968 22.5072H86.6508M82.0737 27.1514L81.9739 17.8721M96.746 22.5072H106M101.423 27.1514L101.323 17.8721M0 39.3793H9.25397M4.67692 44.0235L4.57709 34.7441M19.3492 39.3793H28.6032M24.0261 44.0235L23.9263 34.7441M38.6984 39.3793H47.9524M43.3753 44.0235L43.2755 34.7441M58.0476 39.3793H67.3016M62.7245 44.0235L62.6247 34.7441M77.3968 39.3793H86.6508M82.0737 44.0235L81.9739 34.7441M96.746 39.3793H106M101.423 44.0235L101.323 34.7441M0 56.2513H9.25397M4.67692 60.8956L4.57709 51.6162M19.3492 56.2513H28.6032M24.0261 60.8956L23.9263 51.6162M38.6984 56.2513H47.9524M43.3753 60.8956L43.2755 51.6162M58.0476 56.2513H67.3016M62.7245 60.8956L62.6247 51.6162M77.3968 56.2513H86.6508M82.0737 60.8956L81.9739 51.6162M96.746 56.2513H106M101.423 60.8956L101.323 51.6162M0 73.1234H9.25397M4.67692 77.7676L4.57709 68.4883M19.3492 73.1234H28.6032M24.0261 77.7676L23.9263 68.4883M38.6984 73.1234H47.9524M43.3753 77.7676L43.2755 68.4883M58.0476 73.1234H67.3016M62.7245 77.7676L62.6247 68.4883M77.3968 73.1234H86.6508M82.0737 77.7676L81.9739 68.4883M96.746 73.1234H106M101.423 77.7676L101.323 68.4883M0 89.9954H9.25397M4.67692 94.6397L4.57709 85.3603M19.3492 89.9954H28.6032M24.0261 94.6397L23.9263 85.3603M38.6984 89.9954H47.9524M43.3753 94.6397L43.2755 85.3603M58.0476 89.9954H67.3016M62.7245 94.6397L62.6247 85.3603M77.3968 89.9954H86.6508M82.0737 94.6397L81.9739 85.3603M96.746 89.9954H106M101.423 94.6397L101.323 85.3603M0 106.868H9.25397M4.67692 111.512L4.57709 102.232M19.3492 106.868H28.6032M24.0261 111.512L23.9263 102.232M38.6984 106.868H47.9524M43.3753 111.512L43.2755 102.232M58.0476 106.868H67.3016M62.7245 111.512L62.6247 102.232M77.3968 106.868H86.6508M82.0737 111.512L81.9739 102.232M96.746 106.868H106M101.423 111.512L101.323 102.232M0 140.612H9.25397M4.67692 145.256L4.57709 135.977M19.3492 140.612H28.6032M24.0261 145.256L23.9263 135.977M38.6984 140.612H47.9524M43.3753 145.256L43.2755 135.977M58.0476 140.612H67.3016M62.7245 145.256L62.6247 135.977M77.3968 140.612H86.6508M82.0737 145.256L81.9739 135.977M96.746 140.612H106M101.423 145.256L101.323 135.977M0 157.484H9.25397M4.67692 162.128L4.57709 152.849M19.3492 157.484H28.6032M24.0261 162.128L23.9263 152.849M38.6984 157.484H47.9524M43.3753 162.128L43.2755 152.849M58.0476 157.484H67.3016M62.7245 162.128L62.6247 152.849M77.3968 157.484H86.6508M82.0737 162.128L81.9739 152.849M96.746 157.484H106M101.423 162.128L101.323 152.849M0 174.356H9.25397M4.67692 179L4.57709 169.721M19.3492 174.356H28.6032M24.0261 179L23.9263 169.721M38.6984 174.356H47.9524M43.3753 179L43.2755 169.721M58.0476 174.356H67.3016M62.7245 179L62.6247 169.721M77.3968 174.356H86.6508M82.0737 179L81.9739 169.721M96.746 174.356H106M101.423 179L101.323 169.721M0 123.74H9.25397M4.67692 128.384L4.57709 119.104M19.3492 123.74H28.6032M24.0261 128.384L23.9263 119.104M38.6984 123.74H47.9524M43.3753 128.384L43.2755 119.104M58.0476 123.74H67.3016M62.7245 128.384L62.6247 119.104M77.3968 123.74H86.6508M82.0737 128.384L81.9739 119.104M96.746 123.74H106M101.423 128.384L101.323 119.104" stroke="#FFC220" stroke-width="2"/>
        </svg>
    </div>
</div>

<div class="ktm-home-wrap">
    <section class="ktm-home-section-1">
        <div class="container">
            <h2>Proud Partnership</h2>
        </div>

        <div class="ktm-home-marquee-wrap">
            <div class="ktm-home-marquee">
                <div class="ktm-each-slide">
                    <?php 
                        for( $i = 1; $i <= 4; $i++ ){
                            foreach( $fields['sponsors'] as $sponsor ){
                                ?>
                                <img src="<?= $sponsor; ?>" alt="Keys To Me proud partnership">
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section><!-- .ktm-home-section-1 -->

    <section class="ktm-home-section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Recent Posts</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?= get_permalink( 14 ); ?>" class="btn ktm-read-more-articles" title="Read More Articles">Read More Articles >></a>
                </div>
            </div>

            <div class="row">
                <?php $post = get_post( get_option('ktm_post_select_option') ); ?>
                <div class="col-md-6 ktm-home-featured-post">
                    <a href="<?= get_permalink( $post->ID ); ?>" title="<?= $post->post_title; ?>" class="ktm-fp-card">
                        <img src="<?= get_the_post_thumbnail_url ( $post->ID ); ?>" title="<?= $post->post_title; ?>">
                        <div class="ktm-fp-card-inner">
                            <span class="cat-card"><?php 
                                $categories = get_the_category();
                                echo $categories[0]->name;
                            ?></span>
                            <h3>
                                <?= $post->post_title; ?>
                            </h3>
                        </div>
                        <span class="hover-arrow">
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6.50004H17M11.3536 0.646484L17.3536 6.64648M10.6464 12.6465L16.6464 6.64648" stroke="white"/>
                            </svg>
                        </span>
                    </a>

                </div>
                
                <div class="col-md-1"></div>

                <div class="col-md-5 ktm-home-other-posts">
                    <ul>
                        <li>
                            <a href="#" title="How To Make Yourself Work When You Have Zero Motivation?">
                                <div class="ktm-hop-img">
                                    <img src="<?= home_url(); ?>/wp-content/uploads/2021/10/blog-post.png" alt="How To Make Yourself Work When You Have Zero Motivation?">
                                </div>

                                <div class="ktm-hop-info">
                                    <p>How To Make Yourself Work When You Have Zero Motivation?</p>
                                    <p><span class="btn-u">Read Article</span></p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" title="How To Make Yourself Work When You Have Zero Motivation?">
                                <div class="ktm-hop-img">
                                    <img src="<?= home_url(); ?>/wp-content/uploads/2021/10/blog-post.png" alt="How To Make Yourself Work When You Have Zero Motivation?">
                                </div>

                                <div class="ktm-hop-info">
                                    <p>How To Make Yourself Work When You Have Zero Motivation?</p>
                                    <p><span class="btn-u">Read Article</span></p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" title="How To Make Yourself Work When You Have Zero Motivation?">
                                <div class="ktm-hop-img">
                                    <img src="<?= home_url(); ?>/wp-content/uploads/2021/10/blog-post.png" alt="How To Make Yourself Work When You Have Zero Motivation?">
                                </div>

                                <div class="ktm-hop-info">
                                    <p>How To Make Yourself Work When You Have Zero Motivation?</p>
                                    <p><span class="btn-u">Read Article</span></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- .ktm-home-section-2 -->

    <section class="ktm-home-section-3">
        <div class="container">
            <svg width="106" height="180" viewBox="0 0 106 180" fill="none" xmlns="http://www.w3.org/2000/svg" id="decoration-1">
                <path d="M0 5.63513H9.25397M4.67692 10.2794L4.57709 1M19.3492 5.63513H28.6032M24.0261 10.2794L23.9263 1M38.6984 5.63513H47.9524M43.3753 10.2794L43.2755 1M58.0476 5.63513H67.3016M62.7245 10.2794L62.6247 1M77.3968 5.63513H86.6508M82.0737 10.2794L81.9739 1M96.746 5.63513H106M101.423 10.2794L101.323 1M0 22.5072H9.25397M4.67692 27.1514L4.57709 17.8721M19.3492 22.5072H28.6032M24.0261 27.1514L23.9263 17.8721M38.6984 22.5072H47.9524M43.3753 27.1514L43.2755 17.8721M58.0476 22.5072H67.3016M62.7245 27.1514L62.6247 17.8721M77.3968 22.5072H86.6508M82.0737 27.1514L81.9739 17.8721M96.746 22.5072H106M101.423 27.1514L101.323 17.8721M0 39.3793H9.25397M4.67692 44.0235L4.57709 34.7441M19.3492 39.3793H28.6032M24.0261 44.0235L23.9263 34.7441M38.6984 39.3793H47.9524M43.3753 44.0235L43.2755 34.7441M58.0476 39.3793H67.3016M62.7245 44.0235L62.6247 34.7441M77.3968 39.3793H86.6508M82.0737 44.0235L81.9739 34.7441M96.746 39.3793H106M101.423 44.0235L101.323 34.7441M0 56.2513H9.25397M4.67692 60.8956L4.57709 51.6162M19.3492 56.2513H28.6032M24.0261 60.8956L23.9263 51.6162M38.6984 56.2513H47.9524M43.3753 60.8956L43.2755 51.6162M58.0476 56.2513H67.3016M62.7245 60.8956L62.6247 51.6162M77.3968 56.2513H86.6508M82.0737 60.8956L81.9739 51.6162M96.746 56.2513H106M101.423 60.8956L101.323 51.6162M0 73.1234H9.25397M4.67692 77.7676L4.57709 68.4883M19.3492 73.1234H28.6032M24.0261 77.7676L23.9263 68.4883M38.6984 73.1234H47.9524M43.3753 77.7676L43.2755 68.4883M58.0476 73.1234H67.3016M62.7245 77.7676L62.6247 68.4883M77.3968 73.1234H86.6508M82.0737 77.7676L81.9739 68.4883M96.746 73.1234H106M101.423 77.7676L101.323 68.4883M0 89.9954H9.25397M4.67692 94.6397L4.57709 85.3603M19.3492 89.9954H28.6032M24.0261 94.6397L23.9263 85.3603M38.6984 89.9954H47.9524M43.3753 94.6397L43.2755 85.3603M58.0476 89.9954H67.3016M62.7245 94.6397L62.6247 85.3603M77.3968 89.9954H86.6508M82.0737 94.6397L81.9739 85.3603M96.746 89.9954H106M101.423 94.6397L101.323 85.3603M0 106.868H9.25397M4.67692 111.512L4.57709 102.232M19.3492 106.868H28.6032M24.0261 111.512L23.9263 102.232M38.6984 106.868H47.9524M43.3753 111.512L43.2755 102.232M58.0476 106.868H67.3016M62.7245 111.512L62.6247 102.232M77.3968 106.868H86.6508M82.0737 111.512L81.9739 102.232M96.746 106.868H106M101.423 111.512L101.323 102.232M0 140.612H9.25397M4.67692 145.256L4.57709 135.977M19.3492 140.612H28.6032M24.0261 145.256L23.9263 135.977M38.6984 140.612H47.9524M43.3753 145.256L43.2755 135.977M58.0476 140.612H67.3016M62.7245 145.256L62.6247 135.977M77.3968 140.612H86.6508M82.0737 145.256L81.9739 135.977M96.746 140.612H106M101.423 145.256L101.323 135.977M0 157.484H9.25397M4.67692 162.128L4.57709 152.849M19.3492 157.484H28.6032M24.0261 162.128L23.9263 152.849M38.6984 157.484H47.9524M43.3753 162.128L43.2755 152.849M58.0476 157.484H67.3016M62.7245 162.128L62.6247 152.849M77.3968 157.484H86.6508M82.0737 162.128L81.9739 152.849M96.746 157.484H106M101.423 162.128L101.323 152.849M0 174.356H9.25397M4.67692 179L4.57709 169.721M19.3492 174.356H28.6032M24.0261 179L23.9263 169.721M38.6984 174.356H47.9524M43.3753 179L43.2755 169.721M58.0476 174.356H67.3016M62.7245 179L62.6247 169.721M77.3968 174.356H86.6508M82.0737 179L81.9739 169.721M96.746 174.356H106M101.423 179L101.323 169.721M0 123.74H9.25397M4.67692 128.384L4.57709 119.104M19.3492 123.74H28.6032M24.0261 128.384L23.9263 119.104M38.6984 123.74H47.9524M43.3753 128.384L43.2755 119.104M58.0476 123.74H67.3016M62.7245 128.384L62.6247 119.104M77.3968 123.74H86.6508M82.0737 128.384L81.9739 119.104M96.746 123.74H106M101.423 128.384L101.323 119.104" stroke="#FFC220" stroke-width="2"/>
            </svg>
            <h2>Upcoming Workshops</h2>

            <?php
            $events  =   tribe_get_events([
                'posts_per_page' => 4
             ]);
            ?>
            <div class="row">
                <?php 
                    foreach ($events as $event):
                        $fields     =   get_post_meta( $event->ID, "", true );
                        $time_start =   strtotime($fields['_EventStartDate'][0]);
                        $time_end   =   strtotime($fields['_EventEndDate'][0]);

                        $from_to_time   =   date('g:iA', $time_start) . ' - ' . date('g:iA', $time_end);
                        if ( $from_to_time == '12:00AM - 11:59PM' ) {
                            $from_to_time = 'ALL DAY';
                        }
                ?>
                <div class="col-md-6">
                    <a href="<?= get_permalink($event->ID); ?>" title="<?= $event->post_title; ?>" class="ktm-ue-list">
                        <div class="ktm-ue-date">
                            <div class="ktm-ue-cal">
                                <div class="ktm-ue-cal-mth">
                                    <?= date('M', $time_start); ?>
                                </div>

                                <div class="ktm-ue-cal-date">
                                <?= date('d', $time_start); ?>
                                </div>
                            </div>
                        </div>

                        <div class="ktm-ue-info">
                            <p><?= $event->post_title; ?></p>
                            <div class="ktm-ue-info-bottom">
                                <div class="ktm-ue-info-time">
                                    <?= $from_to_time; ?>
                                </div>

                                <div class="ktm-ue-info-view">
                                    <span class="btn-u">
                                        VIEW EVENT
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!-- .col-md-6 -->

                <?php endforeach; ?>

                <p class="col-md-12">
                    <a href="<?= home_url(); ?>/events/" title="View Calendar" class="btn">View Calendar</a>
                </p>
            </div>
        </div>
    </section><!-- .ktm-home-section-3 -->


    <svg width="1277" height="97" viewBox="0 0 1277 97" fill="none" xmlns="http://www.w3.org/2000/svg" class="ktm-home-section-4">
    <path d="M347.5 91.1891C238.3 109.883 67.6667 79.0306 -4 61.2677V0H1274.5L1277 69.8166C1154.5 80.3603 972 25.6469 873.5 18.2378C772.491 10.64 484 67.8219 347.5 91.1891Z" fill="#FFC220"/>
    <path d="M924.402 67.6868C1033.94 81.5626 1205.11 58.6619 1277 45.4771V0H-5.49219L-8 51.8227C114.883 59.6489 297.952 19.0369 396.76 13.5374C498.084 7.89773 787.476 50.3421 924.402 67.6868Z" fill="#FFFBC0" fill-opacity="0.72"/>
    </svg>

    <div class="ktm-brand-identity">KEYS TO ME</div>

</div>

<?php get_footer(); ?>