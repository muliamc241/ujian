<?php

class LaporanModel extends CI_Model
{
    public function kunjungan_poliklinik($tahun)
    {
        $this->db->where('tgl_berobat', $tahun);
        $query = $this->db->get('tbl_pendaftaran');
		return $query->result_array();
		
    }
}