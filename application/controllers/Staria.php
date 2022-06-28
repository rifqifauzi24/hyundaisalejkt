<?php

class Staria extends CI_Controller
{

    public function index($nama = 'Staria  | Hyundai Sale')
    {

        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        $this->load->view('staria/index', $data);
        $this->load->view('template/footer');
    }
}
