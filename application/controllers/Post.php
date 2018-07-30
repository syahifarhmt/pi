<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_blog');
	}

	public function index()
	{
		 
		$this->load->view('headeradmin');
		$this->load->view('post_berita');
		
	}
	
	
	public function insert(){
		$judul = $this->input->post('judul');
		$berita = $this->input->post('berita');
		$slug = $this->input->post('slug');
		$status = $this->input->post('status');
		$config['upload_path']          = 'assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('filefoto'))
        {
                //kalo gagal update
        		echo "gagal upload....";
        }
        else
        {
                $data = $this->upload->data();
                $filename = $data['file_name'];
                //redirect nanti...
                date_default_timezone_set('Asia/Karachi'); # add your city to set local time zone
				$now = date('Y-m-d H:i:s');
				$dt = array(
					'judul_berita' => $judul,
					'berita' => $berita,
					'image' => $filename,
					'slug' => $slug,
					'status' => $status,
					'published_date' => $now
				);
				$this->model_blog->insert('berita',$dt);
				redirect('blog');
        }

}
}
