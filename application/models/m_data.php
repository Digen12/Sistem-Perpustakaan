<?php 
 
class m_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('data_buku');
	}

	function tampil_data2(){

		return $this->db->get('data_anggota');

	}
	function getdata($limit, $start)	{
		$this->db->order_by('id_anggota', 'DESC');
		$query = $this->db->get('data_anggota', $limit, $start);
        return $query;
	}

	function buat_kode()   {
      $this->db->select('RIGHT(data_anggota.id_anggota,2) as kode', FALSE);
      $this->db->order_by('id_anggota','DESC');    
      $this->db->limit(1);    
      $query = $this->db->get('data_anggota');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){      
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;    
      }
      else {      
       //jika kode belum ada      
       $kode = 1;    
      }
      $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
      $kodejadi = "45111".$kodemax;    // hasilnya ODJ-9921-0001 dst.
      return $kodejadi;  
  }

  function buat_kode_buku()   {
	$this->db->select('RIGHT(data_buku.id,2) as kode', FALSE);
	$this->db->order_by('id','DESC');    
	$this->db->limit(1);    
	$query = $this->db->get('data_buku');      //cek dulu apakah ada sudah ada kode di tabel.    
	if($query->num_rows() <> 0){      
	 //jika kode ternyata sudah ada.      
	 $data = $query->row();      
	 $kode = intval($data->kode) + 1;    
	}
	else {      
	 //jika kode belum ada      
	 $kode = 1;    
	}
	$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
	$kodejadi = "45111".$kodemax;    // hasilnya ODJ-9921-0001 dst.
	return $kodejadi;  
}

	function input_data_anggota($data,$table){
		$this->db->insert($table,$data);
	}

	function input_data_buku($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_buku($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

	function hapus_data_anggota($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}


	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function update_data_buku($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function get_katakunci($katakunci){
		$this->db->select('*');
		$this->db->from('data_anggota');
		$this->db->like('nama', $katakunci);
		$this->db->or_like('alamat', $katakunci);
		$this->db->or_like('no_hp', $katakunci);
		$this->db->or_like('jenis_kelamin', $katakunci);
		$this->db->or_like('tingkat_pendidikan', $katakunci);
		$this->db->or_like('kategori', $katakunci);
		$this->db->or_like('data_created', $katakunci);
		return $this->db->get()->result();
	}

	public function get_katakunci2($katakunci2){
		$this->db->select('*');
		$this->db->from('data_buku');
		$this->db->like('judul', $katakunci2);
		$this->db->or_like('penulis', $katakunci2);
		$this->db->or_like('penerbit', $katakunci2);
		$this->db->or_like('tahun_cetak', $katakunci2);
		$this->db->or_like('kategori', $katakunci2);
		return $this->db->get()->result();
	}

	public function detail_anggota($id_anggota = null){
		$query = $this->db->get_where('data_anggota', array('id_anggota' => $id_anggota))->row();
		return $query;
	}

	public function detail_buku($id = null){
		$query = $this->db->get_where('data_buku', array('id' => $id))->row();
		return $query;
	}


}