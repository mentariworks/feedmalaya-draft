<?php

namespace Fuel\Migrations;

class Create_authors {

	public function up()
	{
        \DBUtil::create_table('authors', array(
			'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
			'site_id' => array('constraint' => 30, 'type' => 'bigint'),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'slug' => array('constraint' => 100, 'type' => 'varchar'),

        ), array('id'));
    }

	public function down()
	{
        \DBUtil::drop_table('authors');
    }
}