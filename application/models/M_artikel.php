<?php

class M_artikel extends  CI_Model
{
    function dataartikel()
    {
        $query = $this->db->query("SELECT * FROM artikel");
        return $query->result();
    }
    function trendingartikel()
    {
        $query = $this->db->query("SELECT * FROM artikel LIMIT 1");
        return $query->result();
    }
    function detailartikel($id)
    {
        $query = $this->db->query("SELECT * FROM artikel WHERE id_artikel=$id");
        return $query->result();
    }
}