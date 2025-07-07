<?php
/* Template name: Бронирование */
get_header();
?>

<section class="booking__banner full-banner">
    <div class="banner__background desktop">
        <img src="<?php the_field( 'banner-image' ); ?>">
    </div>
    <div class="banner__background mobile">
        <img src="<?php the_field( 'banner-image_mobile' ); ?>">
    </div>
    <div class="banner__info container">
        <h1><?php the_field( 'banner-title' ); ?></h1>
        <?php if (get_field( 'banner-description' )) { ?>
            <p class="banner__description"><?php the_field( 'banner-description' ); ?></p>
        <?php } ?>
        <!--<div class="banner__control view-cursor">
            <a href="http://ruma.01cat.ru/" target="_blank" class="control__first default-button light-hover">ПЕРЕЙТИ НА САЙТ РЕСТОРАНА</a>
            <a href="#more-anchor" class="control__second border-button">ПОДРОБНЕЕ О РЕСТОРАНЕ</a>
        </div>-->
    </div>
</section>

<section class="booking__frame bvi-no-styles">
    <div class="container bvi-no-styles">
        <div id="tl-booking-form" class="bvi-no-styles"></div>
    </div>
</section>

<?php get_footer(); ?>