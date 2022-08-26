<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index(){
		$data['title'] = 'Manajemen Menu';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('templates/footer');
	}
}