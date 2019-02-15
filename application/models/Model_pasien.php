<?php 

class Model_pasien extends CI_Model {

	
	private $_table = "tb_pasien";


	public $id_pasien;
	public $nomor_identitas;
	public $nama_pasien;
	public $jenis_kelamin;
	public $alamat;
	public $no_telp;


	public function rules()
	{
		return [
			
			['field' => 'identitas',
			'label' => 'Nomor Identitas',
			'rules' => 'required'],

			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required'],

			['field' => 'alamat',
			'label' => 'Alamat',
			'rules' => 'required'],

			['field' => 'telp',
			'label' => 'Telepon',
			'rules' => 'required'],

			['field' => 'jk',
			'label' => 'Jenis Kelamin',
			'rules' => 'required'],
			
		];
	}

    public function get() 
	{
		return $this->db->get($this->_table)->result();
	}


	public function getById($id_pasien)
	{
		return $this->db->get_where($this->_table, ["id_pasien" => $id_pasien])->row();
		// ini sama artinya seperti:
		// SELECT * FROM products WHERE product_id=$id
		// method ini akan mengembalikan sebuah objek
	}


	public function add() 
	{

		$post = $this->input->post(); // ambil data dari form
		
		$this->id_pasien = uniqid(); // membuat id unik
		$this->nomor_identitas = $post["identitas"]; // isi field name
		$this->nama_pasien = $post["nama"]; // isi field name
		$this->jenis_kelamin = $post["jk"]; // isi field name
		$this->alamat = $post["alamat"]; // isi field name
		$this->no_telp = $post["telp"]; // isi field name

		$this->db->insert($this->_table, $this); // simpan ke database



			// $parameter = array(
				
			// 	'nomor_identitas' => $this->input->post('identitas'),
			// 	'nama_pasien' => $this->input->post('nama'),
			// 	'jenis_kelamin' => $this->input->post('jk'),
			// 	'alamat' => $this->input->post('alamat'),
			// 	'no_telp' => $this->input->post('telp')
			// );
			// $this->db->set('id_pasien', 'UUID()', FALSE);
			// $this->db->insert('tb_pasien',$parameter);
	}



	public function edit() 
	{

		$post = $this->input->post();
		
		$this->id_pasien = $post["id_pasien"]; // membuat id unik

		$this->nomor_identitas = $post["identitas"]; // isi field name
		$this->nama_pasien = $post["nama"]; // isi field name
		$this->jenis_kelamin = $post["jk"]; // isi field name
		$this->alamat = $post["alamat"]; // isi field name
		$this->no_telp = $post["telp"]; // isi field name


		$this->db->update($this->_table, $this, array('id_pasien' => $post['id_pasien']));
	}

	

	




	public function del($id)
	{
		$this->db->where('id_pasien', $id);
		$this->db->delete('tb_pasien');
	}

    }

?>