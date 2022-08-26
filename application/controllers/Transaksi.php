<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('m_pinjam');
                $this->load->helper('url');
	}

	public function index(){
		$data['title'] = 'Peminjaman buku';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['peminjaman'] = $this->m_pinjam->tampil_data_peminjaman();
		$data['kodeunik3'] = $this->m_pinjam->buat_kode_peminjaman();
		$data['anggota'] = $this->m_pinjam->tampil_data2()->result();
		$data['buku'] = $this->m_pinjam->getjudul();
		$data['bukuB'] = $this->m_pinjam->getjudulB();
		$data['bukuC'] = $this->m_pinjam->getjudulC();
		$data['bukuD'] = $this->m_pinjam->getjudulD();
		$data['bukuE'] = $this->m_pinjam->getjudulE();
		$data['bukuF'] = $this->m_pinjam->getjudulF();
		$data['bukuG'] = $this->m_pinjam->getjudulG();
		$data['bukuH'] = $this->m_pinjam->getjudulH();
		$data['bukuI'] = $this->m_pinjam->getjudulI();
		$data['bukuJ'] = $this->m_pinjam->getjudulJ();
		$data['bukuK'] = $this->m_pinjam->getjudulK();
		$data['bukuL'] = $this->m_pinjam->getjudulL();
		$data['bukuM'] = $this->m_pinjam->getjudulM();
		$data['bukuN'] = $this->m_pinjam->getjudulN();
		$data['bukuO'] = $this->m_pinjam->getjudulO();
		$data['bukuP'] = $this->m_pinjam->getjudulP();
		$data['bukuQ'] = $this->m_pinjam->getjudulQ();
		$data['bukuR'] = $this->m_pinjam->getjudulR();
		$data['bukuS'] = $this->m_pinjam->getjudulS();
		$data['bukuT'] = $this->m_pinjam->getjudulT();
		$data['bukuU'] = $this->m_pinjam->getjudulU();
		$data['bukuV'] = $this->m_pinjam->getjudulV();
		$data['bukuW'] = $this->m_pinjam->getjudulW();
		$data['bukuX'] = $this->m_pinjam->getjudulX();
		$data['bukuY'] = $this->m_pinjam->getjudulY();
		$data['bukuZ'] = $this->m_pinjam->getjudulZ();
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('transaksi/index', $data);
		$this->load->view('templates/footer');
	}

	public function history(){
		$data['title'] = 'History Peminjaman';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['peminjaman'] = $this->m_pinjam->tampil_data_histori();
//  var_dump($data); die;
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('transaksi/histori', $data);
		$this->load->view('templates/footer');
	}
public function update_status_peminjaman($nopinjam,$id){

	$data=array(
		'status'=>$id,
		'tgl_pengembalian'=> date('Y-m-d')
	);
	$where = array(
		'nopinjam'=>$nopinjam
	);
	
	$this->m_pinjam->update_status_peminjaman($where,$data,'peminjaman');

	redirect('Transaksi/pengembalian');
}
	public function pengembalian(){
		$data['title'] = 'Pengembalian buku';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['peminjaman'] = $this->m_pinjam->tampil_data_peminjaman();
	
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('transaksi/pengembalian', $data);
		$this->load->view('templates/footer');
	}
	
	function tambah_peminjaman(){
		// $hasil=$this->db->group_by('id_peminjaman')->get('peminjaman')->num_rows();
  //       $hasil++;
         for ($i=0;$i<count($_POST['id']) ; $i++) { 
		$id_peminjaman = $this->input->post('id_peminjaman');
		$id_anggota = $this->input->post('id_anggota');
		$id = $this->input->post('id');
		$qty = $this->input->post('qty');
		$tanggal_pinjam = date('Y-m-d',strtotime($this->input->post('tanggal_pinjam')));
		 $cenvertedTime = date('Y-m-d',strtotime('+7 days',strtotime($tanggal_pinjam)));
		// $tanggal_kembali = $this->input->post('tanggal_kembali');
		$status = $this->input->post('status');
		
 
		$data = array(
		
			'id_peminjaman' => $id_peminjaman,
			'id_anggota' => $id_anggota,
			'id' =>  $_POST['id'][$i],
			'qty' => $qty,
			'tanggal_pinjam' => $tanggal_pinjam,
			'tanggal_kembali' => $cenvertedTime,
			'status' => $status
			);

		$this->m_pinjam->input_data_peminjaman($data,'peminjaman');
		 }
		redirect('transaksi');
	}

	function get_histori()
  {

   $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
      $hasil=$this->db->where('nopinjam',$_POST['nopinjam'])->get('peminjaman')->result();
    $data['peminjaman'] = '<ul>';
    foreach ($hasil as $row) {
      $data['peminjaman'] .= '<li> Id peminjaman          : '.$row->id_peminjaman.'</li>';
      $data['peminjaman'] .= '<li> Nama :'.$row->nama.'</li>';
      $data['peminjaman'] .= '<li> Alamat           :'.$row->alamat.'</li>';
       $data['peminjaman'] .= '<li> Judul           :'.$row->judul.'</li>';
        $data['peminjaman'] .= '<li> Penerbit           :'.$row->penerbit.'</li>';
         $data['peminjaman'] .= '<li> Kategori           :'.$row->kategori.'</li>';
          $data['peminjaman'] .= '<li> Tanggal Pinjam      :'.$row->tanggal_pinjam.'</li>';
           $data['peminjaman'] .= '<li> Tanggal Kembali    :'.$row->tanggal_kembali.'</li>';
            $data['peminjaman'] .= '<li> Tanggal Pengembalian  :'.$row->tgl_pengembalian.'</li><br>';
     
    }

    $data['peminjaman'] .= '</ul>';
    echo json_encode($data);

  }
