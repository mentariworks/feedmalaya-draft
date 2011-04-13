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
class Model_User extends Orm\Model {

	protected static $_properties = array('id', 'user_name', 'email', 'status');
	protected static $_has_many = array(
		'comments' => array('model_to' => 'Model_Comment'),
		'users_roles' => array('model_to' => 'Model_Users_Role'),
	);
	protected static $_has_one = array(
		'users_auths' => array('model_to' => 'Model_Users_Auths'),
		'users_meta' => array('model_to' => 'Model_Users_Metum'),
		'users_twitters' => array('model_to' => 'Model_Users_Twitter'),
	);

}

/* End of file user.php */