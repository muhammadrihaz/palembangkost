<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promokost extends CI_Controller
{

    public function index()
    {
        $this->load->view('front/header');
        $this->load->view('front/promo-kost');
        $this->load->view('front/footer');
    }

    public function isi_data()
    {
        
    }
}
