<?php

class Mahasiswa_model extends CI_Model
{
    public function getMahasiswa($npm = null)
    {
        if ($npm == null) {
            return $this->db->get('mahasiswa')->result_array();
        } else {
            return $this->db->get_where('mahasiswa', ['npm' => $npm])->result_array();
        }
    }

    public function postMahasiswa($data)
    {
        $this->db->insert('mahasiswa', $data);
        return $this->db->affected_rows();
    }
}
