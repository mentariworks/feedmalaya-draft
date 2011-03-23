<?php

class Model_Users_Auth extends ActiveRecord\Model { 
	
	protected $belongs_to = array(
		'users' => array ('class_name' => 'Model_User'),
	);
	
}

/* End of file users/auth.php */