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

class Create_authors {

	public function up() {
		\DBUtil::create_table('authors', array(
					'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
					'site_id' => array('constraint' => 30, 'type' => 'bigint'),
					'name' => array('constraint' => 100, 'type' => 'varchar'),
					'slug' => array('constraint' => 100, 'type' => 'varchar'),
						), array('id'));
	}

	public function down() {
		\DBUtil::drop_table('authors');
	}

}