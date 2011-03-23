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

class Create_channels {

	public function up() {
		\DBUtil::create_table('channels', array(
					'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
					'name' => array('constraint' => 100, 'type' => 'varchar'),
					'slug' => array('constraint' => 100, 'type' => 'varchar'),
					'status' => array('constraint' => "'active','unactive'", 'type' => 'enum', 'default' => 'active'),
						), array('id'));
	}

	public function down() {
		\DBUtil::drop_table('channels');
	}

}