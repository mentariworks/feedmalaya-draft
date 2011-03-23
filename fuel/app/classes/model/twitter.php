<?php

class Model_Twitter extends ActiveRecord\Model { 
	
	protected $has_one = array (
		'users_twitters' => array ('class_name' => 'Model_Users_Twitter')
	);
	
}

/* End of file twitter.php */