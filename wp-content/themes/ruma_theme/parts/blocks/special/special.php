<?php

	/**
	 * Testimonial Block Template.
	 *
	 * @param   array $block The block settings and attributes.
	 * @param   string $content The block inner HTML (empty).
	 * @param   bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */



?>

<div class="popup__info-block">

	<?php if ( have_rows( 'special-single-button' ) ) : ?>
		<?php while ( have_rows( 'special-single-button' ) ) : the_row(); ?>
			<?php if (get_sub_field( 'button-name' )) { ?>
				<a href="<?php the_sub_field( 'button-links' ); ?>" class="default-button special__button-book dark-hover view-cursor info__button"><?php the_sub_field( 'button-name' ); ?></a>
			<?php } ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>