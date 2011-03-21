<?php

namespace Fuel\Migrations;

class Create_users_auths {

    public function up()
    {
		\DBUtil::create_table('users_auths', array(
			'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
			'user_id' => array('constraint' => 30, 'type' => 'bigint'),
			'password' => array('constraint' => 50, 'type' => 'varchar'),

        ), array('id'));
    }

    public function down()
    {
        \DBUtil::drop_table('users_auths');
    }
}