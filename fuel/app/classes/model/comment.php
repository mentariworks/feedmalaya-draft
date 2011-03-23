<?php

class Model_Comment extends ActiveRecord\Model { 
	
	protected $belongs_to = array (
		'comments' => array('class_name' => 'Model_Comment'),
		'posts' => array('class_name' => 'Model_Post'),
		'users' => array('class_name' => 'Model_User'),
	);
	
}

/* End of file comment.php */