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
class Model_Author extends Orm\Model {
	
	protected static $_properties = array('id', 'site_id', 'name', 'slug');
	protected static $_belongs_to = array(
		'sites' => array('model_to' => 'Model_Site'),
	);
	protected static $_has_many = array(
		'posts' => array('model_to' => 'Model_Post'),
	);

}

/* End of file author.php */