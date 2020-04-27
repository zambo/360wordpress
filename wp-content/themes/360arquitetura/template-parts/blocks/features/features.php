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
$block_id = 'features-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$block_class = 'features';
if ( ! empty( $block['className'] ) ) {
	$block_class .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$block_class .= ' align' . $block['align'];
}


$kicker = get_field( 'featured_header' )['kicker'];
$title  = get_field( 'featured_header' )['title'];
$text   = get_field( 'featured_header' )['text'];

?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="acf-block acf-block__features <?php echo esc_attr( $block_class ); ?>">
	<div class="content half-width">
		<div class="kicker">
		<?php if ( $kicker ) : ?>
			<?php echo $kicker; ?>
		<?php else : ?>
			Aenean imperdiet
		<?php endif; ?>
		</div>

		<h1 class="title">
		<?php if ( $title ) : ?>
			<?php echo $title; ?>
		<?php else : ?>
			In enim justo, rhoncus ut
		<?php endif; ?>
		</h1>

		<div class="text">
		<?php if ( $text ) : ?>
			<?php echo $text; ?>
		<?php endif; ?>
		</div>
	</div>

	<div class="features test">
		<?php if ( have_rows( 'features' ) ) : ?>
				<?php
				while ( have_rows( 'features' ) ) :
					the_row();
					?>
				<div class="feature">
					<div><?php echo the_sub_field( 'icon' ); ?></div>
					<h3><?php echo the_sub_field( 'title' ); ?></h3>
					<p><?php echo the_sub_field( 'text' ); ?></p>
					</div>
				<?php endwhile; ?>

		<?php endif; ?>
	</div>

</div>

