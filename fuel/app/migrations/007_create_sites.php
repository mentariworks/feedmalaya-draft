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

class Create_sites {

	public function up() {
		\DBUtil::create_table('sites', array(
					'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
					'user_id' => array('constraint' => 30, 'type' => 'bigint'),
					'name' => array('constraint' => 100, 'type' => 'varchar'),
					'url' => array('constraint' => 200, 'type' => 'varchar'),
					'feed' => array('constraint' => 200, 'type' => 'varchar'),
					'status' => array('constraint' => "'pending','active','inactive','banned'", 'type' => 'enum', 'default' => 'pending'),
						), array('id'));
	}

	public function down() {
		\DBUtil::drop_table('sites');
	}

}