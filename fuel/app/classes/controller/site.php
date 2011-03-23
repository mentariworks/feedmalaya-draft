<?php

class Controller_Site extends \Hybrid\Controller_Frontend {
	
	public function action_index() {
		$this->template->title = 'Something';
		$this->template->content = 'Another thing';
	}
	
	public function action_404() {
		
	}
	
	public function action_maintenance_mode() {
		
	}
}