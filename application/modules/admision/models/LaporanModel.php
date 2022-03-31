<?php

class LaporanModel extends CI_Model
{
    public function kunjungan_poliklinik($tahun)
    {
    
   $this->db->select(
    'nama_poliklinik,
	SUM( IF( MONTH(tgl_berobat)=01, 1 , 0) ) AS jan,
	SUM( IF( MONTH(tgl_berobat)=02, 1 , 0) ) AS feb,
	SUM( IF( MONTH(tgl_berobat)=03, 1 , 0) ) AS mar,
	SUM( IF( MONTH(tgl_berobat)=04, 1 , 0) ) AS apr,
	SUM( IF( MONTH(tgl_berobat)=05, 1 , 0) ) AS mei,
	SUM( IF( MONTH(tgl_berobat)=06, 1 , 0) ) AS jun,
	SUM( IF( MONTH(tgl_berobat)=07, 1 , 0) ) AS jul,
	SUM( IF( MONTH(tgl_berobat)=08, 1 , 0) ) AS agu,
	SUM( IF( MONTH(tgl_berobat)=09, 1 , 0) ) AS sep,
	SUM( IF( MONTH(tgl_berobat)=10, 1 , 0) ) AS okt,
	SUM( IF( MONTH(tgl_berobat)=11, 1 , 0) ) AS nov,
	SUM( IF( MONTH(tgl_berobat)=12, 1 , 0) ) AS des'
    );
    // $this->db->where('year(b.tgl_berobat)',$tahun); 
    $this->db->join('tbl_pendaftaran as b','a.id_poliklinik = b.id_poliklinik and year(tgl_berobat) ='.$tahun,'left');
    $this->db->group_by('a.id_poliklinik');
    return $this->db->get('tbl_poliklinik a')->result();
    

    }
}