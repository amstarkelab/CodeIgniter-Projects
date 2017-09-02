<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	private $table = "user";
	private $_data = array();

	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->where("username", $username);
		$query = $this->db->get($this->table);

		if ($query->num_rows()) 
		{
			// found row by username	
			$row = $query->row_array();

			// now check for the password
			if ($row['password'] == sha1($password)) 
			{
				// we not need password to store in session
				unset($row['password']);
				$this->_data = $row;
				return ERR_NONE;
			}

			// password not match
			return ERR_INVALID_PASSWORD;
		}
		else {
			// not found
			return ERR_INVALID_USERNAME;
		}
	}

	public function get_data()
	{
		return $this->_data;
	}

	public function update_data(){
		echo "I'm here now";
	    $_data = array(
	    	'firstname' => $this->input->post('firstname'),
	    	'lastname' => $this->input->post('lastname'),
	        'username' => $this->input->post('username'),
	        'password' => $this->input->post('password'),
	        'email' => $this->input->post('email')
	    );

	 	$this->db->update($table, $_data, array('id' => $_POST['id']));
	 	$this->session->set_flashdata("Success:", "Profile Updated");
		//redirect('admin');
	 	$this-load->view('admin');
	}

}