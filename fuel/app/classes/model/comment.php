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
class Model_Comment extends Orm\Model { 
	
	protected static $_properties = array('id', 'parent_comment_id', 'post_id', 'user_id',
		'content', 'publish_on', 'status');
	protected static $_belongs_to = array (
		//'comments' => array('model_to' => 'Model_Comment'),
		'posts' => array('model_to' => 'Model_Post'),
		'users' => array('model_to' => 'Model_User'),
	);
	
}

/* End of file comment.php */