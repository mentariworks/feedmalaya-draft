<?php

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