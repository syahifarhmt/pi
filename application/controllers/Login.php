<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('login_blog');
    }
 
    function index(){
        $this->load->view('login');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_login=$this->login_blog->auth_login($username,$password);
 
        if($cek_login->num_rows() > 0) { //akses admin 
            $data=$cek_login->row_array();
            $this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata('akses', $data['akses']);
            $this->session->set_userdata('ses_id',$data['id']);
            $this->session->set_userdata('ses_nama_pengguna',$data['nama_pengguna']);
            $this->session->set_userdata('ses_nama',$data['nama']);
            redirect('dashboard');
        } else{  // jika username dan password tidak ditemukan atau salah
            $url=base_url('login');
            echo $this->session->set_flashdata('msg','Id Pengguna Atau Kata Sandi Salah');
            redirect($url);
        }
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }


}
?> 