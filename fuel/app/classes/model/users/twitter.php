<?php

class Model_Users_Twitter extends ActiveRecord\Model {
	
	protected $belongs_to = array(
		'twitters' => array('class_name' => 'Model_Twitter'),
		'users' => array ('class_name' => 'Model_User'),
	);
	
}

/* End of file users/twitter.php */