<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('front/header');
        $this->load->view('front/index');
        $this->load->view('front/footer');
    }

    public function promokost()
    {
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
        }
        else {
            $this->load->view('front/promo-kost');
        }
    }
}
