<?php
/**
 * Team Member block
 *
 * @package      ClientName
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

$name = get_field( 'name' );
$title = get_field( 'title' );
$photo = get_field( 'photo' );
$description = get_field( 'description' );

?>

<div class="team-member">
	<div class="team-member--header">
		<?php
		if ( ! empty( $photo ) ) {
			echo esc_html( wp_get_attachment_image( $photo['ID'], 'thumbnail', null, array( 'class' => 'team-member--avatar' ) ) );
		}

		if ( ! empty( $name ) ) {
			?>
			<h4>
				<?php echo esc_html( $name );?>
			</h4>
			<?php
		}

		if ( ! empty( $title ) ) {
			?>
			<h6 class="alt">
				<?php echo esc_html(  $title ); ?>
			</h6>
			<?php
		}
		?>
	</div>
	<div class="team-member--content">
		<?php echo apply_filters( 'ea_the_content', $description ); ?>
	</div>
</div>
