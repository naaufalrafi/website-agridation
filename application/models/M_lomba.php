<?php

class M_lomba extends  CI_Model
{
    function input_pendaftaran($data, $table)
    {
        $query = $this->db->insert($data, $table);
        return $this->db->insert_id();
    }
    function daftarcheckl($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='M' AND id_lomba=1");
        return $query->result();
    }
    function verifcheckl($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='V' AND id_lomba=1");
        return $query->result();
    }
    function veriftml($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='TM' AND id_lomba=1");
        return $query->result();
    }
    function verifpkl($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PK' AND id_lomba=1");
        return $query->result();
    }
    function verifgagall($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='G' AND id_lomba=1");
        return $query->result();
    }
    function veriffinalisl($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='F' AND id_lomba=1");
        return $query->result();
    }
    function verifpptl($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PP' AND id_lomba=1");
        return $query->result();
    }
    //business plan
    function daftarcheckb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='M' AND id_lomba=3");
        return $query->result();
    }
    function verifcheckb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='V' AND id_lomba=3");
        return $query->result();
    }
    function veriftmb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='TM' AND id_lomba=3");
        return $query->result();
    }
    function verifpkb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PK' AND id_lomba=3");
        return $query->result();
    }
    function verifpfb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PF' AND id_lomba=3");
        return $query->result();
    }
    function verifgagalpropob($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='GP' AND id_lomba=3");
        return $query->result();
    }
    function verifgagalb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='G' AND id_lomba=3");
        return $query->result();
    }
    function veriffinalisb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='F' AND id_lomba=3");
        return $query->result();
    }
    function verifpptb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PP' AND id_lomba=3");
        return $query->result();
    }
    function veriflolosproposalb($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='LP' AND id_lomba=3");
        return $query->result();
    }
    //fotografi
    function daftarcheckf($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='M' AND id_lomba=5");
        return $query->result();
    }
    function verifcheckf($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='V' AND id_lomba=5");
        return $query->result();
    }
    function verifpkf($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PK' AND id_lomba=5");
        return $query->result();
    }
    //podcast
    function daftarcheckp($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='M' AND id_lomba=2");
        return $query->result();
    }
    function verifcheckp($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='V' AND id_lomba=2");
        return $query->result();
    }
    function verifpkp($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PK' AND id_lomba=2");
        return $query->result();
    }
    //poster
    function daftarcheckpo($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='M' AND id_lomba=6");
        return $query->result();
    }
    function verifcheckpo($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='V' AND id_lomba=6");
        return $query->result();
    }
    function verifpkpo($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PK' AND id_lomba=6");
        return $query->result();
    }
    //cvideo
    function daftarcheckc($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='M' AND id_lomba=4");
        return $query->result();
    }
    function verifcheckc($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='V' AND id_lomba=4");
        return $query->result();
    }
    function verifpkc($id)
    {
        $query = $this->db->query("SELECT * FROM glomba WHERE id_user=$id AND status='PK' AND id_lomba=4");
        return $query->result();
    }
    function update_statustm($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
     function detaillomba($id)
     {
        $query = $this->db->query("SELECT * FROM dlomba WHERE id_dlomba=$id");
        return $query->result();
     }
}