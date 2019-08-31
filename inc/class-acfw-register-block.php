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

		acf_register_block_type( array(
			'name'			=> 'team-member',
			'title'			=> __( 'Team Member', 'clientname' ),
			'category'		=> 'formatting',
			'icon'			=> 'admin-users',
			'mode'			=> 'auto',
			'keywords'		=> array( 'profile', 'user', 'author' ),
			'render_template'	=> 'block-templates/block-team-member.php',
		));

	}

}

new ACFW_Register_Block();
