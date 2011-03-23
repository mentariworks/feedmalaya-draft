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

class Model_Post extends ActiveRecord\Model { 
	
	protected $belongs_to = array (
		'authors' => array('class_name' => 'Model_Author'),
		'sites' => array('class_name' => 'Model_Site'),
	);
	
	protected $has_many = array(
		'comments' => array('class_name' => 'Model_Comment'),
	);
}

/* End of file post.php */