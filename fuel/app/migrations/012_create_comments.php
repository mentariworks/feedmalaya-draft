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

class Create_comments {

	public function up() {
		\DBUtil::create_table('comments', array(
					'id' => array('constraint' => 30, 'type' => 'int', 'auto_increment' => true),
					'parent_comment_id' => array('constraint' => 30, 'type' => 'bigint', 'default' => 0),
					'post_id' => array('constraint' => 30, 'type' => 'bigint'),
					'user_id' => array('constraint' => 30, 'type' => 'bigint'),
					'content' => array('type' => 'text'),
					'publish_on' => array('type' => 'datetime'),
					'status' => array('constraint' => "'draft','publish','delete'", 'type' => 'enum', 'default' => 'draft'),
						), array('id'));
	}

	public function down() {
		\DBUtil::drop_table('comments');
	}

}