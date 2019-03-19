<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('user_login');
    }

    function index(){
        $data['status'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('nama');

        $this->load->view('front/header', $data);
        $this->load->view('front/login');
        $this->load->view('front/footer');
    }

    function aksilogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->user_login->cek_login("users",$where)->num_rows();
        if($cek > 0){
    
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
    
            $this->session->set_userdata($data_session);

            redirect(base_url("user"));
        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }


}