<?php

class Controller_Api_Credential extends \Hybrid\Controller_Rest {

	public function post_login() {
		$username = \Input::post('username');
		$password = \Input::post('password');

		$result = \Hybrid\Acl_User::login($username, $password);

		if (false === $result) {
			$this->response(array('text' => 'Invalid username and password combination'), 401);
		} else {
			$this->response(array('text' => 'Login successful, redirecting now...', 'redirect' => \Uri::create('account/me')), 200);
		}
	}

}