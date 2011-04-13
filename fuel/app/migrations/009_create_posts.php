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

class Create_posts {

	public function up() {
		\DBUtil::create_table('posts', array(
					'id' => array('constraint' => 30, 'type' => 'bigint', 'auto_increment' => true),
					'site_id' => array('constraint' => 30, 'type' => 'bigint'),
					'author_id' => array('constraint' => 30, 'type' => 'bigint'),
					'title' => array('constraint' => 255, 'type' => 'varchar'),
					'slug' => array('constraint' => 255, 'type' => 'varchar'),
					'excerpt' => array('constraint' => 300, 'type' => 'varchar'),
					'content' => array('type' => 'text'),
					'publish_on' => array('type' => 'datetime'),
					'fetch_on' => array('type' => 'datetime'),
					'status' => array('constraint' => "'draft','publish','delete'", 'type' => 'enum', 'default' => 'publish'),
						), array('id'));
	}

	public function down() {
		\DBUtil::drop_table('posts');
	}

}