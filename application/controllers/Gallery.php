<?php

class Gallery extends CI_Controller
{

    public function index($nama = 'Gallery | Hyundai Sale')
    {

        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        $this->load->view('gallery/index', $data);
        $this->load->view('template/footer');
    }
}
