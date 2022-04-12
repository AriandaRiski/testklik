<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PendaftaranModel extends CI_Model
{
    public function asuransi()
    {
        return $this->db->get('tbl_asuransi')->result();
    }   

    public function poliklinik()
    {
        return $this->db->get('tbl_poliklinik')->result();
    }

    public function dokter($id_poliklinik)
    {
        // return $this->db->get_where('tbl_dokter_jaga', [
        //     'id_poliklinik' => $id_poliklinik
        // ])->result();

        $this->db->select('b.nama_user, a.id_dokter');
        $this->db->join('tbl_dokter_jaga a', 'a.id_dokter = b.id_user');
        $this->db->where('a.id_poliklinik', $id_poliklinik);
        return $this->db->get('tbl_user b')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_pendaftaran', $data);

        return $this->db->insert_id();
    }

    public function ambil_data_pasien()
    {
        return $this->db->get('tbl_user')->result();
    }
}