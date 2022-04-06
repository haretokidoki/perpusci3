<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
	}

    public function index()
    {
    	$data['list'] = $this->user_model->getUser();
        $this->load->view("user",$data);
    }

    public function add(){
        $this->load->view("user/add");
    }  

    public function insert(){

        // $gambar = time().$_FILES['gambar']['name'];
        // $config = [
        //     'upload_path' => "./assets/images/avatar/",
        //     'allowed_types' => "gif|jpg|png|jpeg",
        //     'overwrite' => TRUE,
        //     'max_size' => "2048000"
        // ];
        // $this->load->library('upload', $config);
        // $this->upload->initialize($config);
        // $this->upload->do_upload('gambar');
        // if ($this->user_model->addUser($this->input->post(), $gambar)) {
        //     $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
        //     redirect(base_url('user'));
        // }
        if ($this->user_model->addUser($this->input->post())) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }

    public function delete($id)
    {
        $this->user_model->deleteUser($id);
        redirect("./user");
    }
}
