<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelola_Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('TransaksiModel');
	}

   /* public function lapanggota(){
		$data['title'] = 'Data Anggota';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['data_anggota'] = $this->TransaksiModel->tampil_data2()->result();
		$data['kodeunik'] = $this->TransaksiModel->buat_kode();		

		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('Kelola_Laporan/lapanggota', $data);
		$this->load->view('templates/footer');
}*/

public function index(){
        $data['title'] = 'Data Anggota';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		
            if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                $filter = $_GET['filter']; // Ambil data filder yang dipilih user
    
                if($filter == '2'){ // Jika filter nya 2 (per bulan)
                    $bulan = $_GET['bulan'];
                    $tahun = $_GET['tahun'];
                    $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
    
                    $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                    $url_cetak = 'kelola_laporan/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                    $data_anggota = $this->TransaksiModel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
                }else{ // Jika filter nya 3 (per tahun)
                    $tahun = $_GET['tahun'];
    
                    $ket = 'Data Transaksi Tahun '.$tahun;
                    $url_cetak = 'kelola_laporan/cetak?filter=3&tahun='.$tahun;
                    $data_anggota = $this->TransaksiModel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
                }
            }else{ // Jika user tidak mengklik tombol tampilkan
                $ket = 'Semua Data Transaksi';
                $url_cetak = 'kelola_laporan/cetak';
                $data_anggota = $this->TransaksiModel->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
            }
    
            $data['ket'] = $ket;
            $data['url_cetak'] = base_url('index.php/'.$url_cetak);
            $data['data_anggota'] = $data_anggota;
            $data['option_tahun'] = $this->TransaksiModel->option_tahun();		

		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('kelola_laporan/view', $data);
        $this->load->view('templates/footer_laporan');
    }

    public function laporan_pengunjung(){
        $data['title'] = 'Data Pengunjung';
        //mengambil data dr user berdasar email yg ada di session
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        
            if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                $filter = $_GET['filter']; // Ambil data filder yang dipilih user
    
                if($filter == '2'){ // Jika filter nya 2 (per bulan)
                    $bulan = $_GET['bulan'];
                    $tahun = $_GET['tahun'];
                    $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
    
                    $ket = 'Data Pengunjung Bulan '.$nama_bulan[$bulan].' '.$tahun;
                    $url_cetak1 = 'kelola_laporan/cetakP?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                    $buku_tamu = $this->TransaksiModel->view_by_monthP($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
                }else{ // Jika filter nya 3 (per tahun)
                    $tahun = $_GET['tahun'];
    
                    $ket = 'Data Pengunjung Tahun '.$tahun;
                    $url_cetak1 = 'kelola_laporan/cetakP?filter=3&tahun='.$tahun;
                    $buku_tamu = $this->TransaksiModel->view_by_yearP($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
                }
            }else{ // Jika user tidak mengklik tombol tampilkan
                $ket = 'Semua Data Pengunjung';
                $url_cetak1 = 'kelola_laporan/cetakP';
                $buku_tamu = $this->TransaksiModel->view_allP(); // Panggil fungsi view_all yang ada di TransaksiModel
            }
    
            $data['ket'] = $ket;
            $data['url_cetak1'] = base_url('index.php/'.$url_cetak1);
            $data['buku_tamu'] = $buku_tamu;
            $data['option_tahun'] = $this->TransaksiModel->option_tahun();      

        //me load templates tampilan admin
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        //$this->load->view('templates/topbar', $data);
        $this->load->view('kelola_laporan/laporan_pengunjung', $data);
        $this->load->view('templates/footer_laporan');
    }

    public function lapbuku(){
        $data['title'] = 'Data Peminjaman';
        //mengambil data dr user berdasar email yg ada di session
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['p'] = $this->TransaksiModel->tampil_data_histori();
        
            if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                $filter = $_GET['filter']; // Ambil data filder yang dipilih user
    
                if($filter == '2'){ // Jika filter nya 2 (per bulan)
                    $bulan = $_GET['bulan'];
                    $tahun = $_GET['tahun'];
                    $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
    
                    $ket = 'Data Peminjaman Bulan '.$nama_bulan[$bulan].' '.$tahun;
                    $url_cetak2 = 'kelola_laporan/cetakpinjam?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                    $peminjaman = $this->TransaksiModel->view_by_monthPinjam($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
                }else{ // Jika filter nya 3 (per tahun)
                    $tahun = $_GET['tahun'];
    
                    $ket = 'Data Peminjaman Tahun '.$tahun;
                    $url_cetak2 = 'kelola_laporan/cetakpinjam?filter=3&tahun='.$tahun;
                    $peminjaman = $this->TransaksiModel->view_by_yearPinjam($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
                }
            }else{ // Jika user tidak mengklik tombol tampilkan
                $ket = 'Semua Data Peminjaman';
                $url_cetak2 = 'kelola_laporan/cetakpinjam';
                $peminjaman = $this->TransaksiModel->view_allPinjam(); // Panggil fungsi view_all yang ada di TransaksiModel

            }
    
            $data['ket'] = $ket;
            $data['url_cetak2'] = base_url('index.php/'.$url_cetak2);
            $data['peminjaman'] = $peminjaman;
            $data['option_tahun'] = $this->TransaksiModel->option_tahun();      

        //me load templates tampilan admin
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        //$this->load->view('templates/topbar', $data);
        $this->load->view('kelola_laporan/lapbuku', $data);
        $this->load->view('templates/footer_laporan');
    }

    public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $data_anggota = $this->TransaksiModel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else if($filter == '3'){ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data Transaksi Tahun '.$tahun;
                $data_anggota = $this->TransaksiModel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $data_anggota = $this->TransaksiModel->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }

        $data['ket'] = $ket;
        $data['data_anggota'] = $data_anggota;

		ob_start();
		$this->load->view('kelola_laporan/print', $data);
		$html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A3','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Transaksi.pdf', 'D');
	}
}

        public function cetakpinjam(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $peminjaman = $this->TransaksiModel->view_by_monthPinjam($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else if($filter == '3'){ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data Transaksi Tahun '.$tahun;
                $peminjaman = $this->TransaksiModel->view_by_yearPinjam($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel

            
        }else  { // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $peminjaman = $this->TransaksiModel->view_allPinjam(); // Panggil fungsi view_all yang ada di TransaksiModel
  

        }

        $data['ket'] = $ket;
        $data['peminjaman'] = $peminjaman;

        ob_start();
        $this->load->view('kelola_laporan/print_peminjaman', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('L','A5','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Transaksi.pdf', 'D');
    }
}

 public function cetakP(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $buku_tamu = $this->TransaksiModel->view_by_monthP($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else if($filter == '3'){ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data Transaksi Tahun '.$tahun;
                $buku_tamu = $this->TransaksiModel->view_by_yearP($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $buku_tamu = $this->TransaksiModel->view_allP(); // Panggil fungsi view_all yang ada di TransaksiModel
        }

        $data['ket'] = $ket;
        $data['buku_tamu'] = $buku_tamu;

        ob_start();
        $this->load->view('kelola_laporan/print_pengunjung', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A3','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Transaksi.pdf', 'D');
    }
}

public function kirim_laporan(){
    $data['title'] = 'Kirim laporan';
    //mengambil data dr user berdasar email yg ada di session
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['kodeunik2'] = $this->TransaksiModel->buat_kode_laporan();
    $data['kodeunik'] = $this->TransaksiModel->buat_kode_laporan_pengunjung();
    $data['kodeunik3'] = $this->TransaksiModel->buat_kode_laporan_peminjaman();

    //me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/topbar', $data);
		$this->load->view('kelola_laporan/kirim_laporan', $data);
        $this->load->view('templates/footer_laporan');
}

public function create()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'docx|pdf|';
                $config['max_size']             = 0;
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('nama_laporan'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('kelola_laporan/kirim_laporan', $error);
                }
                else
                {
                        $upload_data = $this->upload->data();
                        $id_laporan = $this->input->post('id_laporan');
                        $tgl_dibuat = date('Y-m-d',strtotime($this->input->post('tgl_dibuat')));
                        $data = array(
                            'id_laporan' => $id_laporan,
                        	'nama_laporan' => $upload_data['file_name'],
                            'tgl_dibuat' => $tgl_dibuat
                        );

                        $this->TransaksiModel->insert($data);
                        redirect('kelola_laporan/kirim_laporan');
                }
}

public function create_pengunjung()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'docx|pdf|';
                $config['max_size']             = 0;
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('nama_laporan_pengunjung'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $upload_data = $this->upload->data();
                        $id_laporan_pengunjung = $this->input->post('id_laporan_pengunjung');
                        $tgl_dibuat_pengunjung = date('Y-m-d',strtotime($this->input->post('tgl_dibuat_pengunjung')));
                        $data = array(
                            'id_laporan_pengunjung' => $id_laporan_pengunjung,
                            'nama_laporan_pengunjung' => $upload_data['file_name'],
                            'tgl_dibuat_pengunjung' => $tgl_dibuat_pengunjung
                        );

                        $this->TransaksiModel->insert_pengunjung($data);
                        redirect('kelola_laporan/kirim_laporan');
                }
}

public function create_peminjaman()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'docx|pdf|';
                $config['max_size']             = 0;
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('nama_laporan_peminjaman'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $upload_data = $this->upload->data();
                        $id_laporan_peminjaman = $this->input->post('id_laporan_peminjaman');
                        $tgl_dibuat_peminjaman = date('Y-m-d',strtotime($this->input->post('tgl_dibuat_peminjaman')));
                        $data = array(
                            'id_laporan_peminjaman' => $id_laporan_peminjaman,
                            'nama_laporan_peminjaman' => $upload_data['file_name'],
                            'tgl_dibuat_peminjaman' => $tgl_dibuat_peminjaman
                        );

                        $this->TransaksiModel->insert_peminjaman($data);
                        redirect('kelola_laporan/kirim_laporan');
                }
}
}