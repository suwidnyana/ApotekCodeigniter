<?php 

class Model_rm_obat extends CI_Model {
    public function get_obat($id_rekam_medis = null){
		$this->db->select('*');
		$this->db->from('tb_rm_obat');
		$this->db->join('tb_obat', 'tb_rm_obat.id_obat = tb_obat.id_obat');
		$this->db->join('tb_rekammedis','tb_rm_obat.id_rm = tb_rekammedis.id_rm');

		if($id_rekam_medis) {
			$this->db->where('tb_rm_obat.id_rm', $id_rekam_medis);
		}
		
		$query = $this->db->get();
		return $query;
	}

	public function insert($data) {
		$this->db->insert('tb_rm_obat', $data);
	}
}
?>