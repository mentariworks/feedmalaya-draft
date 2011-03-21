<?php

namespace Fuel\Migrations;

class Create_users_roles {

	public function up()
	{
        \DBUtil::create_table('users_roles', array(
			'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
			'user_id' => array('constraint' => 30, 'type' => 'bigint'),
			'role_id' => array('constraint' => 11, 'type' => 'int'),

        ), array('id'));
    }

	public function down()
	{
        \DBUtil::drop_table('users_roles');
    }
}