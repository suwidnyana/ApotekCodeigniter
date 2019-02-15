<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_medis extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
		$this->load->model(['Model_rekam_medis','Model_obat','Model_rm_obat',
		'Model_pasien','Model_poliklinik','Model_dokter']);
        

		if(count($this->session->userdata('user')) < 1) {
		redirect('login');
		}
	}

	public function index($data = NULL)
	{	
		$data['rekammedis'] = array_map(function($obat) {
			return [
				'id_rm' => $obat->id_rm,
				'id_pasien' => $obat->id_pasien,
				'keluhan' => $obat->keluhan,
				'id_dokter' => $obat->id_dokter,
				'diagnosa' => $obat->diagnosa,
				'id_poli' => $obat->id_poli,
				'tgl_periksa' => $this->Model_rekam_medis->tgl_indo($obat->tgl_periksa),
				'nama_pasien' => $obat->nama_pasien,
				'nama_dokter' => $obat->nama_dokter,
				'nama_poli' => $obat->nama_poli,
				'obat' => $this->Model_rm_obat->get_obat($obat->id_rm)->result()
			];
		}, 
		$this->Model_rekam_medis->get()->result());

		$this->load->view('header');
        $this->load->view('rekam_medis/index',$data);
        $this->load->view('footer');
	}
	
	public function add()
	{
		// $data['rekammedis'] = $this->m_rekam_medis->get()->result();
		$data['pasien'] = $this->Model_pasien->get();
		$data['obat'] = $this->Model_obat->get()->result();
		$data['dokter'] = $this->Model_dokter->get()->result();
		$data['poli'] = $this->Model_poliklinik->get()->result();
		
		$this->load->view('header');
		$this->load->view('rekam_medis/add',$data);
		$this->load->view('footer');
	}


	 public function proses()
        {
            if(isset($_POST['add'])) {
				$inputan = $this->input->post(['id_pasien','keluhan','id_dokter','diagnosa','id_poli','tgl_periksa'], TRUE);
				$id = $this->Model_rekam_medis->add($inputan);
				
				foreach($this->input->post('obat') as $obat) {
					$this->Model_rm_obat->insert([
						'id_rm' => $id,
						'id_obat' => $obat
					]);
				}
                
            } 
        redirect('rekam_medis/index');
        }

     public function del($id)
     {
     	 $this->Model_rekam_medis->del($id);
        redirect('rekam_medis');
     }
}
