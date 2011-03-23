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

class Model_Comment extends ActiveRecord\Model { 
	
	protected $belongs_to = array (
		'comments' => array('class_name' => 'Model_Comment'),
		'posts' => array('class_name' => 'Model_Post'),
		'users' => array('class_name' => 'Model_User'),
	);
	
}

/* End of file comment.php */