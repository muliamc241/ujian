<?php

class LaporanModel extends CI_Model
{
    public function kunjungan_poliklinik()
    {
        $query = $this->db->get('tbl_pendaftaran');
		return $query->result_array();
		
    }

    public function jumlahkunjungan($id_poli,$tahun,$bulan)
    {   
        $tanggal = "$tahun-$bulan-01";
    	$query = $this->db->query("SELECT sum(id_poliklinik) as jumlah FROM tbl_pendaftaran WHERE MONTH(tgl_berobat) = $bulan  AND year(tgl_berobat) = $tahun  AND id_poliklinik = $id_poli"); 

    	return $query->result_array();
    }


	
}