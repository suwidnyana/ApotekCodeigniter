<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_login');
        $this->load->library('session');
       

	}

	public function index()
	{
		if($this->session->userdata('user')) {
		redirect('/');
		}

        $this->load->view('login');
    }
    
    public function login()
    {
    	if($this->session->userdata('user')) {
		redirect('/');
		}
       
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$temp_account = $this->Model_login->check_user_account($username, $password)->row();

        // check account
		$num_account = count($temp_account);
			if ($num_account > 0)
			{	
				// kalau ada set session
				$this->session->set_userdata('user', $temp_account);
				redirect('/');
			} else {
				// kalau ga ada diredirect lagi ke halaman login
				$this->session->set_flashdata('notification',"<div class='alert alert-danger'>Username atau Password Salah</div>");
				redirect('login');
			}
	}
		
	public function logout()
	{
		 // destroy session
        $this->session->unset_userdata('user');
        
		// redirect ke halaman login
        redirect(site_url('login'));
	}
}
