<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_obat');
       
        // if(count($this->session->userdata('user')) < 1) {
		// redirect('login');
        // }
        
        if(empty($this->session->userdata('user')) > 0) 
        {
		redirect('login');
        }
	}

	public function index()
	{ 
        $data['data_obat'] = $this->Model_obat->get()->result();


        $this->load->view('header');
        $this->load->view('obat/index',$data);
        $this->load->view('footer');
    }

     public function add(){

        $this->load->view('header');
        $this->load->view('obat/add');
        $this->load->view('footer');
    }

    public function edit($id_obat =  NULL){
        
        $data['obat'] = $this->Model_obat->get($id_obat)->row();
     
        $this->load->view('header');
        $this->load->view('obat/edit',$data);
        $this->load->view('footer');
    }


    public function proses()
        {
            if(isset($_POST['add'])) {
                $inputan = $this->input->post(null, TRUE);
                $this->Model_obat->add($inputan);
                
            } else if(isset($_POST['edit'])) {
                $inputan = $this->input->post(null, TRUE);
                $this->Model_obat->edit($inputan);
            }
        redirect('obat/index');
        }


        public function delete($id) 
    {
        $this->Model_obat->del($id);
        redirect('obat');
    
    }

}
