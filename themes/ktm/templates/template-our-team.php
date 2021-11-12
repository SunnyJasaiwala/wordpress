<?php 
/**
 * Template Name: Our Team
 */

get_header(); 
$fields = get_fields();
?>

<?php ktm_header_title(); ?>

<div class="container our-team-container">
    <div class="row">
        <?php foreach($fields['team'] as $member): ?>
            <div class="col-md-4">
                <a href="#" rel="nofollow" class="team-member">
                    <div class="team-member-image">
                        <img src="<?= $member['image']; ?>" alt="<?= $member['name']; ?>" />
                    </div>

                    <div class="team-member-float-card">
                        <h2><?= $member['name'] ?></h2>
                        <p><?= $member['title'] ?></p>
                    </div>

                    <div class="team-member-bio" style="display: none;">
                        <?= $member['bio']; ?>
                    </div>
        </a>
            </div>
        <?php endforeach; ?>
    </div>
</div><!-- .our-team-container -->

<!-- Create custom lightbox -->
<div class="lightbox-container-fixed">
    <div class="lightbox-container">
        <div class="lightbox-content">
            <div class="lightbox-header">
                <div class="lightbox-image">
                    <img src="" alt="" />
                </div>

                <div class="lightbox-title">
                    <h2></h2>
                    <p></p>
                </div>

                <a href="#" rel="nofollow" title="Close" class="lightbox-close">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99998 6.58579L14.3639 0.221826L15.7782 1.63604L9.4142 8L15.7782 14.364L14.3639 15.7782L7.99998 9.41421L1.63602 15.7782L0.22181 14.364L6.58577 8L0.22181 1.63604L1.63602 0.221826L7.99998 6.58579Z" fill="#333333"/>
                    </svg>
                </a>
            </div>

            <div class="lightbox-content-inner">
                <div class="lightbox-text">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox jquery script -->
<script>
    (function($){
        $(document).ready(function(){
            $('.team-member').on('click', function(e){
                e.preventDefault();

                var $this = $(this);
                var $image = $this.find('.team-member-image img');
                var $name = $this.find('.team-member-float-card h2');
                var $title = $this.find('.team-member-float-card p');
                var $bio = $this.find('.team-member-bio');
                var $lightbox = $('.lightbox-container-fixed');
                var $lightboxImage = $lightbox.find('.lightbox-image img');
                var $lightboxName = $lightbox.find('.lightbox-title h2');
                var $lightboxTitle = $lightbox.find('.lightbox-title p');
                var $lightboxText = $lightbox.find('.lightbox-text');

                $lightboxImage.attr('src', $image.attr('src'));
                $lightboxName.text($name.text());
                $lightboxTitle.text($title.text());
                $lightboxText.html($bio.html());

                $lightbox.fadeIn();
            });

            /*$('lightbox-container-fixed').on('click', function(e){
                e.preventDefault();

                var $this = $(this);

                if(e.target.className == 'lightbox-container' || e.target.className == 'lightbox-header'){
                    $this.fadeOut();
                }
            });*/
        });

        /** Close Lightbox */
        $(document).on('click', '.lightbox-close', function(){
            $('.lightbox-container-fixed').fadeOut();
	    return false;
        });
    })(jQuery)
</script>

<?php get_footer(); ?>