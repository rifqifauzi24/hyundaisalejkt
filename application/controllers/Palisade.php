<?php

class Palisade extends CI_Controller
{

    public function index($nama = 'Palisade | Hyundai Sale')
    {

        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        $this->load->view('palisade/index', $data);
        $this->load->view('template/footer');
    }
}
