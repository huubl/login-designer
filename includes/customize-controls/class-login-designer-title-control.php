<?php
/**
 * Title Customizer Control
 *
 * @see https://developer.wordpress.org/reference/classes/wp_customize_control/
 *
 * @package     @@pkg.name
 * @link        @@pkg.theme_uri
 * @author      @@pkg.author
 * @copyright   @@pkg.copyright
 * @license     @@pkg.license
 * @version     @@pkg.version
 */

/**
 * Custom Title Control
 */
class Login_Designer_Title_Control extends WP_Customize_Control {
	/**
	 * Set the control type.
	 *
	 * @var $type Customizer type
	 */
	public $type = 'login-designer-title';

	/**
	 * Enqueue neccessary custom control stylesheet.
	 */
	public function enqueue() {

		// Define where the control's scripts are.
		$css_dir = LOGIN_DESIGNER_PLUGIN_URL . 'assets/css/';

		// Use minified libraries if SCRIPT_DEBUG is turned off.
		$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

		// Custom control styles.
		wp_enqueue_style( 'login-designer-title-control', $css_dir . 'login-designer-customize-title-control' . $suffix . '.css', LOGIN_DESIGNER_VERSION, 'all' );
	}

	/**
	 * Render the content.
	 *
	 * @see https://developer.wordpress.org/reference/classes/wp_customize_control/render_content/
	 */
	public function render_content() {

		if ( isset( $this->label ) ) {
			echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
		}

		if ( ! empty( $this->description ) ) {
			echo '<div class="customize-control-tooltip-wrapper"><span class="customize-control-tooltip hint hint--top" data-hint="' . esc_html( $this->description ) . '"><span class="customize-control-tooltip-icon"></span></span></div>';
		}

	}
}
