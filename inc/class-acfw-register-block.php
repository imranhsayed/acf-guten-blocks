<?php
/**
 * Register Block Class
 *
 * @package ACF Guten Blocks
 */

class ACFW_Register_Block {

	/**
	 * Constructor function.
	 */
	function __construct() {

		add_action( 'acf/init', [ $this, 'register_blocks' ] );

	}

	/**
	 * Register Blocks.
	 */
	public function register_blocks() {

		if( ! function_exists( 'acf_register_block_type' ) ) {
			return;
		}

		// Register a testimonial block.
		acf_register_block_type( [
			'name'              => 'testimonial',
			'title'             => __( 'Testimonial' ),
			'description'       => __( 'A custom testimonial block.' ),
			'render_template'   => ACFB_BLOCK_TEMPLATE_PATH . 'testimonial.php',
			'category'          => 'formatting',
		] );

	}
}

new ACFW_Register_Block();
