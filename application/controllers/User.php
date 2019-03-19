<?php

class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
    }

    function index(){
        $data['status'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('nama');

        $this->load->view('front/header', $data);
        $this->load->view('front/user/dashboard');
        $this->load->view('front/footer');
    }
}