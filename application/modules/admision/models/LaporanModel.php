<?php

class LaporanModel extends CI_Model
{
    public function kunjungan_poliklinik($tahun)
    {
    
    $this->db->select(
    'nama_poliklinik,
	SUM( IF( MONTH(tgl_berobat), 1 , 0) ) AS jan,
	SUM( IF( MONTH(tgl_berobat), 2 , 0) ) AS feb,
	SUM( IF( MONTH(tgl_berobat), 3 , 0) ) AS mar,
	SUM( IF( MONTH(tgl_berobat), 4 , 0) ) AS apr,
	SUM( IF( MONTH(tgl_berobat), 5 , 0) ) AS mei,
	SUM( IF( MONTH(tgl_berobat), 6 , 0) ) AS jun,
	SUM( IF( MONTH(tgl_berobat), 7 , 0) ) AS jul,
	SUM( IF( MONTH(tgl_berobat), 8 , 0) ) AS agu,
	SUM( IF( MONTH(tgl_berobat), 9 , 0) ) AS sep,
	SUM( IF( MONTH(tgl_berobat), 10 , 0) ) AS okt,
	SUM( IF( MONTH(tgl_berobat), 11 , 0) ) AS nov,
	SUM( IF( MONTH(tgl_berobat), 12 , 0) ) AS des'
    );
     
    $this->db->join('tbl_poliklinik as a','a.id_poliklinik = b.id_poliklinik','left');
    $this->db->where('tgl_berobat');
    $this->db->group_by('nama_poliklinik');
    return $this->db->get('tbl_pendaftaran b')->result();
    

    }
}