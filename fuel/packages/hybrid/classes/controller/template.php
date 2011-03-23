<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */


namespace Hybrid;

/**
 * Hybrid is a set of class that extends the functionality of FuelPHP without 
 * affecting the standard workflow when the application doesn't actually 
 * utilize Hybrid feature.
 */

abstract class Controller_Template extends \Fuel\Core\Controller_Template {
	
	public $template = 'themes/default';
	
	final protected function _acl($resource, $type = null) {
		\Hybrid\Acl::access_status($resource, $type);
		
		switch (\Output::$status) {
			case 401 :
				\Request::show_404();
				break;
		}
	}

	public function before() {
		$this->language = \Hybrid\Factory::get_language();
		$this->user = \Hybrid\Acl_User::get();
		
		$file = \Config::get('app.template');
		if (is_file(APPPATH . 'views/themes/' . $file . '.php')) {
			$this->template = 'themes/' . $file;
		}

		
		parent::before();

		$this->template->content ='hello';

		//TODO: change this to action or method name
			$this->template->title = '';

			$head['title'] = '';
		  $this->template->head =  Factory::view('layout/head', $head);
		
			$this->template->navigation = Factory::view('layout/navigation');

			$header['title'] = 'My Title';
			$this->template->header = Factory::view('layout/header', $header);

			$sidebar['sidebar'] = '';
			$this->template->sidebar = Factory::view('layout/sidebar', $sidebar);
	
			$this->template->facebook_script = Factory::view('layout/facebook_script');

			$this->template->ganalytic_script = Factory::view('layout/ganalytic_script');

			$this->template->content = '';

	}
	
	public function after() {
		//we dont want to accidentally change our site_name
		$this->template->site_name = \Config::get('app.site_name');






		

		parent::after();
	}
	
}
