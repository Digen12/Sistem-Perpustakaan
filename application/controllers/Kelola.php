<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url','form');
                 //load libary pagination
        $this->load->library('pagination');
	}

    function gtdata(){

        
    }

	public function index(){

		$data['title'] = 'Data Buku';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['data_buku'] = $this->m_data->tampil_data()->result();
		$data['kodeunik2'] = $this->m_data->buat_kode_buku();

		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('kelola/index', $data);
		$this->load->view('templates/footer_laporan');
	}

	public function kelanggota(){
		//konfigurasi pagination
        $config['base_url'] = site_url('Kelola/kelanggota'); //site url
        $config['total_rows'] = $this->db->count_all('data_anggota'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
	  $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_data->getdata($config["per_page"], $data['page'])->result();;           

        $data['pagination'] = $this->pagination->create_links();

        //load view mahasiswa view
        // $this->load->view('kelanggota',$data);
		$data['title'] = 'Data Anggota';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		// $data['data_anggota'] = $this->m_data->tampil_data2()->result();
		$data['kodeunik'] = $this->m_data->buat_kode();		

		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('kelola/kelanggota', $data);
		$this->load->view('templates/footer_laporan');
}
// ini function buat manggil data anggota stlh dicari
public function carianggota(){
	$data['title'] = 'Data Anggota';
	//mengambil data dr user berdasar email yg ada di session
	$data['user'] = $this->db->get_where('user', ['email' =>
	$this->session->userdata('email')])->row_array();
	
	$data['data_anggota'] = $this->m_data->tampil_data2()->result();
	$data['kodeunik'] = $this->m_data->buat_kode();		

	//me load templates tampilan admin
	$this->load->view('templates/header', $data);
	$this->load->view('templates/sidebar', $data);
	//$this->load->view('templates/topbar', $data);
	$this->load->view('kelola/carianggota', $data);
	$this->load->view('templates/footer_laporan');
}

// ini function buat manggil data anggota stlh dicari
public function caribuku(){
	$data['title'] = 'Data Anggota';
	//mengambil data dr user berdasar email yg ada di session
	$data['user'] = $this->db->get_where('user', ['email' =>
	$this->session->userdata('email')])->row_array();
	
	$data['data_anggota'] = $this->m_data->tampil_data2()->result();
	$data['kodeunik'] = $this->m_data->buat_kode();		

	//me load templates tampilan admin
	$this->load->view('templates/header', $data);
	$this->load->view('templates/sidebar', $data);
	//$this->load->view('templates/topbar', $data);
	$this->load->view('kelola/caribuku', $data);
	$this->load->view('templates/footer');
}
		
		function tambah_aksi_anggota(){
		$id_anggota = $this->input->post('id_anggota');
		$nama = $this->input->post('nama'); 
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tingkat_pendidikan = $this->input->post('tingkat_pendidikan');
		$kategori = $this->input->post('kategori');

		$data_created = date('Y-m-d',strtotime($this->input->post('data_created')));

		
 
		$data = array(
			'id_anggota' => $id_anggota,
			'nama' => $nama,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'jenis_kelamin' => $jenis_kelamin,
			 'tingkat_pendidikan' => $tingkat_pendidikan,
			'kategori' => $kategori,
			'data_created' => $data_created
			);
 
		$this->m_data->input_data_anggota($data,'data_anggota');
		 echo $this->session->set_flashdata('message', '<div><i class="alert alert-success">Data berhasil ditambahkan</i></div>');
		redirect('kelola/kelanggota');	 
	}

		function tambah_aksi_buku(){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$penerbit = $this->input->post('penerbit');
		$penulis = $this->input->post('penulis');
		$tahun_cetak = $this->input->post('tahun_cetak');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');
		$label = $this->input->post('label');
		
 
		$data = array(
			'id' => $id,
			'judul' => $judul,
			'penerbit' => $penerbit,
			'penulis' => $penulis,
			'tahun_cetak' => $tahun_cetak,
			'stok' => $stok,
			'kategori' => $kategori,
			'label' => $label
			);
		$this->m_data->input_data_buku($data,'data_buku');
		echo $this->session->set_flashdata('message', '<div><i class="alert alert-success">Data berhasil ditambahkan</i></div>');
		redirect('kelola');
	}

		function hapus_buku($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data_buku($where,'data_buku');
		echo $this->session->set_flashdata('message', '<div><i class="alert alert-danger">Data berhasil dihapus</i></div>');
		redirect('kelola/index');
	}

		function hapus_anggota($id_anggota){
		$where = array('id_anggota' => $id_anggota);
		$this->m_data->hapus_data_anggota($where,'data_anggota');
		 echo $this->session->set_flashdata('message', '<div><i class="alert alert-danger">Data berhasil dihapus</i></div>');
		redirect('kelola/kelanggota');
	}

		

	function update(){
	$id_anggota = $this->input->post('id_anggota');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tingkat_pendidikan = $this->input->post('tingkat_pendidikan');
		$kategori = $this->input->post('kategori');
		$data_created = date('Y-m-d',strtotime($this->input->post('data_created')));
 
	$data = array(
			'id_anggota' => $id_anggota,
			'nama' => $nama,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'jenis_kelamin' => $jenis_kelamin,
			'tingkat_pendidikan' => $tingkat_pendidikan,
			'kategori' => $kategori,
			'data_created' => $data_created
			);
 
	$where = array(
		'id_anggota' => $id_anggota
	);
  
	$this->m_data->update_data($where,$data,'data_anggota');
	echo $this->session->set_flashdata('message', '<div><i class="alert alert-warning">Data berhasil diubah</i></div>');
	redirect('kelola/kelanggota');
}

function update_buku(){
	$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$penerbit = $this->input->post('penerbit');
		$penulis = $this->input->post('penulis');
		$tahun_cetak = $this->input->post('tahun_cetak');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');
		
 
		$data = array(
			'id' => $id,
			'judul' => $judul,
			'penerbit' => $penerbit,
			'penulis' => $penulis,
			'tahun_cetak' => $tahun_cetak,
			'stok' => $stok,
			'kategori' => $kategori
			);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data_buku($where,$data,'data_buku');
	echo $this->session->set_flashdata('message', '<div><i class="alert alert-warning">Data berhasil diubah</i></div>');
	redirect('kelola/index');
}

	public function cari(){
		
		$katakunci = $this->input->post('katakunci');
		$data['data_anggota'] = $this->m_data->get_katakunci($katakunci);
		$data['title'] = 'Data Anggota';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		// $this->load->view('Kelola/kelanggota', $data);
		$this->load->view('Kelola/carianggota', $data);
		$this->load->view('templates/footer_laporan');

		//redirect('kelola/kelanggota');
	}


	public function cari_buku(){
		$katakunci2 = $this->input->post('katakunci2');
		$data['data_buku'] = $this->m_data->get_katakunci2($katakunci2);
		$data['title'] = 'Data Buku';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('Kelola/caribuku', $data);
		$this->load->view('templates/footer');

		//redirect('kelola/kelanggota');
	}

	public function pdf(){
		$this->load->library('dompdf_gen');
		$data['data_anggota'] = $this->m_data->tampil_data2('data_anggota')->result();
		$this->load->view('laporan_pdf', $data);

		$kertas = 'A4';
		$orientasi = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($kertas, $orientasi);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("coba_laporan.pdf", array('Attachment' =>0));

	}

	public function detailang($id_anggota){
		//$this->load->model('m_data');
		$detailang = $this->m_data->detail_anggota($id_anggota);
		$data['detailang'] = $detailang;
		$this->load->view('Kelola/detailang', $data);
	}

	public function detailbuk($id){
		//$this->load->model('m_data');
		$detailbuk = $this->m_data->detail_buku($id);
		$data['detailbuk'] = $detailbuk;
		$this->load->view('Kelola/detailbuk', $data);
	}
}
?>