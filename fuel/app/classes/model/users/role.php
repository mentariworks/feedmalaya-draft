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

class Model_Users_Role extends ActiveRecord\Model {
	
	protected $belongs_to = array(
		'roles' => array('class_name' => 'Model_Role'),
		'users' => array ('class_name' => 'Model_User'),
	);
	
}

/* End of file users/role.php */