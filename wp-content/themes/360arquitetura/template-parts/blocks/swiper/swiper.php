<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'swiper-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'swiper';
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}

if ( $is_preview ) {
	$className .= ' is-admin';
}
?>
<div id="<?php echo esc_attr( $id ); ?>" class="gatsby-swiper <?php echo esc_attr( $className ); ?>">
  <?php if ( have_rows( 'swiper' ) ) : ?>
  <div class="swiper-container">
	<div class="swiper-wrapper">
		<?php
		while ( have_rows( 'swiper' ) ) :
			the_row();
					$image = get_sub_field( 'imagem' );
			?>
	  <div class="swiper-slide">
			<?php echo wp_get_attachment_image( $image['id'], 'full' ); ?>
	  </div>
	  <?php endwhile; ?>
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination">
	  <!--Keep-->
	</div>
  </div>

  <?php else : ?>
  <div>
	<p>Adicionar Imagens...</p>
  </div>
  <?php endif; ?>
</div>
