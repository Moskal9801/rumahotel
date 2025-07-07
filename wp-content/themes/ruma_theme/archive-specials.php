<?php get_header();

$counter  = 1;
if (wp_is_mobile()) {
    $maxPosts = 5;
} else {
    $maxPosts = 9;
} ?>

<section class="archive-page__specials">
    <div class="container">
        <h2>Спецпредложения</h2>
        <div class="specials__contents">
            <div class="contents__items view-cursor">
                <?php $args = array(
                    'post_type' => 'specials',
                    'post_status' => 'publish',
                    'order'       => 'DESC',
                    'posts_per_page' => $maxPosts,
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ($query->have_posts() && (($counter % $maxPosts) !== 0)) {
                        $query->the_post();

                        get_template_part('parts/components/item', 'specials');

                        $counter++;
                    }
                    wp_reset_postdata();
                } else { ?>
                    <div class="items__not">На данный момент предложения отсутствуют</div>
                <?php } ?>
            </div>

            <?php $query = array(
                'post_type'      => 'specials',
                'post_status'    => 'publish',
                'post_per_page' => $maxPosts,
            );
            $posts = new WP_Query( $query );

            $allPostsCounter = 0;
            while ( $posts->have_posts() ) {
                $posts->the_post();
                $allPostsCounter ++;
            }

            $maxPosts --;
            $maxPages = ceil( $allPostsCounter / $maxPosts );

            ?> <a <?php if ( $maxPages <= 1 ) { ?> style="display: none; opacity: 0" <?php } ?>
                    id="more-projects"
                    class="contents__more <?php if ( $maxPages <= 1 ) { echo 'hidden'; } ?>"
                    data-current-page="1"
                    data-query='<?= json_encode( $posts->query_vars ); ?>'
                    data-max-pages="<?= $maxPages; ?>">
                <div class="loader-inner"></div>
            </a> <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php echo get_template_part('parts/components/subscribe', 'newsletter'); ?>

<?php get_footer(); ?>
