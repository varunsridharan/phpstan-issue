<?php
if ( ! function_exists( 'wc_rbt_format_tax_rateae' ) ) {
	/**
	 * Formats Tax Rate
	 *
	 * @param $rate
	 *
	 * @return string
	 */
	function wc_rbt_format_tax_rateae( $rate, $rate ) {
		return number_format( (float) $rate, 4, '.', '' );
	}
}

wc_rbt_format_tax_rateae(22,10)
