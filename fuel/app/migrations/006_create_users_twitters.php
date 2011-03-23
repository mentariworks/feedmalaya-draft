<?php

/**
 * FeedMalaya
 * 
 * FeedMalaya is a social feed aggregator using FuelPHP, SimplePie and MySQL database.
 *
 * @package    FeedMalaya
 * @version    2.0
 * @author     FeedMalaya Development Team
 * @license    GPLv2 License (or later)
 * @link       http://github.com/mentariworks/feedmalaya
 */

namespace Fuel\Migrations;

class Create_users_twitters {

	public function up() {
		\DBUtil::create_table('users_twitters', array(
					'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
					'user_id' => array('constraint' => 30, 'type' => 'bigint'),
					'twitter_id' => array('constraint' => 30, 'type' => 'bigint'),
					'token_key' => array('constraint' => 50, 'type' => 'varchar'),
					'secret_key' => array('constraint' => 50, 'type' => 'varchar'),
						), array('id'));
	}

	public function down() {
		\DBUtil::drop_table('users_twitters');
	}

}