<?php

class Model_Users_Role extends ActiveRecord\Model {
	
	protected $belongs_to = array(
		'roles' => array('class_name' => 'Model_Role'),
		'users' => array ('class_name' => 'Model_User'),
	);
	
}

/* End of file users/role.php */