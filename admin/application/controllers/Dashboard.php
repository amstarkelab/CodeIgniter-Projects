<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for all logged in users
 */
class Dashboard extends MY_Controller {	

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view("header", $data);
		$this->load->view("navbar");
		$this->load->view("dashboard");
		$this->load->view("footer");
	}

}