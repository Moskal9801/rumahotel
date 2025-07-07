<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-slider';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}

// Load values and assing defaults.
$slides = get_field('swiper-slider') ?: 'Добавьте изображения';

?>


<?php if ( $slides ) :  ?>
    <div id="<?= esc_attr($id); ?>" class="swiper swiper-acf-block-default">
        <div class="swiper-wrapper">
            <?php foreach ( $slides as $slide ): ?>
                <a href="<?= wp_get_attachment_url( $slide); ?>" class="swiper-slide" data-mfp-image>
                    <?= wp_get_attachment_image( $slide, 'full', false ); ?>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="swiper-control">
            <div class="swiper-pagination"></div>
            <div class="swiper-navigation">
                <div class="swiper-btn prev">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27 16H5" stroke="#202020" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14 7L5 16L14 25" stroke="#202020" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper-btn next">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 16H27" stroke="#202020" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18 7L27 16L18 25" stroke="#202020" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
