<?php

class Model_Site extends ActiveRecord\Model {
	
	protected $has_many = array (
		'authors' => array('class_name' => 'Model_Author'),
		'posts' => array('class_name' => 'Model_Post'),
	);
	
}

/* End of file site.php */