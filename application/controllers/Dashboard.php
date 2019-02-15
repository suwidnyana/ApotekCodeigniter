<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');

		// if(count($this->session->userdata('user')) < 1) 
		// {
		// redirect('login');
		// }

	}

	public function index()
	{
        $this->load->view('header');
        $this->load->view('dashboard');
		$this->load->view('footer');
	}
}
