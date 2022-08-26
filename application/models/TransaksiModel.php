<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiModel extends CI_Model {

	function tampil_data2(){
		return $this->db->get('data_anggota');
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

	public function view_by_month($month, $year){
        $this->db->where('MONTH(data_created)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(data_created)', $year); // Tambahkan where tahun
        
		return $this->db->get('data_anggota')->result(); // Tampilkan data data_anggota sesuai bulan dan tahun yang diinput oleh user pada filter
	}
    
	public function view_by_year($year){
        $this->db->where('YEAR(data_created)', $year); // Tambahkan where tahun
        
		return $this->db->get('data_anggota')->result(); // Tampilkan data data_anggota sesuai tahun yang diinput oleh user pada filter
	}
    
	public function view_all(){
		return $this->db->get('data_anggota')->result(); // Tampilkan semua data data_anggota
	}

  public function option_tahun(){
        $this->db->select('YEAR(data_created) AS tahun'); // Ambil Tahun dari field tanggal_dtg
        $this->db->from('data_anggota'); // select ke tabel data_anggota
        $this->db->order_by('YEAR(data_created)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(data_created)'); // Group berdasarkan tahun pada field data_created
        
        return $this->db->get()->result(); // Ambil data pada tabel data_anggota sesuai kondisi diatas
  }


  public function view_by_monthP($month, $year){
        $this->db->where('MONTH(tanggal_dtg)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal_dtg)', $year); // Tambahkan where tahun
        
    return $this->db->get('buku_tamu')->result(); // Tampilkan data buku_tamu sesuai bulan dan tahun yang diinput oleh user pada filter
  }
    
  public function view_by_yearP($year){
        $this->db->where('YEAR(tanggal_dtg)', $year); // Tambahkan where tahun
        
    return $this->db->get('buku_tamu')->result(); // Tampilkan data buku_tamu sesuai tahun yang diinput oleh user pada filter
  }
    
  public function view_allP(){
    return $this->db->get('buku_tamu')->result(); // Tampilkan semua data buku_tamu
  }

      
    public function option_tahunP(){
        $this->db->select('YEAR(tanggal_dtg) AS tahun'); // Ambil Tahun dari field tanggal_dtg
        $this->db->from('buku_tamu'); // select ke tabel data_anggota
        $this->db->order_by('YEAR(tanggal_dtg)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal_dtg)'); // Group berdasarkan tahun pada field data_created
        
        return $this->db->get()->result(); // Ambil data pada tabel data_anggota sesuai kondisi diatas
	}

  public function view_by_monthPinjam($month, $year){
    $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
        $this->db->where('MONTH(tgl_pengembalian)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tgl_pengembalian)', $year); // Tambahkan where tahun
        
    return $this->db->get('peminjaman')->result(); // Tampilkan data peminjaman sesuai bulan dan tahun yang diinput oleh user pada filter
  }
    
  public function view_by_yearPinjam($year){
    $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
        $this->db->where('YEAR(tgl_pengembalian)', $year); // Tambahkan where tahun
        
    return $this->db->get('peminjaman')->result(); // Tampilkan data peminjaman sesuai tahun yang diinput oleh user pada filter
  }
    
  public function view_allPinjam(){
    $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
    return $this->db->get('peminjaman')->result(); // Tampilkan semua data buku_tamu
  }

      
    public function option_tahunPinjam(){
        $this->db->select('YEAR(tgl_pengembalian) AS tahun'); // Ambil Tahun dari field tgl_pengembalian
        $this->db->from('peminjaman'); // select ke tabel data_anggota
        $this->db->order_by('YEAR(tgl_pengembalian)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tgl_pengembalian)'); // Group berdasarkan tahun pada field data_created
        
        return $this->db->get()->result(); // Ambil data pada tabel data_anggota sesuai kondisi diatas
  }

  function tampil_data_histori(){
        $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
         $this->db->where("status='2'");
         //$this->db->group_by('id_peminjaman','ASC');

        return $this->db->get('peminjaman')->result();
    }

	function buat_kode_laporan()   {
      $this->db->select('RIGHT(laporan.id_laporan,2) as kode', FALSE);
      $this->db->order_by('id_laporan','DESC');    
      $this->db->limit(1);    
      $query = $this->db->get('laporan');      //cek dulu apakah ada sudah ada kode di tabel.    
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
      $kodejadi2 = "45101".$kodemax;    // hasilnya ODJ-9921-0001 dst.
      return $kodejadi2;  
  }

  function buat_kode_laporan_pengunjung()   {
      $this->db->select('RIGHT(laporan_pengunjung.id_laporan_pengunjung,2) as kode', FALSE);
      $this->db->order_by('id_laporan_pengunjung','DESC');    
      $this->db->limit(1);    
      $query = $this->db->get('laporan_pengunjung');      //cek dulu apakah ada sudah ada kode di tabel.    
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
      $kodejadi = "45201".$kodemax;    // hasilnya ODJ-9921-0001 dst.
      return $kodejadi;  
  }

  function buat_kode_laporan_peminjaman()   {
      $this->db->select('RIGHT(laporan_peminjaman.id_laporan_peminjaman,2) as kode', FALSE);
      $this->db->order_by('id_laporan_peminjaman','DESC');    
      $this->db->limit(1);    
      $query = $this->db->get('laporan_peminjaman');      //cek dulu apakah ada sudah ada kode di tabel.    
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
      $kodejadi = "45401".$kodemax;    // hasilnya ODJ-9921-0001 dst.
      return $kodejadi;  
  }
	
	public function insert($data){
		return $this->db->insert('laporan', $data);
			}

			public function insert_pengunjung($data){
		return $this->db->insert('laporan_pengunjung', $data);
			}

      public function insert_peminjaman($data){
    return $this->db->insert('laporan_peminjaman', $data);
      }
}
