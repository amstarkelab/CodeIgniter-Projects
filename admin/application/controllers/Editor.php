<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for Editor group only
 */
class Editor extends MY_Controller {

	protected $access = array("Admin", "Editor");

	public function index()
	{
		$data['title'] = 'Editor';
		$this->load->view("header", $data);
		$this->load->view("navbar");
		$this->load->view("editor");
		$this->load->view("footer");
	}
}