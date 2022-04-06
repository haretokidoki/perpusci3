<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    
	public function __construct()
	{
		parent::__construct();
        $this->load->library(array('form_validation','email','session'));
        $this->load->helper(array('text','url','cookie','string')); 
        $this->load->model('user_model');
	}

    public function index()
    {   
        $cookie = get_cookie('tiga_serangkai');
        if ($this->session->userdata('nama') != '') {
            redirect(base_url('dashboard'));
        }elseif ($cookie != '') {
            $sesi = $this->user_model->get_detail_by_cookie($cookie);
            $this->session->set_userdata($sesi);
            redirect(base_url('dashboard'));
        }
    	$this->load->view("login");
    }

    public function auth(){
        $email = $this->input->post('email');
        $pwd = md5($this->input->post('password'));
        // echo $email;
        // echo md5($pwd);
        $auth = $this->user_model->auth($email, $pwd);

        if ($auth == TRUE) {
            
            $sesi = $this->user_model->get_detail($email);

            if ($this->input->post('remember-me')!='') {
                $key = random_string('alnum',64);
                // die($key);
                set_cookie('tiga_serangkai',$key,3600*24*30);
                $this->user_model->update_cookie($key,$sesi['id_user']);
            }


            $this->session->set_userdata($sesi);
            redirect(base_url('dashboard'));
        }else{
            $this->session->set_flashdata('pesan', 'Username atau password yang anda masukkan salah!');
            redirect(base_url('login'));
        }
    }

    public function logout()
    {
        delete_cookie('tiga_serangkai');
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

}
