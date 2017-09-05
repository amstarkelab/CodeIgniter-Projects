<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$languages = array("en", "fr", "de", "it", "es");

		if(in_array($this->uri->segment(1), $languages)){

			$this->load->languages($this->uri->segment(1));
		}
	}
}