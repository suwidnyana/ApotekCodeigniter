<?php 

class Model_dokter extends CI_Model 

{
 
	
	public function __construct() {
        $this->tblName = 'tb_dokter'; //menyimpan tabel yng di load ke varabel tblname
	}

	public $id_dokter;
	public $nama_dokter;
	public $spesialis;
	public $alamat;
	public $no_telp;


	public function rules()
	{
		return [
		

			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required'],
			
			['field' => 'spesialis',
			'label' => 'Spesialis',
			'rules' => 'required'],

			['field' => 'alamat',
			'label' => 'Alamat',
			'rules' => 'required'],

			['field' => 'telp',
			'label' => 'Telepon',
			'rules' => 'required'],
			
		];
	}

	

    public function get($id =  null) //mengambil semua data
	{
		$this->db->select('*');
		$this->db->from('tb_dokter');
		if($id != null) {
			$this->db->where('id_dokter', $id);
		}
		$query = $this->db->get();
		return $query;
	}

    public function getById($id_dokter)
	{
		return $this->db->get_where($this->tblName, ["id_dokter" => $id_dokter])->row();
		// ini sama artinya seperti:
		// SELECT * FROM products WHERE product_id=$id
		// method ini akan mengembalikan sebuah objek
	}


	public function getRows($params = array()) //mengambil data perbaris
		
		{
        
        $this->db->select('*');
        $this->db->from($this->tblName);
	
		
        if(array_key_exists("id",$params))
        {
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        } 
        
        else

        {
            //set start and limit
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count')
            {
                $result = $this->db->count_all_results();
            }
            else
            {
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }





	public function add($data) 
	{
			$parameter = array(
				'nama_dokter' => $data['nama'],
				'spesialis' => $data['spesialis'],
				'alamat' => $data['alamat'],
				'no_telp' => $data['telp']
			);
			$this->db->set('id_dokter', 'UUID()', FALSE);
			$this->db->insert($this->tblName,$parameter);
	}

	public function edit($data) 
	{
			$parameter = array(
				'nama_dokter' => $data['nama'],
				'spesialis' => $data['spesialis'],
				'alamat' => $data['alamat'],
				'no_telp' => $data['telp']
			);
			$this->db->set($parameter);
			$this->db->where('id_dokter', $data['id_dokter']);
			$this->db->update($this->tblName);
	}








	// public function del($id)
	// {
    //     $this->db->where('id_dokter', $id);
   	//  	$this->db->delete('tb_dokter');
  	// }

	public function delete($id){
        if(is_array($id)){
            $this->db->where_in('id_dokter', $id);
        }else{
            $this->db->where('id_dokter', $id);
        }
        $delete = $this->db->delete($this->tblName);
        return $delete?true:false;
    }

    }

?>