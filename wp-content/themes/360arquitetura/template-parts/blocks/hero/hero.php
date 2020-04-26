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
$block_id = 'hero-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$block_class = 'hero';
if ( ! empty( $block['className'] ) ) {
	$block_class .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$block_class .= ' align' . $block['align'];
}


$content               = get_field( 'hero_content' );
$hero_kicker           = get_field( 'hero_content' )['kicker'];
$hero_title            = get_field( 'hero_content' )['title'];
$hero_text             = get_field( 'hero_content' )['text'];
$hero_primary_button   = get_field( 'hero_content' )['primaryButton'];
$hero_secondary_button = get_field( 'hero_content' )['secondaryButton'];
$hero_image            = get_field( 'hero_image' );
$placeholder           = '<img src="https://via.placeholder.com/300x300/f5f5f5/555d66?text=%20">';

?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="acf-block-hero <?php echo esc_attr( $block_class ); ?>">


<div class="kicker">
<?php if ( $hero_kicker ) : ?>
	<?php echo $hero_kicker; ?>
<?php else : ?>
	...Adicionar pré-título
<?php endif; ?>
</div>

<div class="title">
<?php if ( $hero_title ) : ?>
	<?php echo $hero_title; ?>
<?php else : ?>
	...Adicionar Título
<?php endif; ?>
</div>

<div class="content">
<?php if ( $hero_text ) : ?>
	<?php echo $hero_text; ?>
<?php else : ?>
	...Adicionar Conteúdo
<?php endif; ?>
</div>


	<div>
		<?php if ( $hero_image ) : ?>
			<?php echo wp_get_attachment_image( $hero_image, 'medium' ); ?>
		<?php else : ?>
			<img src="https://via.placeholder.com/300x300/f5f5f5/555d66?text=%20">
		<?php endif; ?>
	</div>

<div>
