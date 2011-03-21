<?php

use \Factory;

class Controller_Login extends \Hybrid\Controller_Template {
	
	public function action_index() {
		$title = __('title.login.index');
		
		$this->template->title = \Hybrid\Factory::title($title);
		$this->template->content = \Hybrid\Factory::view('login/index');
	}
}