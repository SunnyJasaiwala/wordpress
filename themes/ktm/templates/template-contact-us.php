<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

<?php ktm_header_title(); ?>

<div class="container ktm-contact-container">
    <div class="row">
        <div class="col-md-6">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="col-md-6">
            <h3>Follow Us</h3>

            <div class="row">
                <div class="col-md-8">
                    <p>Follow us on the social platforms to get latest news and information about the latest events.</p>
                </div>
            </div>
            <section class="ktm-sidebar-social">
                <a href="<?= ktm_get_media_link('instagram'); ?>" title="Instagram" target="_blank">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0ZM7.02122 4.229C7.53322 4.2057 7.69683 4.2 9.00044 4.2H8.99894C10.303 4.2 10.466 4.2057 10.978 4.229C11.489 4.2524 11.838 4.3333 12.144 4.452C12.46 4.5745 12.727 4.7385 12.994 5.00551C13.261 5.27231 13.425 5.54011 13.548 5.85581C13.666 6.16102 13.747 6.50982 13.771 7.02083C13.794 7.53283 13.8 7.69643 13.8 9.00005C13.8 10.3037 13.794 10.4669 13.771 10.9789C13.747 11.4897 13.666 11.8386 13.548 12.1439C13.425 12.4595 13.261 12.7273 12.994 12.9941C12.7273 13.2611 12.4599 13.4255 12.1443 13.5481C11.8389 13.6668 11.4897 13.7477 10.9787 13.7711C10.4667 13.7944 10.3036 13.8001 8.99984 13.8001C7.69633 13.8001 7.53282 13.7944 7.02082 13.7711C6.50991 13.7477 6.16101 13.6668 5.85561 13.5481C5.5401 13.4255 5.2723 13.2611 5.0056 12.9941C4.7387 12.7273 4.57469 12.4595 4.45199 12.1438C4.33339 11.8386 4.25249 11.4898 4.22899 10.9788C4.20579 10.4668 4.19999 10.3037 4.19999 9.00005C4.19999 7.69643 4.20599 7.53273 4.22889 7.02073C4.25189 6.50992 4.33289 6.16102 4.45189 5.85571C4.57489 5.54011 4.7389 5.27231 5.0059 5.00551C5.2727 4.7386 5.5405 4.5746 5.85621 4.452C6.16141 4.3333 6.51021 4.2524 7.02122 4.229Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.56987 5.06504C8.65348 5.06491 8.74342 5.06495 8.84049 5.065L9.00047 5.06504C10.2821 5.06504 10.434 5.06964 10.9401 5.09264C11.4081 5.11404 11.6621 5.19224 11.8313 5.25794C12.0553 5.34495 12.215 5.44895 12.3829 5.61695C12.5509 5.78495 12.6549 5.94495 12.7421 6.16895C12.8078 6.33796 12.8861 6.59196 12.9074 7.05996C12.9304 7.56597 12.9354 7.71797 12.9354 8.99898C12.9354 10.28 12.9304 10.432 12.9074 10.938C12.886 11.406 12.8078 11.66 12.7421 11.829C12.6551 12.053 12.5509 12.2125 12.3829 12.3804C12.2149 12.5484 12.0554 12.6524 11.8313 12.7394C11.6623 12.8054 11.4081 12.8834 10.9401 12.9048C10.4341 12.9278 10.2821 12.9328 9.00047 12.9328C7.71876 12.9328 7.56686 12.9278 7.06085 12.9048C6.59285 12.8832 6.33884 12.805 6.16954 12.7393C5.94554 12.6523 5.78554 12.5483 5.61754 12.3803C5.44953 12.2123 5.34553 12.0527 5.25833 11.8286C5.19263 11.6596 5.11433 11.4056 5.09303 10.9376C5.07003 10.4316 5.06543 10.2796 5.06543 8.99778C5.06543 7.71597 5.07003 7.56477 5.09303 7.05876C5.11443 6.59076 5.19263 6.33676 5.25833 6.16755C5.34533 5.94355 5.44953 5.78355 5.61754 5.61555C5.78554 5.44755 5.94554 5.34355 6.16954 5.25634C6.33874 5.19034 6.59285 5.11234 7.06085 5.09084C7.50365 5.07084 7.67526 5.06484 8.56987 5.06384V5.06504ZM11.5627 5.87266C11.2447 5.87266 10.9867 6.13379 10.9867 6.45613C10.9867 6.77836 11.2447 7.03979 11.5627 7.03979C11.8807 7.03979 12.1387 6.77836 12.1387 6.45613C12.1387 6.13389 11.8807 5.87246 11.5627 5.87246V5.87266ZM6.53543 9.01964C6.53543 7.65836 7.63909 6.55467 9.00036 6.55462C10.3617 6.55462 11.4651 7.65833 11.4651 9.01964C11.4651 10.381 10.3618 11.4842 9.00046 11.4842C7.63915 11.4842 6.53543 10.381 6.53543 9.01964Z" fill="white"/>
                        <path d="M9.00041 7.40002C9.88402 7.40002 10.6004 8.11633 10.6004 9.00004C10.6004 9.88365 9.88402 10.6001 9.00041 10.6001C8.1167 10.6001 7.40039 9.88365 7.40039 9.00004C7.40039 8.11633 8.1167 7.40002 9.00041 7.40002Z" fill="white"/>
                    </svg>
                </a>

                <a href="<?= ktm_get_media_link('facebook'); ?>" title="Facebook" target="_blank">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 9C18 4.02891 13.9711 0 9 0C4.02891 0 0 4.02891 0 9C0 13.493 3.29062 17.216 7.59375 17.891V11.6016H5.30859V9H7.59375V7.01719C7.59375 4.76192 8.93672 3.51563 10.9934 3.51563C11.9777 3.51563 13.0078 3.69141 13.0078 3.69141V5.90625H11.8723C10.7543 5.90625 10.4062 6.60059 10.4062 7.3125V9H12.9023L12.5033 11.6016H10.4062V17.891C14.7094 17.216 18 13.493 18 9Z" fill="white"/>
                    </svg>
                </a>

                <a href="<?= ktm_get_media_link('linkedin'); ?>" title="LinkedIn" target="_blank">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0ZM6.49453 5.55851C6.48129 4.95765 6.05161 4.5 5.35388 4.5C4.65614 4.5 4.19999 4.95765 4.19999 5.55851C4.19999 6.14693 4.64266 6.61776 5.3274 6.61776H5.34044C6.05161 6.61776 6.49453 6.14693 6.49453 5.55851ZM6.36019 7.45419H4.3206V13.5823H6.36019V7.45419ZM11.3674 7.31029C12.7096 7.31029 13.7158 8.18635 13.7158 10.0686L13.7157 13.5823H11.6762V10.3038C11.6762 9.48027 11.381 8.91834 10.6427 8.91834C10.0792 8.91834 9.74357 9.29716 9.59616 9.66306C9.54223 9.79419 9.529 9.97689 9.529 10.16V13.5825H7.48915C7.48915 13.5825 7.51604 8.02939 7.48915 7.45436H9.529V8.32236C9.7997 7.90509 10.2845 7.31029 11.3674 7.31029Z" fill="white"/>
                    </svg>
                </a>

                <a href="<?= ktm_get_media_link('twitter'); ?>" title="Twitter" target="_blank">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0ZM8.74934 7.62674L8.73045 7.31532C8.67379 6.50816 9.17112 5.77092 9.95804 5.48493C10.2476 5.38324 10.7387 5.37053 11.0597 5.4595C11.1856 5.49764 11.4248 5.62475 11.5948 5.73915L11.9033 5.94888L12.2432 5.84084C12.4321 5.78364 12.6839 5.6883 12.7972 5.62475C12.9042 5.56755 12.9987 5.53577 12.9987 5.55484C12.9987 5.66288 12.7657 6.0315 12.5706 6.23488C12.3062 6.52088 12.3817 6.5463 12.9168 6.35563C13.2379 6.24759 13.2442 6.24759 13.1812 6.36834C13.1435 6.4319 12.9483 6.65434 12.7406 6.85772C12.388 7.20727 12.3691 7.2454 12.3691 7.53776C12.3691 7.989 12.1551 8.92962 11.9411 9.44441C11.5445 10.4105 10.6946 11.4083 9.84472 11.9104C8.64861 12.6158 7.0559 12.7938 5.715 12.3807C5.26803 12.2408 4.5 11.8849 4.5 11.8214C4.5 11.8023 4.73293 11.7769 5.01622 11.7705C5.60798 11.7578 6.19973 11.5926 6.70336 11.3002L7.04331 11.0968L6.653 10.9634C6.09901 10.7727 5.60168 10.3342 5.47577 9.92108C5.438 9.78761 5.45059 9.78126 5.80313 9.78126L6.16826 9.7749L5.85979 9.62872C5.49466 9.44441 5.16101 9.13299 4.99733 8.81522C4.87772 8.58642 4.72663 8.00807 4.7707 7.96358C4.78329 7.94451 4.91549 7.98265 5.06658 8.03349C5.50095 8.19238 5.55761 8.15424 5.3058 7.88731C4.83365 7.40429 4.68886 6.68612 4.91549 6.00608L5.02251 5.70101L5.438 6.11412C6.28787 6.9467 7.28882 7.44243 8.43457 7.5886L8.74934 7.62674Z" fill="white"/>
                    </svg>
                </a>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>