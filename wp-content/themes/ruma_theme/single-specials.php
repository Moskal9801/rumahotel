<?php get_header(); ?>

<section class="single-page__default">
    <div class="default-container">
        <p class="default__date"><?php echo get_the_date('d.m.Y');?></p>
        <h1 class="default__title"><?php the_title(); ?></h1>
        <div class="default__contents"><?php the_content(); ?></div>
        <div class="popup__info-block">

			<?php if ( have_rows( 'special-single-button' ) ) : ?>
				<?php while ( have_rows( 'special-single-button' ) ) : the_row(); ?>
                    <?php if (get_sub_field( 'button-name' )) { ?>
                    <a href="<?php the_sub_field( 'button-links' ); ?>" class="default-button special__button-book dark-hover view-cursor info__button"><?php the_sub_field( 'button-name' ); ?></a>
                    <?php } ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</section>

<section class="single-page__other">
    <div class="container">
        <div class="other__title">
            <h2>Спецпредложения</h2>
            <a class="border-cursor" href="/specials/">СМОТРЕТЬ ВСЕ</a>
        </div>
        <div class="other__items view-cursor">
            <?php $args = array(
                'post_type' => 'specials',
                'post_status' => 'publish',
                'order'       => 'DESC',
                'posts_per_page' => 4,
                'post__not_in' => array(get_the_ID()),
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
                while ($query->have_posts()) {
                    $query->the_post();

                    get_template_part('parts/components/item', 'specials');
                }
                wp_reset_postdata();
            } else {?>
                <div class="items__not">На данный момент предложения отсутствуют</div>
            <?php } ?>
        </div>
    </div>
</section>

<?php echo get_template_part('parts/components/subscribe', 'newsletter'); ?>

<?php get_footer(); ?>
