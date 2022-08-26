<?php 
 
class m_pinjam extends CI_Model{
	function tampil_data_peminjaman(){
        $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
         $this->db->where("status='1'");
        return $this->db->get('peminjaman')->result();
    }

  /*  function tampil_data_caripeminjaman(){
        $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
         $this->db->where("status='1'");
        return $this->db->get('peminjaman')->result();
    }*/
    
    function tampil_data_histori(){
        $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
         $this->db->where("status='2'");
         $this->db->group_by('id_peminjaman','ASC');

        return $this->db->get('peminjaman')->result();
    }

    function tampil_data(){
         $this->db->order_by('judul','ASC'); 
		return $this->db->get('data_buku');
	}
    // judul buku untuk huruf A
    function getjudul(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'A', 'after');
        $this->db->or_like('judul', 'a','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf B
    function getjudulB(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'B', 'after');
        $this->db->or_like('judul', 'b','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf C
    function getjudulC(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'C', 'after');
        $this->db->or_like('judul', 'c','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf D
    function getjudulD(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'D', 'after');
        $this->db->or_like('judul', 'd','after');
        return $this->db->get()->result();
    }
 // judul buku untuk huruf E
    function getjudulE(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'E', 'after');
        $this->db->or_like('judul', 'e','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf F
    function getjudulF(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'F', 'after');
        $this->db->or_like('judul', 'f','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf G
    function getjudulG(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'G', 'after');
        $this->db->or_like('judul', 'g','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf H
    function getjudulH(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'H', 'after');
        $this->db->or_like('judul', 'h','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf I
    function getjudulI(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'I', 'after');
        $this->db->or_like('judul', 'i','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf J
    function getjudulJ(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'J', 'after');
        $this->db->or_like('judul', 'j','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf K
    function getjudulK(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'K', 'after');
        $this->db->or_like('judul', 'k','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf L
    function getjudulL(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'L', 'after');
        $this->db->or_like('judul', 'l','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf M
    function getjudulM(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'M', 'after');
        $this->db->or_like('judul', 'm','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf N
    function getjudulN(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'N', 'after');
        $this->db->or_like('judul', 'n','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf O
    function getjudulO(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'O', 'after');
        $this->db->or_like('judul', 'o','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf P
    function getjudulP(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'P', 'after');
        $this->db->or_like('judul', 'p','after');
        return $this->db->get()->result();
    }

    // judul buku untuk huruf Q
    function getjudulQ(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'Q', 'after');
        $this->db->or_like('judul', 'q','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf R
    function getjudulR(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'R', 'after');
        $this->db->or_like('judul', 'r','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf S
    function getjudulS(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'S', 'after');
        $this->db->or_like('judul', 's','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf T
    function getjudulT(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'T', 'after');
        $this->db->or_like('judul', 't','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf U
    function getjudulU(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'U', 'after');
        $this->db->or_like('judul', 'u','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf V
    function getjudulV(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'V', 'after');
        $this->db->or_like('judul', 'v','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf W
    function getjudulW(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'W', 'after');
        $this->db->or_like('judul', 'w','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf X
    function getjudulX(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'X', 'after');
        $this->db->or_like('judul', 'x','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf Y
    function getjudulY(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'Y', 'after');
        $this->db->or_like('judul', 'y','after');
        return $this->db->get()->result();
    }

     // judul buku untuk huruf Z
    function getjudulZ(){
        $this->db->select('*');
        $this->db->from('data_buku');
        $this->db->like('judul', 'Z', 'after');
        $this->db->or_like('judul', 'z','after');
        return $this->db->get()->result();
    }

	function tampil_data2(){
		return $this->db->get('data_anggota');
    }
    
    function input_data_peminjaman($data,$table){
		$this->db->insert($table,$data);
	}

    function update_status_peminjaman($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
    function buat_kode_peminjaman()   {
        $this->db->select('RIGHT(peminjaman.id_peminjaman,2) as kode', FALSE);
        $this->db->order_by('id_peminjaman','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('peminjaman');      //cek dulu apakah ada sudah ada kode di tabel.    
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
        $kodejadi = "15111".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;  
    }

   public function get_katakunci($katakunci){
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->like('id_peminjaman', $katakunci);
    
       return $this->db->get()->result();
  }
    
}