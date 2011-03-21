<?php

namespace Fuel\Migrations;

class Create_tags {

	public function up()
	{
        \DBUtil::create_table('tags', array(
			'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'slug' => array('constraint' => 100, 'type' => 'varchar'),

        ), array('id'));
    }

	public function down()
	{
        \DBUtil::drop_table('tags');
    }
}