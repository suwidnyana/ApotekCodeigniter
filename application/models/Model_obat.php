<?php 

class Model_obat extends CI_Model {

    public function get($id =  null) 
	{
		$this->db->select('*');
		$this->db->from('tb_obat');
		if($id != null) {
			$this->db->where('id_obat', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data) 
	{
			$parameter = array(
				'nama_obat' => $data['nama'],
				'ket_obat' => $data['ket']

			);
			$this->db->set('id_obat', 'UUID()', FALSE);
			$this->db->insert('tb_obat',$parameter);
	}


		public function edit($data) 
	{
			$parameter = array(
				'nama_obat' => $data['nama'],
				'ket_obat' => $data['ket']
			);
			$this->db->set($parameter);
			$this->db->where('id_obat', $data['id_obat']);
			$this->db->update('tb_obat');
			
	}

	public function del($id)
	{
		$this->db->where('id_obat', $id);
		$this->db->delete('tb_obat');
	}


    }

?>