<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('masuk') != TRUE) {
			$url=base_url('login');
			redirect($url);
		} else {
			$this->load->view('headeradmin');
			$this->load->view('dashboard');
		}
	}

	public function dash(){
		if($this->session->userdata('akses')==1 || $this->session->userdata('akses')==2){

			$data['akses'] = $this->$login_blog->auth_akses()->result();
			$this->load->view('dashboard');

		}else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
		
	}
}

