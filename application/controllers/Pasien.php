<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_pasien');
        $this->load->library('form_validation');

        
        if(empty($this->session->userdata('user')) > 0) 
        {
		redirect('login');
        }
        
	}

	public function index()
	{
        $data['pasien'] = $this->Model_pasien->get();
    
        $this->load->view('header');
        $this->load->view('pasien/index',$data);
        $this->load->view('footer');
    }


   public function add()
	{
		$pasien = $this->Model_pasien; //objek model
		$validation = $this->form_validation; //objek form validation
		$validation->set_rules($pasien->rules()); //terapkan rules

		if ($validation->run()) //melakukan validasi
		{

            $pasien->add(); //simpan data ke database
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan'); //tampilkan pesan berhasil
            redirect('pasien');
		}
        $this->load->view('header');
        $this->load->view('pasien/add'); //tampilan form add
        $this->load->view('footer');

    }
    


    public function edit($id_pasien =  NULL)
    {
        $pasien = $this->Model_pasien; //objek model
		$validation = $this->form_validation; //objek form validation
		$validation->set_rules($pasien->rules()); //terapkan rules
        
        if ($validation->run()) //melakukan validasi
		{
            $pasien->edit(); //simpan data ke database
            $this->session->set_flashdata('success', 'Data Berhasil Diedit'); //tampilkan pesan berhasil
            redirect('pasien');
        }

        $id_pasien = ($id_pasien !== null) ? $id_pasien : $this->input->post('id_pasien');
        $data["pasien"] = $pasien->getById($id_pasien);

        $this->load->view('header');
        $this->load->view('pasien/edit',$data);
        $this->load->view('footer');
    }

     

    
    public function delete($id) 
    {
        $this->Model_pasien->del($id);
        redirect('pasien');
    
    }

   
}
