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
class Model_Site extends Orm\Model {

	protected static $_properties = array('id', 'user_id', 'name', 'url', 'feed', 'status');
	protected static $_has_many = array(
		'authors' => array('model_to' => 'Model_Author'),
		'posts' => array('model_to' => 'Model_Post'),
	);

}

/* End of file site.php */