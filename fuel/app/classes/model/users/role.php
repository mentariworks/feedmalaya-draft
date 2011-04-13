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
class Model_Users_Role extends Orm\Model {

	protected static $_properties = array('id', 'user_id', 'role_id');
	protected static $_belongs_to = array(
		'roles' => array('model_to' => 'Model_Role'),
		'users' => array('model_to' => 'Model_User'),
	);

}

/* End of file users/role.php */