<?php

class M_admin extends  CI_Model
{
    function pendaftar()
    {
        $query = $this->db->query("SELECT * FROM glomba");
        return $query->num_rows();
    }
    function belumverif()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE status='M'");
        return $query->num_rows();
    }
    //LKTI
    function pendaftarlkti()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_lomba=1");
        return $query->num_rows();
    }
    function belumveriflkti()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE status='M' AND id_lomba=1");
        return $query->num_rows();
    }
    //business plan
    function pendaftarbplan()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_lomba=3");
        return $query->num_rows();
    }
    function belumverifbplan()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE status='M' AND id_lomba=3");
        return $query->num_rows();
    }
    //podcast
    function pendaftarpodcast()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_lomba=2");
        return $query->num_rows();
    }
    function belumverifpodcast()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE status='M' AND id_lomba=2");
        return $query->num_rows();
    }
    //poster
    function pendaftarposter()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_lomba=6");
        return $query->num_rows();
    }
    function belumverifposter()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE status='M' AND id_lomba=6");
        return $query->num_rows();
    }
    //cvideo
    function pendaftarcvideo()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_lomba=4");
        return $query->num_rows();
    }
    function belumverifcvideo()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE status='M' AND id_lomba=4");
        return $query->num_rows();
    }
    //fotografi
    function pendaftarfoto()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_lomba=5");
        return $query->num_rows();
    }
    function belumveriffoto()
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE status='M' AND id_lomba=5");
        return $query->num_rows();
    }
    function datapendaftarposter(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=6");
        return $query->result();
    }
    function datapendaftarfotografi(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=5");
        return $query->result();
    }
    function datapendaftarpodcast(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=2");
        return $query->result();
    }
    function datapendaftarcvideo(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=4");
        return $query->result();
    }
    function datapendaftarlkti(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=1");
        return $query->result();
    }
    function datapendaftarbp(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=3");
        return $query->result();
    }
    function dataposterbelumverif(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=6 AND status='M'");
        return $query->result();
    }
    function datafotografibelumverif(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=5 AND status='M'");
        return $query->result();
    }
    function datapodcastbelumverif(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=2 AND status='M'");
        return $query->result();
    }
    function datacvideobelumverif(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=4 AND status='M'");
        return $query->result();
    }
    function datalktibelumverif(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=1 AND status='M'");
        return $query->result();
    }
    function databpbelumverif(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=3 AND status='M'");
        return $query->result();
    }
    function datapengumpulankaryaposter(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=6 AND status='V' OR glomba.id_lomba=6 AND status='PK'");
        return $query->result();
    }
    function datapengumpulankaryafotografi(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=5 AND status='V' OR glomba.id_lomba=5 AND status='PK'");
        return $query->result();
    }
    function datapengumpulankaryapodcast(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=2 AND status='V' OR glomba.id_lomba=2 AND status='PK'");
        return $query->result();
    }
    function datapengumpulankaryacvideo(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=4 AND status='V' OR glomba.id_lomba=4 AND status='PK'");
        return $query->result();
    }
    function datapengumpulankaryalkti(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=1 AND status='V' OR glomba.id_lomba=1 AND status='PK'");
        return $query->result();
    }
    function datapengumpulankaryabp(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=3 AND status='V' OR glomba.id_lomba=3 AND status='PK'");
        return $query->result();
    }
    function datapengumpulanflyerbp(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=3 AND status='LP' OR glomba.id_lomba=3 AND status='PF'");
        return $query->result();
    }
    function datapengumpulanpptlkti(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=1 AND status='F' OR glomba.id_lomba=1 AND status='PP'");
        return $query->result();
    }
    function datapengumpulanpptbp(){
        $query = $this->db->query("SELECT * FROM glomba LEFT JOIN user ON glomba.id_user = user.id_user WHERE glomba.id_lomba=3 AND status='F' OR glomba.id_lomba=3 AND status='PP'");
        return $query->result();
    }
    function hapus_datapendaftaran($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function update_status($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}