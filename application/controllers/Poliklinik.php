<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_poliklinik');
        
        
		// if(count($this->session->userdata('user')) < 1) {
		// redirect('login');
        // }

        if(empty($this->session->userdata('user')) > 0) 
        {
		redirect('login');
        }
        
	}

	 public function index(){ 
        
      
         $data = array();

        if($this->input->post('bulk_delete_submit') == true)
        {
            $ids = $this->input->post('checked');
            $delete = $this->Model_poliklinik->delete($ids);
                
                if($delete)
                {
                    $this->session->set_flashdata('statusMsg', 'Data berhasil dihapus');
                    return redirect('poliklinik');
                }
                else
                {
                    $data['statusMsg'] = 'Some problem occurred, please try again.';
                }
            
        }

       
        
        // Get user data from the database
        $data['poliklinik'] = $this->Model_poliklinik->getRows();
        
        // Pass the data to view
        $this->load->view('header');
        $this->load->view('poliklinik/index', $data);
        $this->load->view('footer');


    }

    public function bulk_edit()
    {
        $ids = $this->input->post('checked[]');
        $data['poliklinik'] = $this->Model_poliklinik->get_bulk($ids);

        $this->load->view('header');
        $this->load->view('poliklinik/edit', $data);
        $this->load->view('footer');
    }

    public function proses_bulk_edit()
    {
        $ids = $this->input->post('id_poli[]');
        $nama = $this->input->post('nama[]');
        $alamat = $this->input->post('alamat[]');

        $data = array_map(function($value, $key) use ($ids, $nama, $alamat) {
            $data[$value] = [
                'nama_poli' => $nama[$key],
                'gedung' => $alamat[$key]
            ];

            return $data;
        }, $ids, array_keys($ids));

        $this->Model_poliklinik->bulk_edit($data);
        return redirect('poliklinik');
    }
   
    
    public function add()
    {
        $this->load->view('header');
        $this->load->view('poliklinik/add');
        $this->load->view('footer');
    }
    


    
     public function proses()
    {
        $data['nama'] = $this->input->post('nama[]');   //parsing data ke fungsi array_keys di model
        $data['alamat'] = $this->input->post('alamat[]');

        $this->Model_poliklinik->add($data);
        return redirect('poliklinik');
    }


    
   
    

   
}
