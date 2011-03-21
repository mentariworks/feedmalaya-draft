<?php

namespace Fuel\Migrations;

class Create_channels {

	public function up()
	{
        \DBUtil::create_table('channels', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'slug' => array('constraint' => 100, 'type' => 'varchar'),
			'status' => array('constraint' => "'active','unactive'", 'type' => 'enum', 'default' => 'active'),

        ), array('id'));
    }

	public function down()
	{
        \DBUtil::drop_table('channels');
    }
}