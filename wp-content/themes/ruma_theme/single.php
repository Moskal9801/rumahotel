<?php get_header(); ?>

    <section class="single-page__default">
        <div class="default-container">
            <p class="default__date"><?php echo get_the_date('d.m.Y');?></p>
            <h1 class="default__title"><?php the_title(); ?></h1>
            <div class="default__contents"><?php the_content(); ?></div>
        </div>
    </section>

<?php get_footer(); ?>