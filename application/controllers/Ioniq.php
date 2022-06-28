<?php

class Ioniq extends CI_Controller
{

    public function index($nama = 'Ioniq 5 | Hyundai Sale')
    {

        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        $this->load->view('ioniq/index', $data);
        $this->load->view('template/footer');
    }
}
