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
class Model_Role extends Orm\Model {

	protected static $_properties = array('id', 'name', 'active');
	protected static $_has_many = array(
		'users_roles' => array('model_to' => 'Model_Users_Role'),
	);

}

/* End of file role.php */