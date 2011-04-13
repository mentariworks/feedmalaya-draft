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
class Model_Users_Metum extends Orm\Model {

	protected static $_properties = array('id', 'user_id', 'full_name', 'first_name', 'last_name',
		'birthdate');
	protected static $_belongs_to = array(
		'users' => array('model_to' => 'Model_User'),
	);

}

/* End of file users/metum.php */