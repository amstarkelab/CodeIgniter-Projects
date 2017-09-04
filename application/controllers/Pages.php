<?php
defined('BASEPATH') or exit('No direct access allowed');
class Pages extends MY_Controller{

	public function index() {

		$data['title'] = "Home";
		$this->load->view('templates/head', $data);
		$this->load->view('templates/menu');
		$this->load->view('templates/carousel');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function contact() {

		$data['title'] = "contact";
		$this->load->view('templates/head', $data);
		$this->load->view('templates/menu');
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
	}
	public function about() {

		$data['title'] = "About";
		$this->load->view('templates/head', $data);
		$this->load->view('templates/menu');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}

	public function login() {

		$data['title'] = "| Login";
		$this->load->view('templates/head', $data);
		$this->load->view('templates/menu');
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
	}

}

?>