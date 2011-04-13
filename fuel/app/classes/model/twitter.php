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
class Model_Twitter extends Orm\Model {

	protected static $_properties = array('id', 'user_name', 'full_name', 'profile_image');
	protected static $_has_one = array(
		'users_twitters' => array('model_to' => 'Model_Users_Twitter'),
	);

}

/* End of file twitter.php */