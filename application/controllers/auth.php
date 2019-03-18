<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('auth/header');
        $this->load->view('auth/index');
        $this->load->view('auth/footer');
    }
}
