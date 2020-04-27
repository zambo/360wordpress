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
$block_id = 'section-background-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$block_class = 'section-background';
if ( ! empty( $block['className'] ) ) {
	$block_class .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$block_class .= ' align' . $block['align'];
}

$content                             = get_field( 'section_background_content' );
$section_background_kicker           = get_field( 'section_background_content' )['kicker'];
$section_background_title            = get_field( 'section_background_content' )['title'];
$section_background_text             = get_field( 'section_background_content' )['text'];
$section_background_primary_button   = get_field( 'section_background_content' )['primaryButton'];
$section_background_secondary_button = get_field( 'section_background_content' )['secondaryButton'];
$section_background_image            = get_field( 'section_background_image' );

$placeholder = '<img src="https://via.placeholder.com/300x450/f5f5f5/555d66?text=%20">';

?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="acf-block acf-block__section-background <?php echo esc_attr( $block_class ); ?>">

	<div>
		<?php if ( $section_background_image ) : ?>
		<div class="background-image"><?php echo wp_get_attachment_image( $section_background_image, 'large' ); ?></div>
		<?php endif; ?>
	</div>

	<div class="content">
		<div class="kicker">
		<?php if ( $section_background_kicker ) : ?>
			<?php echo $section_background_kicker; ?>
		<?php else : ?>
			Aenean imperdiet
		<?php endif; ?>
		</div>

		<h2 class="title">
		<?php if ( $section_background_title ) : ?>
			<?php echo $section_background_title; ?>
		<?php else : ?>
			In enim justo, rhoncus ut
		<?php endif; ?>
		</h2>

		<div class="text">
		<?php if ( $section_background_text ) : ?>
			<?php echo $section_background_text; ?>
		<?php endif; ?>
		</div>
	</div>
</div>


