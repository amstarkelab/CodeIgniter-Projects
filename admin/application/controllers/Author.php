<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for Author group only
 */
class Author extends MY_Controller {	

	protected $access = "Author";

	public function index()
	{
		$data['title'] = 'Author';
		$this->load->view("header", $data);
		$this->load->view("navbar");
		$this->load->view("author");
		$this->load->view("footer");
	}

}