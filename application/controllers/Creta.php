<?php

class Creta extends CI_Controller
{

    public function index($nama = 'Creta | Hyundai Sale')
    {

        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        $this->load->view('creta/index', $data);
        $this->load->view('template/footer');
    }
}
