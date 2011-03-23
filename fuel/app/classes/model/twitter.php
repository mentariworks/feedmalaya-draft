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

class Model_Twitter extends ActiveRecord\Model { 
	
	protected $has_one = array (
		'users_twitters' => array ('class_name' => 'Model_Users_Twitter')
	);
	
}

/* End of file twitter.php */