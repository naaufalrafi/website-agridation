<?php

class M_acara extends  CI_Model
{
    function input_pendaftaran($data, $table)
    {
        $query = $this->db->insert($data, $table);
        return $this->db->insert_id();
    }
    function daftarcheck($id)
    {
        $query = $this->db->query("SELECT * FROM gwebinar WHERE id_user=$id AND status='M'");
        return $query->result();
    }
    function verifcheck($id)
    {
        $query = $this->db->query("SELECT * FROM gwebinar WHERE id_user=$id AND status='V'");
        return $query->result();
    }
    function daftarcheckm($id)
    {
        $query = $this->db->query("SELECT * FROM gminie WHERE id_user=$id AND status='M'");
        return $query->result();
    }
    function verifcheckm($id)
    {
        $query = $this->db->query("SELECT * FROM gminie WHERE id_user=$id AND status='V'");
        return $query->result();
    }
    function verifpkm($id)
    {
        $query = $this->db->query("SELECT * FROM gminie WHERE id_user=$id AND status='PK'");
        return $query->result();
    }
    function daftarcheckp($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id");
        return $query->result();
    }
    function datalkti($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND id_lomba=1");
        return $query->result();
    }
    function datapodcast($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND id_lomba=2");
        return $query->result();
    }
    function databusiness($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND id_lomba=3");
        return $query->result();
    }
    function datacvideo($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND id_lomba=4");
        return $query->result();
    }
    function datafotografi($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND id_lomba=5");
        return $query->result();
    }
    function dataposter($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND id_lomba=6");
        return $query->result();
    }
    function update_statustm($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}