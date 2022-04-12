<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PasienModel extends CI_Model
{
	
    public function get_data_berobat($tgl_berobat)
    {
	
        // $this->db->select('p.nama_pasien, p.nik, date_format(p.tgl_berobat , "%d-%m-%Y") as tgl_berobat, a.nama_asuransi, po.nama_poliklinik, d.nama_dokter');
        // $this->db->join('tbl_asuransi a', 'a.id_asuransi = p.id_asuransi');
        // $this->db->join('tbl_poliklinik po', 'po.id_poliklinik = p.id_poliklinik');
        // $this->db->join('tbl_dokter d', 'd.id_dokter = p.id_dokter');
        // $this->db->where('p.tgl_berobat', $tgl_berobat);

        // return $this->db->get('tbl_pendaftaran p')->result();

        $this->db->select('b.nama_user as namapas, b.no_identitas, date_format(a.tgl_berobat , "%d-%m-%Y") as tgl_berobat, c.nama_asuransi, d.nama_poliklinik, ba.nama_user as nama_dokter');
        $this->db->join('tbl_asuransi c', 'c.id_asuransi = a.id_asuransi');
        $this->db->join('tbl_poliklinik d', 'd.id_poliklinik = a.id_poliklinik');
        $this->db->join('tbl_user b', 'b.id_user = a.id_pasien');
        $this->db->join('tbl_user ba', 'ba.id_user = a.id_dokter');
        $this->db->where('a.tgl_berobat', $tgl_berobat);

        return $this->db->get('tbl_pendaftaran a')->result();
        
        
    }
}