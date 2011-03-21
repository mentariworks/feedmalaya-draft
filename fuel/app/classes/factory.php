<?php

class Factory {

	public static function _init() {
		\Event::register('load_language', '\\Factory::load_language');
		\Event::register('load_acl', '\\Factory::load_acl');
	}
	
	public static function load_language() {
		\Lang::load('title', 'title');
	}
	
	public static function load_acl() {
		
		
	}

}