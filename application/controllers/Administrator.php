<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_tamu');
				$this->load->helper('url');
				$this->load->library('session');
				$this->load->library('pagination');
	}
	// function grafik(){
	// 	$x['data']=$this->m_data->get_data_stok();
	// 	$this->load->view('administrator/index',$x);
	// }
	public function index(){
		$data['title'] = 'Halaman Admin';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		// $data['data']=$this->m_tamu->get_data_stok();
		 $data['data_anggota']=$this->db->get('data_anggota')->num_rows();
		 $data['data_buku']=$this->db->get('data_buku')->num_rows();
		 $data['peminjaman']=$this->db->get('peminjaman')->num_rows();
		  $data['data']=$this->m_tamu->get_data_anggota();
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('administrator/index', $data);
		$this->load->view('templates/footer');
	}

	public function buku_tamu(){
 $config['base_url'] = site_url('administrator/buku_tamu'); //site url
        $config['total_rows'] = $this->db->count_all('buku_tamu'); //total row
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
        $data['data'] = $this->m_tamu->getdatatamu($config["per_page"], $data['page'])->result();;           

        $data['pagination'] = $this->pagination->create_links();

		$data['title'] = 'Buku Tamu';

		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		
		
		
		$data['kodeunik4'] = $this->m_tamu->buat_kode_btamu();
		//$data['anggota'] = $this->m_tamu->tampil_data2()->result();
	//	$data['buku'] = $this->m_tamu->tampil_data()->result();
//  var_dump($data); die;
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('administrator/buku_tamu', $data);
		//$this->load->view('v_pos');
		$this->load->view('templates/footer_laporan');
}



public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->m_tamu->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->m_tamu->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect ('Administrator/buku_tamu');
 
}
}
$this->load->view('administrator/buku_tamu');
}

/*function tambah_tamu(){
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
	$this->m_tamu->input_buku_tamu($data,'buku_tamu');
	redirect('administrator/buku_tamu');
}*/

/*function get_tamu(){
	$kode=$this->input->post('id_anggota');
	$data=$this->m_tamu->get_data_tamu_bykode($id_anggota);
	echo json_encode($data);
}*/

function get_anggota(){
	$id_anggota=$this->input->post('id_anggota');
	$data=$this->m_tamu->get_data_tamu_bykode($id_anggota);
	echo json_encode($data);
}

public function cari(){
		$katakunci = $this->input->post('katakunci');
		$data['buku_tamu'] = $this->m_tamu->get_katakunci($katakunci);
		$data['title'] = 'Buku Tamu';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		// $this->load->view('Kelola/kelanggota', $data);
		$this->load->view('Administrator/caritamu', $data);
		$this->load->view('templates/footer');

		//redirect('kelola/kelanggota');
	}
}
