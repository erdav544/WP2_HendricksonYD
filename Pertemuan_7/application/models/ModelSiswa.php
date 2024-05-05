<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelSiswa extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('data_siswa', $data);
    }
    public function getData()
    {
        $this->db->select('*');
        $this->db->from('data_siswa');
        $query = $this->db->get();
        $returnArray = $query->result();
        return $returnArray;
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('data_siswa');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
