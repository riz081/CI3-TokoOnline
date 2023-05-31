<?php

class Kategori extends CI_Controller
{

    public function laptop()
    {
        $data['laptop'] = $this->model_kategori->data_laptop()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laptop', $data);
        $this->load->view('templates/footer');
    }

    public function handphone()
    {
        $data['handphone'] = $this->model_kategori->data_handphone()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('handphone', $data);
        $this->load->view('templates/footer');
    }
}
