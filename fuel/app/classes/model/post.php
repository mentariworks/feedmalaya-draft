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
class Model_Post extends Orm\Model {

	protected static $_properties = array('id', 'site_id', 'author_id', 'title', 'slug',
		'excerpt', 'content', 'publish_on', 'fetch_on', 'status');
	protected static $_belongs_to = array(
		'authors' => array('model_to' => 'Model_Author'),
		'sites' => array('model_to' => 'Model_Site'),
	);
	protected static $_has_many = array(
		'comments' => array('model_to' => 'Model_Comment'),
	);

}

/* End of file post.php */