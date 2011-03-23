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
 * App\Factory Class
 * 
 * @package FeedMalaya
 * @subpackage App
 * @category Factory
 * @author Mior Muhammad Zaki <crynobone@gmail.com>
 * @since 2.0
 */
class Factory {
	
	/**
	 * When autoloaded this will method will be fired, load once and once only
	 * 
	 * @static
	 * @access public
	 */
	public static function _init() {
		\Event::register('load_language', '\\Factory::load_language');
		\Event::register('load_acl', '\\Factory::load_acl');
	}
	
	public static function load_language() {
		\Lang::load('title', 'title');
	}
	
	public static function load_acl() {
		
		
	}

}