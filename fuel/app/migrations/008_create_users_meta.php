<?php

namespace Fuel\Migrations;

class Create_users_meta {

	public function up()
	{
        \DBUtil::create_table('users_meta', array(
			'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
			'user_id' => array('constraint' => 30, 'type' => 'bigint'),
			'full_name' => array('constraint' => 100, 'type' => 'varchar'),
			'first_name' => array('constraint' => 50, 'type' => 'varchar'),
			'last_name' => array('constraint' => 50, 'type' => 'varchar'),
			'birthdate' => array('type' => 'datetime'),

        ), array('id'));
    }

	public function down()
	{
        \DBUtil::drop_table('users_meta');
    }
}