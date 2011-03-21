<?php

namespace Fuel\Migrations;

class Create_roles {

	public function up()
	{
        \DBUtil::create_table('roles', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'active' => array('constraint' => 1, 'type' => 'tinyint', 'default' => 1),

        ), array('id'));
    }

	public function down()
	{
        \DBUtil::drop_table('roles');
    }
}