function get_pinjam()
  {

   $this->db->join('data_anggota','data_anggota.id_anggota=peminjaman.id_anggota');
        $this->db->join('data_buku','data_buku.id=peminjaman.id');
      $hasil=$this->db->where('id_peminjaman',$_POST['id_peminjaman'])->get('peminjaman')->result();
    $data['peminjaman'] = '<ul>';
    foreach ($hasil as $row) {
    	 if ($row->tgl_pengembalian!='0000-00-00') {
      $data['peminjaman'] .= '<li> Id peminjaman          : '.$row->id_peminjaman.'</li>';
      $data['peminjaman'] .= '<li> Nama :'.$row->nama.'</li>';
      $data['peminjaman'] .= '<li> Alamat           :'.$row->alamat.'</li>';
       $data['peminjaman'] .= '<li> Judul           :'.$row->judul.'</li>';
        $data['peminjaman'] .= '<li> Penerbit           :'.$row->penerbit.'</li>';
         $data['peminjaman'] .= '<li> Kategori           :'.$row->kategori.'</li>';
          $data['peminjaman'] .= '<li> Tanggal Pinjam      :'.$row->tanggal_pinjam.'</li>';
           $data['peminjaman'] .= '<li> Tanggal Kembali    :'.$row->tanggal_kembali.'</li>';
            $data['peminjaman'] .= '<li> Tanggal Pengembalian  :'.$row->tgl_pengembalian.'</li><br>';
        }
     elseif ($row->tgl_pengembalian=='0000-00-00') {
     	 $data['peminjaman'] .= '<li> Id peminjaman          : '.$row->id_peminjaman.'</li>';
      $data['peminjaman'] .= '<li> Nama :'.$row->nama.'</li>';
      $data['peminjaman'] .= '<li> Alamat           :'.$row->alamat.'</li>';
       $data['peminjaman'] .= '<li> Judul           :'.$row->judul.'</li>';
        $data['peminjaman'] .= '<li> Penerbit           :'.$row->penerbit.'</li>';
         $data['peminjaman'] .= '<li> Kategori           :'.$row->kategori.'</li>';
          $data['peminjaman'] .= '<li> Tanggal Pinjam      :'.$row->tanggal_pinjam.'</li>';
           $data['peminjaman'] .= '<li> Tanggal Kembali    :'.$row->tanggal_kembali.'</li>';
            $data['peminjaman'] .= '<li> Tanggal Pengembalian  : <button class="btn btn-danger" disable>Belum dikembalikan</button></li><br>';
     }
    }

    $data['peminjaman'] .= '</ul>';
    echo json_encode($data);

  }

  public function cari(){
		$katakunci = $this->input->post('katakunci');
		$data['peminjaman'] = $this->m_pinjam->get_katakunci($katakunci);

		$data['title'] = 'Pengembalian Buku';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//$data['kodeunik4'] = $this->m_pinjam->buat_kode_btamu();
		//$data['peminjama'] = $this->m_pinjam->tampil_data_caripeminjaman();
	
		
		/*$data['kodeunik3'] = $this->m_pinjam->buat_kode_peminjaman();
		$data['anggota'] = $this->m_pinjam->tampil_data2()->result();
		$data['buku'] = $this->m_pinjam->getjudul();
		$data['bukuB'] = $this->m_pinjam->getjudulB();
		$data['bukuC'] = $this->m_pinjam->getjudulC();
		$data['bukuD'] = $this->m_pinjam->getjudulD();
		$data['bukuE'] = $this->m_pinjam->getjudulE();
		$data['bukuF'] = $this->m_pinjam->getjudulF();
		$data['bukuG'] = $this->m_pinjam->getjudulG();
		$data['bukuH'] = $this->m_pinjam->getjudulH();
		$data['bukuI'] = $this->m_pinjam->getjudulI();
		$data['bukuJ'] = $this->m_pinjam->getjudulJ();
		$data['bukuK'] = $this->m_pinjam->getjudulK();
		$data['bukuL'] = $this->m_pinjam->getjudulL();
		$data['bukuM'] = $this->m_pinjam->getjudulM();
		$data['bukuN'] = $this->m_pinjam->getjudulN();
		$data['bukuO'] = $this->m_pinjam->getjudulO();
		$data['bukuP'] = $this->m_pinjam->getjudulP();
		$data['bukuQ'] = $this->m_pinjam->getjudulQ();
		$data['bukuR'] = $this->m_pinjam->getjudulR();
		$data['bukuS'] = $this->m_pinjam->getjudulS();
		$data['bukuT'] = $this->m_pinjam->getjudulT();
		$data['bukuU'] = $this->m_pinjam->getjudulU();
		$data['bukuV'] = $this->m_pinjam->getjudulV();
		$data['bukuW'] = $this->m_pinjam->getjudulW();
		$data['bukuX'] = $this->m_pinjam->getjudulX();
		$data['bukuY'] = $this->m_pinjam->getjudulY();
		$data['bukuZ'] = $this->m_pinjam->getjudulZ(); */
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('transaksi/caripengembalian', $data);
		$this->load->view('templates/footer');
	}

		//redirect('kelola/kelanggota');
	
	

}