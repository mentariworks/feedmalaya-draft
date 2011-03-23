<?php

class Model_Users_Metum extends ActiveRecord\Model { 
	
	protected $belongs_to = array(
		'users' => array ('class_name' => 'Model_User'),
	);
	
}

/* End of file users/metum.php */