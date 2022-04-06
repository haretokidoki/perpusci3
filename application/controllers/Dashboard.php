<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
	}	

	public function index()
	{	
		$data['nama'] = $this->session->userdata('nama');
		$data['alamat'] = $this->session->userdata('alamat');
		$data['email'] = $this->session->userdata('email');
		$data['hobi'] = ['Masak', 'Menggambar', 'Kerajinan Tangan'];

		$this->load->view('dashboard', $data);
	}

	public function about()
	{
		echo "Hai, ini halaman about";
	}

}
