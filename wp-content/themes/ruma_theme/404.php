<?php get_header(); ?>

<section class="error-page__error">
    <div class="error__background">
        <?php if (wp_is_mobile()) { ?>
            <img src="<?php the_field( 'image-404_mobile', 'option' ); ?>">
        <?php } else { ?>
            <img src="<?php the_field( 'image-404', 'option' ); ?>">
        <?php } ?>
    </div>
    <div class="error__info">
        <h2>Ошибка 404</h2>
        <h6>Страницы, которую вы ищите, не существует, либо она была удалена или переименована</h6>
        <a class="default-button light-hover" href="/">ПЕРЕЙТИ НА ГЛАВНУЮ</a>
    </div>
</section>

<?php get_footer(); ?>