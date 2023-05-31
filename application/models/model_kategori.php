<?php

class Model_kategori extends CI_Model
{

    public function data_laptop()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'laptop'));
    }

    public function data_handphone()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'handphone'));
    }
}
