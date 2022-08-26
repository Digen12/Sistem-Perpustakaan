<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepala extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_laporan');
                $this->load->helper(array('url','form','download'));
	}
	public function index(){
		$data['title'] = 'Halaman Kepala';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		 $data['data_anggota']=$this->db->get('data_anggota')->num_rows();
		 $data['data_buku']=$this->db->get('data_buku')->num_rows();
		 $data['peminjaman']=$this->db->get('peminjaman')->num_rows();
		   $data['data']=$this->m_laporan->get_data_anggota();
		    $data['data1']=$this->m_laporan->get_data_buku();
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kepala/index', $data);
		$this->load->view('templates/footer_kepala');
	}

	public function laporan(){
		$data['title'] = 'Data Laporan';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['laporan'] = $this->m_laporan->tampil_data()->result();
		 $data['laporan'] = $this->m_laporan->getAllFiles();
      //$this->load->view('laporan', $data);
		//$data['kodeunik'] = $this->m_data->buat_kode();		

		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kepala/laporan', $data);
		//$this->load->view('templates/footer_kepala');
}

	public function download($id_laporan){
    $this->load->helper('download');
    $fileinfo = $this->m_laporan->download($id_laporan);
    $i = 'uploads/'.$fileinfo['nama_laporan'];
    force_download($i, NULL);
}
}