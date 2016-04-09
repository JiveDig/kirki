<?php
/**
 * Customizer Control: multicheck.
 *
 * Multiple checkbox customize control class.
 * Props @ Justin Tadlock: http://justintadlock.com/archives/2015/05/26/multiple-checkbox-customizer-control
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kirki_Controls_MultiCheck_Control' ) ) {

	class Kirki_Controls_MultiCheck_Control extends Kirki_Customize_Control {

		public $type = 'multicheck';

		public function enqueue() {
			wp_enqueue_script( 'kirki-multicheck' );
		}

		protected function content_template() { ?>

			<# if ( ! data.choices ) { return; } #>

			<# if ( data.tooltip ) { #>
				<a href="#" class="tooltip hint--left" data-hint="{{ data.tooltip }}"><span class='dashicons dashicons-info'></span></a>
			<# } #>

			<# if ( data.label ) { #>
				<span class="customize-control-title">{{ data.label }}</span>
			<# } #>

			<# if ( data.description ) { #>
				<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>

			<ul>
				<# for ( key in data.choices ) { #>
					<li>
						<label>
							<input type="checkbox" value="{{ key }}"<# if ( _.contains( data.value, key ) ) { #> checked<# } #> />
							{{ data.choices[ key ] }}
						</label>
					</li>
				<# } #>
			</ul>
		<?php }

	}

}
