<?php

/**
 * FeedMalaya
 * 
 * FeedMalaya is a social feed aggregator using FuelPHP, SimplePie and MySQL database.
 *
 * @package    FeedMalaya
 * @version    2.0
 * @author     FeedMalaya Development Team
 * @license    GPLv2 License (or later)
 * @link       http://github.com/mentariworks/feedmalaya
 */

/**
 * App\Option Class 
 * 
 * Option is based on the functionality of wp_option in WordPress
 * 
 * @package FeedMalaya
 * @subpackage App
 * @category Option
 * @author Mior Muhammad Zaki <crynobone@gmail.com>
 * @since 2.0
 */
class Option {

	private static $_enabled = false;
	private static $_data = array();

	/**
	 * Initiate only once...
	 * 
	 * @abstract
	 * @access public
	 * @return boolean 
	 */
	public static function _init() {
		\Config::load('app', TRUE);

		if (!empty(static::$_data)) {
			return true;
		}

		if (true === \Config::get('option.enable')) {
			static::$_enabled = true;
		}

		static::cache();

		return true;
	}

	private static function is_enabled() {
		return static::$_enabled;
	}

	private static function cache() {
		if (false === static::is_enabled()) {
			return false;
		}

		$all = \Model_Option::find('all');

		foreach ($all as $datum) {
			static::$_data[$datum->name] = array(
				'id' => $datum->id,
				'value' => $datum->$value
			);
		}

		return true;
	}

	public static function get($name = '') {
		if (false === static::is_enabled()) {
			return false;
		}

		if (!isset(static::$_data[$name])) {
			return false;
		}

		return static::$_data[$name]['value'];
	}

	public static function update($name = '', $value = '') {
		if (false === static::is_enabled()) {
			return false;
		}

		if (!isset(static::$_data[$name])) {
			static::insert($name, $value);
		}

		$data = \Model_Option::find(static::$_data[$name]['id']);

		$data->value = $value;
		$data->save();

		static::$_data[$name]['value'] = $data->value;

		return true;
	}

	public static function insert($name = '', $value = '') {
		if (false === static::is_enabled()) {
			return false;
		}

		if (isset(static::$_data[$name])) {
			static::update($name, $value);
		}

		$data = new \Model_Option;
		$data->name = $name;
		$data->value = $value;
		$data->save();

		static::$_data[$data->name] = array(
			'id' => $data->id,
			'value' => $data->value
		);

		return false;
	}

	public static function delete($name = '') {
		if (false === static::is_enabled()) {
			return false;
		}

		if (!isset(static::$_data[$name])) {
			return false;
		}

		$single = \Model_Option::delete(static::$_data[$name]['id']);

		unset(static::$_data[$name]);

		return true;
	}

}
