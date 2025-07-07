<?php
/* Template name: Контакты */
get_header();
?>

<section class="contacts-page__contacts">
    <div class="container">
        <h1>Контакты</h1>
        <div class="contacts__contents">
            <div class="contents__info">
                <div class="info__item">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.4289 9.38059C13.645 6.34035 14.0504 3.09735 13.2397 2.08394C11.4155 -0.753618 2.29481 0.0571117 1.07872 3.09735C-0.948108 8.3671 1.28139 13.4342 5.94309 14.0423C9.18601 14.6503 11.0101 13.2316 12.4289 9.38059Z"
                              fill="#B08A62"/>
                    </svg>
                    <p class="item__title">АДРЕС</p>
                    <p class="item__info text"><?php the_field( 'address-full', 'option' ); ?></p>
                </div>
                <div class="info__item">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.4289 9.38059C13.645 6.34035 14.0504 3.09735 13.2397 2.08394C11.4155 -0.753618 2.29481 0.0571117 1.07872 3.09735C-0.948108 8.3671 1.28139 13.4342 5.94309 14.0423C9.18601 14.6503 11.0101 13.2316 12.4289 9.38059Z"
                              fill="#B08A62"/>
                    </svg>
                    <p class="item__title">РЕЖИМ РАБОТЫ</p>
                    <p class="item__info text"><?php the_field( 'working', 'option' ); ?></p>
                </div>
                <div class="info__item">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.4289 9.38059C13.645 6.34035 14.0504 3.09735 13.2397 2.08394C11.4155 -0.753618 2.29481 0.0571117 1.07872 3.09735C-0.948108 8.3671 1.28139 13.4342 5.94309 14.0423C9.18601 14.6503 11.0101 13.2316 12.4289 9.38059Z"
                              fill="#B08A62"/>
                    </svg>
                    <p class="item__title">КОНТАКТЫ</p>
                    <a href="tel:<?php echo clearPhone( get_field( 'phone', 'option' ) ); ?>"
                       class="item__info link border-cursor"><?php the_field( 'phone', 'option' ); ?></a>
                    <a href="mailto:<?php the_field( 'mail', 'option' ); ?>"
                       class="item__info link border-cursor"><?php the_field( 'mail', 'option' ); ?></a>
                    <a target="_blank" href="<?php the_field( 'wa', 'option' ); ?>"
                       class="item__info link border-cursor">WhatsApp</a>
                    <a target="_blank" href="<?php the_field( 'tg', 'option' ); ?>" class="item__info link
                    border-cursor">Telegram</a>
                </div>
                <div class="info__item">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.4289 9.38059C13.645 6.34035 14.0504 3.09735 13.2397 2.08394C11.4155 -0.753618 2.29481 0.0571117 1.07872 3.09735C-0.948108 8.3671 1.28139 13.4342 5.94309 14.0423C9.18601 14.6503 11.0101 13.2316 12.4289 9.38059Z"
                              fill="#B08A62"/>
                    </svg>
                    <p class="item__title">СОЦИАЛЬНЫЕ СЕТИ</p>
                    <a target="_blank" href="<?php the_field( 'tg_channel', 'option' ); ?>" class="item__info link
                    border-cursor">ТГ-канал</a>
                    <a target="_blank" href="<?php the_field( 'vk', 'option' ); ?>"
                       class="item__info link border-cursor">Вконтакте</a>
                </div>
            </div>
            <div class="contents__map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7691f5773cffbe2bd9be74381a9de349e5efef11dce2ba4022be008d673accd4&amp;source=constructor"
                        width="1280" height="720" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>

<!--<section class="contacts-page__requisites">
    <div class="container">
        <h1>Реквизиты</h1>
        <div class="requisites__contents">
            <?php /*if ( have_rows( 'requisites' ) ) : */ ?>
                <?php /*while ( have_rows( 'requisites' ) ) : the_row(); */ ?>
                    <div class="contents__item">
                        <p class="item__name"><?php /*the_sub_field( 'requisites-name' ); */ ?></p>
                        <p class="item__info"><?php /*the_sub_field( 'requisites-info' ); */ ?></p>
                    </div>
                <?php /*endwhile; */ ?>
            <?php /*endif; */ ?>
        </div>
    </div>
</section>-->

<?php echo get_template_part( 'parts/components/ask', 'questions' ); ?>

<?php get_footer(); ?>
