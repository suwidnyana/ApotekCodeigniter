<?php 

class Model_rekam_medis extends CI_Model {

	public function get(){
			$this->db->select('*');
			$this->db->from('tb_rekammedis');
			
			$this->db->join('tb_pasien', 'tb_rekammedis.id_pasien = tb_pasien.id_pasien');
			$this->db->join('tb_dokter', 'tb_rekammedis.id_dokter = tb_dokter.id_dokter');
			$this->db->join('tb_poliklinik', 'tb_rekammedis.id_poli = tb_poliklinik.id_poli');

			return $this->db->get();
			
	}

	public function tgl_indo($tgl) { 
	$tanggal = substr($tgl, 8, 2);
	$bulan = substr($tgl, 5, 2);
	$tahun = substr($tgl, 0 ,4);
	return $tanggal."/".$bulan."/".$tahun;
	
}

	

	public function add($data)
	{
		$data['id_rm'] = uniqid();
			
		$this->db->insert('tb_rekammedis',$data);
			
		return $data['id_rm'];
	}

	public function del($id)
	{
		$this->db->where('id_rm', $id);
		$this->db->delete('tb_rekammedis');
	}

    }

?>