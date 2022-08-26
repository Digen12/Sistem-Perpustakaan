<?php
class M_pos extends CI_Model{

	function get_data_barang_bykode($id_anggota){
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

}