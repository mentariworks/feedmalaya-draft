<?php

class Model_Role extends ActiveRecord\Model { 
	
	protected $has_many = array(
		'users_roles' => array('class_name' => 'Model_Users_Role'),
	);
	
}

/* End of file role.php */