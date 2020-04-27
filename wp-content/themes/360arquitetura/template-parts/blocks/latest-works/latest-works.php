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
$block_id = 'latest-works-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$block_class = 'latest-works';
if ( ! empty( $block['className'] ) ) {
	$block_class .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$block_class .= ' align' . $block['align'];
}


$content             = get_field( 'latest_works_content' );
$latest_works_kicker = get_field( 'latest_works_content' )['kicker'];
$latest_works_title  = get_field( 'latest_works_content' )['title'];
$latest_works_text   = get_field( 'latest_works_content' )['text'];
$placeholder         = '<img src="https://via.placeholder.com/300x450/f5f5f5/555d66?text=%20">';

?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="acf-block acf-block__latest-works <?php echo esc_attr( $block_class ); ?>">

	<div class="content">
		<div class="kicker">
		<?php if ( $latest_works_kicker ) : ?>
			<?php echo $latest_works_kicker; ?>
		<?php else : ?>
			Aenean imperdiet
		<?php endif; ?>
		</div>

		<h2 class="title">
		<?php if ( $latest_works_title ) : ?>
			<?php echo $latest_works_title; ?>
		<?php else : ?>
			In enim justo, rhoncus ut
		<?php endif; ?>
		</h2>

		<div class="text">
		<?php if ( $latest_works_text ) : ?>
			<?php echo $latest_works_text; ?>
		<?php endif; ?>
		</div>
	</div>
</div>

<div class="alignfull acf-block acf-block__latest-works__portfolio">

<div class="image"><?php echo $placeholder ; ?></div>
<div class="image"><?php echo $placeholder ; ?></div>
<div class="image"><?php echo $placeholder ; ?></div>
<div class="image"><?php echo $placeholder ; ?></div>
<div class="image"><?php echo $placeholder ; ?></div>

</div>

