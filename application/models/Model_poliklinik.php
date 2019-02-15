<?php 

class Model_poliklinik extends CI_Model 
{

    public function __construct() {
        $this->tblName = 'tb_poliklinik';
    }
    

    public function get_bulk($ids)
    {
        $poliklinik = array_map(function($id) {
            return $this->db->get_where($this->tblName, ['id_poli' => $id])->row();
        }, $ids);

        return $poliklinik;
    }

    public function bulk_edit($data)
    {
        foreach($data as $poliklinik) {
            foreach($poliklinik as $key => $value) {
                $this->db->where('id_poli', $key);
                $this->db->update($this->tblName, $value);
            }
        }
    }

    public function get($id =  null) 
	{
		$this->db->select('*');
		$this->db->from('tb_poliklinik');
		if($id != null) {
			$this->db->where('id_poli', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function getRows($params = array()){
        
        $this->db->select('*');
        $this->db->from($this->tblName);
        
        //fetch data by conditions
       
        
       
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }
        
        else
        
        {
            //set start and limit 
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
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
        $insert = array_map(function($nama, $gedung) use ($data) 
        {                   //Array map mengirim setiap nilai array kedalam fungsi 
                        //buatan pengguna (programmer), 
                        //kemudian mengembalikan array dengan nilai yang baru pada fungsi 
                        //yang dibuat oleh pengguna
            return [
                'nama_poli' => $nama,
                'gedung' => $data['alamat'][$gedung]

                
            ];
        }, 
        
        $data['nama'], array_keys($data['nama']));  //The array_keys() function 
                                                    //returns an array containing the keys.
        foreach($insert as $poliklinik) 
        {
            $this->db->set('id_poli', 'UUID()', false);
            $this->db->insert('tb_poliklinik', $poliklinik);
        }  
               
    }
    
   
    public function delete($id){
        if(is_array($id)){
            $this->db->where_in('id_poli', $id);
        }else{
            $this->db->where('id_poli', $id);
        }
        $delete = $this->db->delete($this->tblName);
        return $delete?true:false;
    }
    
    }

?>