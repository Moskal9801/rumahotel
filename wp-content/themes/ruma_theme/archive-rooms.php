<?php get_header(); ?>

<section class="archive-page__rooms">
    <div class="container">
        <div class="rooms__contents">
            <?php $ordered_categories = array('standard', 'comfort', 'apartments', 'luxury', 'grand-lux');

            $categories = get_terms( array(
                'post_type' => 'rooms',
                'taxonomy' => 'rooms-category',
                'hide_empty' => false,
            ) );

            foreach ($ordered_categories as $ordered_category) {
                foreach ( $categories as $category ) {
                    if ($category->slug == $ordered_category) {
                        $args = array(
                            'post_type' => 'rooms',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'rooms-category',
                                    'field' => 'slug',
                                    'terms' => $category->slug,
                                ),
                            ),
                            'post_status' => 'publish',
                        );

                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) {

                            $post_count = $query->found_posts;

                            if ($post_count > 1) { ?>

                                <div class="contents__items rooms category">
                                    <p class="items__name"><?php echo $category->name;?></p>
                                    <div class="items__more">
                                        <div class="more__rooms">
                                            <?php while ($query->have_posts()) { $query->the_post(); ?>
                                                <a href="<?php echo get_permalink(); ?>" class="rooms__item view-cursor">
                                                    <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.0504 4.5233C6.65845 3.00318 6.86114 1.38168 6.45577 0.874977C5.5437 -0.543801 0.983344 -0.138436 0.375296 1.38168C-0.638117 4.01656 0.476631 6.55011 2.80748 6.85414C4.42894 7.15816 5.34101 6.44879 6.0504 4.5233Z" fill="#B08A62"/>
                                                    </svg>
                                                    <p><?php echo get_the_title(); ?></p>
                                                </a>
                                            <?php } wp_reset_postdata(); ?>
                                        </div>
                                        <svg class="more__arrow" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 32H54" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M36 14L54 32L36 50" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="items__background">
                                        <img src="<?php the_field( 'image-category', 'rooms-category_' . $category->term_id); ?>" />
                                    </div>
                                </div>
                            <?php } else {
                                $query->the_post(); ?>

                                <a class="contents__item rooms view-cursor" href="<?php echo get_permalink(); ?>">
                                    <div class="item__info">
                                        <p><?php echo $category->name; ?></p>
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 32H54" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M36 14L54 32L36 50" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="item__background">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </a>
                            <?php }
                        }
                    }
                }
            } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
