<?php 
 
class m_laporan extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function tampil_data(){
		return $this->db->get('laporan');
	}

	public function getAllFiles(){
		$query = $this->db->get('laporan');
		return $query->result(); 
	}

	public function download($id_laporan){
		$query = $this->db->get_where('laporan',array('id_laporan'=>$id_laporan));
		return $query->row_array();
	}
	 function get_data_anggota(){
        $query = $this->db->query("SELECT tanggal_dtg, COUNT(id_anggota) AS total FROM buku_tamu  GROUP BY tanggal_dtg ");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

        function get_data_buku(){
        $query = $this->db->query("SELECT b.judul, COUNT(o.id) AS total FROM peminjaman o INNER JOIN data_buku b ON o.id=b.id GROUP BY b.id");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

	}