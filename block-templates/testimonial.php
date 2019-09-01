<?php
/**
 * Template for Testimonial block.
 *
 * Renders both in editor and frontend.
 *
 * @package ACF Guten Blocks
 */

if ( empty( $block['id'] ) ) {
	return;
}

// Create id attribute allowing for custom 'anchor' value.
$id = sprintf( 'testimonial-%s', $block['id'] );

if( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';

if( ! empty( $block['className'] ) ) {
	$className .= sprintf( ' %s', $block['className'] );
}

if( ! empty( $block['align'] ) ) {
	$className .= sprintf( ' align%s', $block['align'] );
}

// Load values and assigning defaults.
$text = get_field( 'testimonial' ) ?: 'Your testimonial here...';
$author = get_field( 'author' ) ?: 'Author name';
$role = get_field( 'role' ) ?: 'Author role';
$image = get_field( 'image' ) ?: '';
$background_color = get_field( 'background_color' );
$text_color = get_field( 'text_color' );

?>
	<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $className ); ?>">
		<blockquote class="testimonial-blockquote">
			<span class="testimonial-text"><?php echo esc_html( $text ); ?></span>
			<span class="testimonial-author"><?php echo esc_html( $author ); ?></span>
			<span class="testimonial-role"><?php echo esc_html( $role ); ?></span>
		</blockquote>

		<?php
		if ( ! empty( $image ) ) {
			?>
			<div class="testimonial-image" style="padding-left: 24px;">
				<?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
			</div>
			<?php
		}
		?>

		<style type="text/css">
			#<?php echo esc_html( $id ); ?> {
				background: <?php echo esc_html( $background_color ); ?>;
				color: <?php echo esc_html( $text_color ); ?>;
			}
		</style>
	</div>
<?php
