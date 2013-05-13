<?php

namespace stripe;

/**
 * Utility methods for the Stripe app.
 */
class Util {
	/**
	 * Fetch a list of valid button labels.
	 */
	public static function get_labels () {
		return array ('Pay', 'Buy', 'Donate', 'Add Card', 'Checkout');
	}

	/**
	 * Fetch yes/no for the collect address option.
	 */
	public static function yes_no () {
		return array ('No', 'Yes');
	}
	
	/**
	 * Convert currency into display format.
	 */
	public static function money_format ($cents) {
		return money_format ('%^!n', $cents / 100);
	}
	
	/**
	 * Filter names and show 'None' if empty.
	 */
	public static function user_name ($name) {
		return strlen ($name) ? $name : __ ('None');
	}
	
	/**
	 * Filter plans and show 'None' if empty.
	 */
	public static function plan_name ($name) {
		return strlen ($name) ? \Appconf::stripe ('Plans', $name) : __ ('None');
	}
}

?>