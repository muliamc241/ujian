<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PasienModel extends CI_Model
{
    public function get_data_berobat($tgl_berobat)
    {
        $this->db->select('nama_pasien, nik, tgl_berobat, nama_asuransi, nama_poliklinik, nama_dokter');
        $this->db->join('tbl_asuransi', 'tbl_asuransi.id_asuransi = tbl_pendaftaran.id_asuransi');
        $this->db->join('tbl_poliklinik', 'tbl_poliklinik.id_poliklinik = tbl_pendaftaran.id_poliklinik');
        $this->db->join('tbl_dokter', 'tbl_dokter.id_dokter = tbl_pendaftaran.id_dokter');
        $this->db->where('tgl_berobat', $tgl_berobat);
        
        return $this->db->get('tbl_pendaftaran')->result();
    }
}