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

class Model_User extends ActiveRecord\Model { 
	
	protected $has_many = array (
		'comments' => array('class_name' => 'Model_Comment'),
		'users_roles' => array('class_name' => 'Model_Users_Role'),
	);
	
	protected $has_one = array (
		'users_auths' => array('class_name' => 'Model_Users_Auths'),
		'users_meta' => array('class_name' => 'Model_Users_Metum'),
		'users_twitters' => array('class_name' => 'Model_Users_Twitter'),
	);
	
}

/* End of file user.php */