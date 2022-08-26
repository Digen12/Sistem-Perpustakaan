<?php 
 
class m_tamu extends CI_Model{
	function tampil_data_tamu(){
        $this->db->join('data_anggota','data_anggota.id_anggota=buku_tamu.id_anggota');
        //$this->db->join('data_buku','data_buku.id=peminjaman.id');
        return $this->db->get('buku_tamu')->result();
    }
 // function get_data_stok(){
 //        $query = $this->db->query("SELECT COUNT(id_btamu) AS total FROM buku_tamu");
          
 //        if($query->num_rows() > 0){
 //            foreach($query->result() as $data){
 //                $hasil[] = $data;
 //            }
 //            return $hasil;
 //        }
 //    }

    function getdatatamu($limit, $start)  {
    $this->db->order_by('id_btamu', 'DESC');
    $query = $this->db->get('buku_tamu', $limit, $start);
        return $query;
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
        $query = $this->db->query("SELECT id, COUNT(id) AS total FROM peminjaman GROUP BY id ");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function get_data_tamu_bykode($id_anggota){
      $hsl=$this->db->query("SELECT * FROM data_anggota WHERE id_anggota='$id_anggota'");
      if($hsl->num_rows()>0){
        foreach ($hsl->result() as $data) {
          $hasil=array(
            'id_anggota' => $data->id_anggota,
            'nama' => $data->nama,
            
            );
        }
      }
      return $hasil;
    }

    public function save(){
      $id_btamu = $this->input->post('id_btamu');
     $id_anggota = $this->input->post('id_anggota');
     $nama = $this->input->post('nama');
     $tujuan = $this->input->post('tujuan');
     $tanggal_dtg = date('Y-m-d',strtotime($this->input->post('tanggal_dtg')));
     
     // $status = $this->input->post('status');
     
   
     $data = array(
       'id_btamu' => $id_btamu,
       'id_anggota' => $id_anggota,
       'nama' => $nama,
       'tujuan' => $tujuan,
       'tanggal_dtg' => $tanggal_dtg
       // 'tahun_kembali' => $tahun_kembali
       // 'status' => $status
       );
       // var_dump($data); die;
     //$this->m_tamu->input_buku_tamu($data,'buku_tamu');
     $this->db->insert('buku_tamu', $data);
     redirect('Administrator/buku_tamu');
       
   //    $this->db->insert('buku_tamu', $data); // Untuk mengeksekusi perintah insert data
   
   }
    /*function input_buku_tamu($data,$table){
		$this->db->insert($table,$data);
    }*/
    
    function buat_kode_btamu()   {
        $this->db->select('RIGHT(buku_tamu.id_btamu,2) as kode', FALSE);
        $this->db->order_by('id_btamu','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('buku_tamu');      //cek dulu apakah ada sudah ada kode di tabel.    
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
        $kodejadi = "95111".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;  
    }

    
    public function view(){
    	return $this->db->get('buku_tamu')->result();
  }

   public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('id_anggota', 'id_anggota', 'required|numeric|max_length[11]');
     $this->form_validation->set_rules('id_btamu', 'id_btamu', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('nama', 'nama', 'required|max_length[50]');
    $this->form_validation->set_rules('tujuan', 'tujuan', 'required|max_length[50]');
    
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }

  public function get_katakunci($katakunci){
    $this->db->select('*');
    $this->db->from('buku_tamu');
    $this->db->like('id_btamu', $katakunci);
    $this->db->or_like('id_anggota', $katakunci);
    $this->db->or_like('tujuan', $katakunci);
       return $this->db->get()->result();
  }
  }

