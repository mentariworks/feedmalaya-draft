<?php

namespace Fuel\Migrations;

class Create_sites {

	public function up()
	{
        \DBUtil::create_table('sites', array(
			'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
			'user_id' => array('constraint' => 30, 'type' => 'bigint'),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'url' => array('constraint' => 200, 'type' => 'varchar'),
			'feed' => array('constraint' => 200, 'type' => 'varchar'),
			'status' => array('constraint' => "'pending','active','inactive','banned'", 'type' => 'enum', 'default' => 'pending'),

        ), array('id'));
    }

	public function down()
	{
        \DBUtil::drop_table('sites');
    }
}