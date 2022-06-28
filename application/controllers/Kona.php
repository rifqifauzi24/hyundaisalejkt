<?php

class Kona extends CI_Controller
{

    public function index($nama = 'Kona | Hyundai Sale')
    {

        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        $this->load->view('kona/index', $data);
        $this->load->view('template/footer');
    }
}
