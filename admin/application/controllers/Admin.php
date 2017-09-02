<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for Admin group only
 */
class Admin extends MY_Controller {

	protected $access = "Admin";
	
	public function index()
	{
		$data['title'] = 'Admin Panel';
		$this->load->view("header", $data);
		$this->load->view("navbar");
		$this->load->view("admin");
		$this->load->view("footer");
	}

	public function update(){

		$data['title'] = 'Update';
		$this->load->view("header", $data);
		$this->load->view("navbar");
		$this->load->view("update");
		$this->load->view("footer");
	}

}