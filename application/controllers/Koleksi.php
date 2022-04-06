<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('koleksi_model');
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
        // $this->config = array(
        //     // $config['upload_path']          = './uploads/';
        //     // $config['allowed_types']        = 'gif|jpg|png';
        //     // $config['max_size']             = 100;
        //     // $config['max_width']            = 1024;
        //     // $config['max_height']           = 768;
        //     'upload_path'   => './uploads/', 
        //     'allowed_types' => 'gif|jpg|png'
        // );
	}

    public function index()
    {
    	$data['list'] = $this->koleksi_model->getKoleksi();
        $this->load->view("koleksi/koleksi",$data);
    }

    public function detail($id){
    	$data['item'] = $this->koleksi_model->getDetail($id);
    	$this->load->view("koleksi/detail",$data);
    }

    public function add(){
        $this->load->view("koleksi/add");
    }  

    public function insert(){

        $gambar = time().$_FILES['gambar']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        if ($this->koleksi_model->addKoleksi($this->input->post(), $gambar)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('koleksi'));
        }
    }

    public function delete($id)
    {
        $this->koleksi_model->deleteKoleksi($id);
        redirect("./koleksi");
    }

    public function edit($id){
        $data['item'] = $this->koleksi_model->getDetail($id);
        $this->load->view('koleksi/edit', $data);
    }

    public function update($id)
    {
        $gambar = $_FILES['gambar']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')) {
            $this->koleksi_model->updateGambar($gambar, $id);
        }
        if ($this->koleksi_model->updateKoleksi($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('koleksi'));
        }
    }
}
