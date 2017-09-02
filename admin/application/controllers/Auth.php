<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for (all) non logged in users
 */
class Auth extends MY_Controller {

	public function logged_in_check()
	{
		if ($this->session->userdata("logged_in")) {
			redirect("dashboard");
		}
	}

	public function index()
	{	
		$this->logged_in_check();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if ($this->form_validation->run() == true) 
		{
			$this->load->model('auth_model', 'auth');	
			// check the username & password of user
			$status = $this->auth->validate();
			if ($status == ERR_INVALID_USERNAME) {
				$this->session->set_flashdata("error", "Username is invalid");
			}
			elseif ($status == ERR_INVALID_PASSWORD) {
				$this->session->set_flashdata("error", "Password is invalid");
			}
			else
			{
				// success
				// store the user data to session
				$this->session->set_userdata($this->auth->get_data());
				$this->session->set_userdata("logged_in", true);
				// redirect to dashboard
				redirect("dashboard");
			}
		}

		$this->load->view("header");		
		$this->load->view("auth");
		$this->load->view("footer");
	}

	public function update(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'lastname', 'required');
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		$this->form_validation->set_rules('passconf', 'Password Confirmation','  trim|required|matches[password]');
		$this->form_validation->set_rules("email", "Email", "trim|required");

		//debugging purpose
		echo "I'm here now";

		if ($this->form_validation->run() === false){
			//$this->auth_model->update_data();	
			redirect('admin/update');
		}else{

			echo "true";
		}


	/*
		else{
			$this-session->set_flashdata("Error:", "Error Updating Profile");
			redirect('admin/update');
		}

	
			$status = $this->auth->validate();
			if (!$status) {
				$this->session->set_flashdata("Success:", "Profile Updated");
				redirect('admin');
			}
			else{
				$this-session->set_flashdata("Error:", "Error Updating Profile");
				redirect('admin/update');
			}
		}
	*/
	}

	public function logout()
	{
		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();
		redirect("auth");
	}

}