<a class="items__item specials-card" href="<?php echo get_permalink(); ?>">
    <div class="item__image">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="item__info">
        <p class="info__title"><?php echo get_the_title() ?></p>
        <div class="info__description"><?php echo get_the_excerpt() ?></div>
        <p class="info__button">УЗНАТЬ ПОДРОБНЕЕ</p>
    </div>
</a>