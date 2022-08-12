<?php

class M_user extends CI_Model
{
    public function activate($data, $id)
    {
        $this->db->where('user.id_user', $id);
        return $this->db->update('user', $data);
    }
    public function insertid($data)
    {
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
    public function getUser($id)
    {
        $query = $this->db->get_where('user', array('id_user' => $id));
        return $query->row_array();
    }
}
