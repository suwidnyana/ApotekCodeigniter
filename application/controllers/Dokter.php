<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_dokter');
        
          
        if(count($this->session->userdata('user')) < 1) {
		redirect('login');
		}
	}

    public function index(){ 
        
      
         $data = array();

        // If record delete request is submitted
        if($this->input->post('bulk_delete_submit')){
            // Get all selected IDs
            $ids = $this->input->post('checked_id');
            
             // delete
            $delete = $this->Model_dokter->delete($ids);
                
                // If delete is successful
                if($delete){
                    $this->session->set_flashdata('statusMsg', 'Data berhasil dihapus');
                    return redirect('dokter');
                }
        }
        
        // Get user data from the database
        $data['data_dokter'] = $this->Model_dokter->getRows();
        
        // Pass the data to view
        $this->load->view('header');
        $this->load->view('dokter/index', $data);
        $this->load->view('footer');

    }




     public function add()
	{
		$dokter = $this->m_dokter; //objek model
		$validation = $this->form_validation; //objek form validation
		$validation->set_rules($dokter->rules()); //terapkan rules

		if ($validation->run()) //melakukan validasi
		{
            $inputan = $this->input->post(null, TRUE);
            $dokter->add($inputan); //simpan data ke database
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan'); //tampilkan pesan berhasil
            redirect('dokter');
        }
        
        $this->load->view('header');
        $this->load->view('dokter/add'); //tampilan form add
        $this->load->view('footer');

    }

    
    public function edit($id_dokter=  NULL)
    {

        $dokter = $this->Model_dokter; //objek model
		$validation = $this->form_validation; //objek form validation
		$validation->set_rules($dokter->rules()); //terapkan rules
        
        if ($validation->run()) //melakukan validasi
		{
            $inputan = $this->input->post(null, TRUE);
            $dokter->edit($inputan); //simpan data ke database
            $this->session->set_flashdata('success', 'Data Berhasil <strongDiedit'); //tampilkan pesan berhasil
            redirect('dokter');
        }
        
        $id_dokter = ($id_dokter !== null) ? $id_dokter : $this->input->post('id_dokter');
        // $data['dokter'] = $dokter->get($id_dokter)->row();
        $data['dokter'] = $dokter->getById($id_dokter);


        $this->load->view('header');
        $this->load->view('dokter/edit',$data);
        $this->load->view('footer');
    }

  


    

   
}
