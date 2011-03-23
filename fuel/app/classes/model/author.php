<?php

class Model_Author extends ActiveRecord\Model {

	protected $belongs_to = array(
		'sites' => array('class_name' => 'Model_Site'),
	);
	
	protected $has_many = array(
		'posts' => array('class_name' => 'Model_Post'),
	);

}

/* End of file author.php */