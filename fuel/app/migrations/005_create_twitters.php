<?php

namespace Fuel\Migrations;

class Create_twitters {

	public function up()
	{
        \DBUtil::create_table('twitters', array(
			'id' => array('constraint' => 30, 'type' => 'bigint'),
			'user_name' => array('constraint' => 100, 'type' => 'varchar'),
			'full_name' => array('constraint' => 100, 'type' => 'varchar'),
			'profile_image' => array('constraint' => 150, 'type' => 'varchar'),

        ), array('id'));
    }

	public function down()
	{
        \DBUtil::drop_table('twitters');
    }
}