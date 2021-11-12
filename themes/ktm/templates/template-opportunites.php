<?php
/**
 * Template Name: Opportunities
 */

get_header(); ?>

<?php ktm_header_title(); ?>

<div class="container ktm-opportunities-container">
    <ul class="ktm-opportunities-list">
        <li>
            <div class="ktm-opp-main">
                1. Project Member <a href="<?= get_permalink( 87 ); ?>" class="btn">Apply</a>
            </div>
        </li>

        <li>
            <div class="ktm-opp-main">
                2. Content Creator <a href="<?= get_permalink( 87 ); ?>" class="btn">Apply</a>
            </div>
        </li>
    </ul>
</div>

<?php get_footer(); ?>