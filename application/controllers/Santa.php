<?php

class Santa extends CI_Controller
{

    public function index($nama = 'Santa FE | Hyundai Sale')
    {

        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        $this->load->view('santa/index', $data);
        $this->load->view('template/footer');
    }
}
