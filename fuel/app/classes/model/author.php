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

class Model_Author extends ActiveRecord\Model {

	protected $belongs_to = array(
		'sites' => array('class_name' => 'Model_Site'),
	);
	
	protected $has_many = array(
		'posts' => array('class_name' => 'Model_Post'),
	);

}

/* End of file author.php */