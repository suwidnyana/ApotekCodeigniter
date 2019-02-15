<?php 

class Model_login extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	
	function check_user_account($username, $password){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username', $username);
		$this->db->where('password', sha1($password));

		return $this->db->get();
	}


	function get_user($id_user){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id_user', $id_user);
		return $this->db->get();
	}


}

?>