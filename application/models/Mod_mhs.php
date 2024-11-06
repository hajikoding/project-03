<?php

class Mod_mhs extends CI_Model
{
    public function getData()
    {
        $query = $this->db->get('tb_mahasiswa');
        return $query->result();
    }

    function insertdata($data)
    {
        $this->db->insert('tb_mahasiswa', $data);
    }
    function deletedata($nim)
    {
        // Hapus data mahasiswa berdasarkan nim
        $this->db->where('nim', $nim);
        $this->db->delete('tb_mahasiswa'); // Ganti 'mahasiswa' dengan nama tabel yang sesuai di database Anda
    }
}