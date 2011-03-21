<?php

namespace Fuel\Migrations;

class Create_users {

    public function up()
    {
        \DBUtil::create_table('users', array(
			'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
			'user_name' => array('constraint' => 50, 'type' => 'varchar'),
			'email' => array('constraint' => 100, 'type' => 'varchar'),
			'status' => array('constraint' => "'unverified','verified','banned'", 'type' => 'enum', 'default' => 'unverified'),

        ), array('id'));
    }

    public function down()
    {
        \DBUtil::drop_table('users');
    }
}